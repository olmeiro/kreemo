<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Redirect,Response;
use Flash;

class UserController extends Controller
{
public function index(Request $request)
{

    $roles = Roles::All();

    if ($request->ajax()) {

    $data = User::select('users.*','roles.name as rolname')
    ->join('roles','users.rol_id', '=', 'roles.id')
    ->get();

    return Datatables::of($data)
    ->addIndexColumn()
    ->addColumn('action', function($row){

        $action = '
        <a class="btn btn-success btn-sm" id="show-user" data-toggle="modal" data-id='.$row->id.'><i class="fas fa-eye regular"></i></a>
        <a class="btn btn-primary btn-sm" id="edit-user" data-toggle="modal" data-id='.$row->id.'><i class="fas fa-edit"></i></a>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        ';


    return $action;
    })
    ->editColumn("estado", function($data){
        return $data->estado == 1 ? "Activo" : "Inactivo";
    })
    ->addColumn('cambiar', function ($data) {
        if($data->estado == 1)
        {
            return '<a class="btn btn-danger btn-sm" href="/user/cambiar/estado/'.$data->id.'/0">Inactivar</a>';

        }
        else
        {
            return  '<a class="btn btn-success btn-sm" href="/user/cambiar/estado/'.$data->id.'/1">Activar</a>';

        }
    })
    ->rawColumns(['action','cambiar','estado'])
    ->make(true);
    }

    return view('users');
}

public function store(Request $request)
{
    $uId = $request->user_id;
    User::updateOrCreate(['id' => $uId],['name' => $request->name, 'lastname' => $request->lastname,  'email' => $request->email, 'password'=>Hash::make($request->pw), 'rol_id'=>$request->rol]);
    return response()->json(['success'=>'Maquinaria guardada satisfactoriamente']);
}

public function show($id)
{
   $roles = Roles::All();

   $user = User::select('users.*','roles.name as rolname')
   ->join('roles','users.rol_id', '=', 'roles.id')
   ->find($id);
    return Response::json($user);

}

public function edit($id)
{
    $where = array('id' => $id);
    $user = User::where($where)->first();
    return Response::json($user);
}

public function updateState($id, $estado){

    $data = User::find($id);

    if ($data==null) {
        Flash::error("Usuario no encontrado");
        return redirect("/users");
    }

    try {

        $data->update(["estado"=>$estado]);
        Flash::success("Se modific?? el estado del usuario");
        return redirect("/users");

    } catch (\Exception $e) {

        Flash::error($e->getMessage());
        return redirect("/users");
    }
}
public function destroy($id)
{
    $user = User::find($id);
    $user->delete();
    return Response::json($user);
}
}
