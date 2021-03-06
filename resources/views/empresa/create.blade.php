@extends('layouts.app')

@section('body')
    <div class="card">
        <div class="card-header text-white" style="background-color: #616A6B">
            <strong>Crear empresa</strong>
            <a href="/empresa/crear" class="btn btn-link">Crear empresa</a>
        </div>
        <div class="card-body">
            @include('flash::message')
            <form action="/empresa/guardar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">NIT</label>
                            <input type="text" class="form-control @error('nit') is-invalid @enderror"  name="nit" id="nit">
                            @error('nit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror"  name="nombre" id="nombre">
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Nombre Representante</label>
                            <input type="text" class="form-control @error('nombrerepresentante') is-invalid @enderror"  name="nombrerepresentante" id="nombrerepresentante">
                            @error('nombrerepresentante')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Direcci??n</label>
                            <input type="text" class="form-control @error('direccion') is-invalid @enderror"  name="direccion" id="direccion">
                            @error('direccion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Tel??fono #1</label>
                            <input type="text" class="form-control @error('telefono1') is-invalid @enderror"  name="telefono1" id="telefono1">
                            @error('telefono1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Correo #1</label>
                            <input type="text" class="form-control @error('correo1') is-invalid @enderror"  name="correo1" id="correo1">
                            @error('correo1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-lg-right">Crear</button>
            </form>
        </div>
    </div>
@endsection
