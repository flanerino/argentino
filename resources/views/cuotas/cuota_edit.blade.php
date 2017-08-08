@extends('layouts.app')

@php ($title = 'Editar Cuota')

@section ('content')
<h2> Editar Cuota </h2>
@include('cuotas.msjs')
<form action="{{ route('update_cuota_path', ['cuota' => $cuota->id] ) }}" files=true class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-usd" aria-hidden="true"></i> Cuota <small>Editar una Cuota</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li>
                    <a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @include('cuotas.errors')
            <div class="row">
              <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="nombre" id="nombre" disabled class="form-control col-md-7 col-xs-12" value="{{$cuota->socio->nombre}}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Apellido
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="apellido" id="apellido" disabled class="form-control col-md-7 col-xs-12" value="{{$cuota->socio->apellido}}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="telefono" name="telefono" disabled class="form-control col-md-7 col-xs-12" value="{{$cuota->socio->telefono}}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicilio
                      </label>
                      <div class="col-md-6 col-sm-9 col-xs-12">
                          <input id="domicilio" name="domicilio" class="form-control col-md-7 col-xs-12" type="text" disabled value="{{$cuota->socio->domicilio}}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Mes
                      </label>
                      <div class="col-md-6 col-sm-9 col-xs-12">
                        <select id="mes" name="mes" class="form-control">
                          <option value="">Seleccione mes</option>
                          <option value="1">Enero</option>
                          <option value="2">Febrero</option>
                          <option value="3">Marzo</option>
                          <option value="4">Abril</option>
                          <option value="5">Mayo</option>
                          <option value="6">Junio</option>
                          <option value="7">Julio</option>
                          <option value="8">Agosto</option>
                          <option value="9">Septiembre</option>
                          <option value="10">Ocutbre</option>
                          <option value="11">Noviembre</option>
                          <option value="12">Diciembre</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">A&ntilde;o
                      </label>
                      <div class="col-md-6 col-sm-9 col-xs-12">
                          <input id="anio" name="anio" class="form-control col-md-7 col-xs-12" type="text" value="{{$cuota->anio}}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Monto<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-9 col-xs-12">
                          <div id="fecha_nac" class="btn-group" data-toggle="buttons">
                              <input id="monto" required="required" class="form-control col-md-7 col-xs-12" type="text" name="monto" value="{{$cuota->monto}}">
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="ln_solid"></div>
	    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a class="btn btn-primary" href="{{ route('cuotas_path') }}">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
