@extends('layouts.app')
@section('body')
<div class="card">
        <div class="card-header text-white" style="background-color: #616A6B">
            <strong>Actualizar servicio</strong>
        </div>
    <div class="card-body">
        @include('flash::message')
        <div class="modal-body">
                <form id="FrmAgendaServicio">
                @csrf
                    <input type="hidden" id="id">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Fecha de inicio</label>
                                    <label class="validacion" id="valfecha"></label>
                                    <input type="date" class="form-control @error('fechainicio') is-invalid @enderror" id="fechainicio">
                                    <label class="validacion" id="valfecha2"></label>
                                    @error('fechainicio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Hora inicial</label>
                                    <input type="time" class="form-control" id="horainicio">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Fecha fin</label>
                                    <label class="validacion" id="valfechafin"></label>
                                    <input type="date" class="form-control @error('fechafin') is-invalid @enderror" id="fechafin" name="fechafin">
                                    <label class="validacion" id="valfechafin2"></label>
                                    @error('fechafin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Hora final</label>
                                    <input type="time" class="form-control" id="horafin">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">M??quina</label>
                                    <label class="validacion" id="validmaquina"></label>
                                    <select class="form-control @error('idmaquina') is-invalid @enderror" name= "idmaquina" id="idmaquina">
                                    <option value="0">Seleccione</option>
                                    @foreach($maquinaria as $key =>$value)
                                        <option value="{{ $value->id }}" {{(old('idmaquina')==$value->id)? 'selected':''}}>{{ $value->id}}-{{ $value->modelo}}</option>
                                    @endforeach
                                    </select>
                                    <label class="validacion" id="validmaquina2"></label>
                                    @error('idmaquina')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">N?? cotizaci??n</label>
                                    <label class="validacion" id="validcotizacion"></label>
                                    <select class="form-control @error('idcotizacion') is-invalid @enderror" name= "idcotizacion" id="idcotizacion">
                                    <option value="0">Seleccione</option>
                                    @foreach($cotizacion as $key =>$value)
                                        <option value="{{ $value->id }}" {{(old('idcotizacion')==$value->id)? 'selected':''}}>{{ $value->id}}</option>
                                    @endforeach
                                    </select>
                                    <label class="validacion" id="validcotizacion2"></label>
                                    @error('idcotizacion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Operario 1</label>
                                    <label class="validacion" id="validoperario1"></label>
                                    <select class="form-control @error('idoperario1') is-invalid @enderror" name= "idoperario1" id="idoperario1">
                                    <option value="0">Seleccione operario</option>
                                    @foreach($operario as $key =>$value)
                                        <option value="{{ $value->id }}" {{(old('idoperario1')==$value->id)? 'selected':''}}>{{ $value->nombre}} {{ $value->apellido}}</option>
                                    @endforeach
                                    </select>
                                    <label class="validacion" id="validoperario12"></label>
                                    @error('idoperario1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Operario 2</label>
                                    <label class="validacion" id="validoperario2"></label>
                                    <select class="form-control @error('idoperario2') is-invalid @enderror" name= "idoperario2" id="idoperario2">
                                    <option value="0">Seleccione operario</option>
                                    @foreach($operario as $key =>$value)
                                        <option value="{{ $value->id }}" {{(old('idoperario2')==$value->id)? 'selected':''}}>{{ $value->nombre}} {{ $value->apellido}}</option>
                                    @endforeach
                                    </select>
                                    <label class="validacion" id="validoperario22"></label>
                                    @error('idoperario2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Estado del servicio</label>
                                    <label class="validacion" id="validestadoservicio"></label>
                                    <select class="form-control @error('idestadoservicio') is-invalid @enderror" name= "idestadoservicio" id="idestadoservicio">
                                    <option value="0">Seleccione</option>
                                    @foreach($estadoservicio as $key =>$value)
                                        <option value="{{ $value->id }}" {{(old('idestadoservicio')==$value->id)? 'selected':''}}>{{ $value->estado}}</option>
                                    @endforeach
                                    </select>
                                    <label class="validacion" id="validestadoservicio2"></label>
                                    @error('idestadoservicio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Descripci??n</label>
                                    <label class="validacion" id="valdescripcion"></label>
                                    <textarea name="descripcion" id="descripcion" cols="25" rows="3"></textarea>
                                    <label class="validacion" id="valdescripcion2"></label>
                                </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-success float-right">Editar</button>
                            <button type="button" href="/servicio/listarservicio" class="btn btn-primary">Volver</button>
                </form>
            </div>
    </div>
</div>
@endsection
@section("scripts")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"></script>
<script src="{{ asset('js/validacionListaChequeo.js') }}"></script>
@endsection
@section('style')
<link href="{{ asset('css/styleListaChequeo.css') }}" rel="stylesheet">
@endsection
