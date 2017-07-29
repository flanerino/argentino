@extends('layouts.app')

@php ($title = 'Crear Socio')

@section ('content')
 <h2> Agregar Socio </h2>

 <form action="{{ route('store_socio_path') }}" files=true class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="x_panel">

        <div class="x_title">
            <h2><i class="fa fa-user" aria-hidden="true"></i> Socios<small> crear un socio</small></h2>

            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Settings 1</a>
                        </li>
                        <li>
                            <a href="#">Settings 2</a>
                        </li>
                  </ul>
                </li>
                <li>
                    <a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
          @include('socios.errors')
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="nombre" id="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{old('nombre')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12" value="{{old('apellido')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nacionalidad</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="nacionalidad" name="nacionalidad" class="form-control col-md-7 col-xs-12" type="text" value="{{ old('nacionalidad')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento</label>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div id="fecha_nac" class="btn-group" data-toggle="buttons">
                        <input id="fecha_nac" placeholder="AAAA/MM/DD" data-inputmask="'mask': '9999/99/99'" class="form-control col-md-7 col-xs-12" type="text" name="fecha_nac" value="{{old('fecha_nac')}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{old('email')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">DNI
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dni" name="dni" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{old('dni')}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel&eacutefono</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="telefono" name="telefono" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{old('telefono')}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicilio
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="domicilio" name="domicilio" class="date-picker form-control col-md-7 col-xs-12"  type="text" value="{{ old('domicilio')}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicilio Cobro
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="domicilio_cobro" name="domicilio_cobro" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{old('domicilio_cobro')}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="estado_civil" name="estado_civil" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{ old('estado_civil')}}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Protector <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input name="protector" type="checkbox" value="1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Deporte <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select name="deporte_id">
                  <option value=""><li><li> </option>
                  @foreach($deportes as $deporte)
                    <option value="{{$deporte->id}}"><li>{{$deporte->deporte}}</li></option>
                  @endforeach
                </select>
                </div>
            </div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Imagen
                </label>
				<input class="field" id="imagen" name="imagen" type="file" accept="image/png, .jpeg, .jpg, image/gif">
            </div>
			<div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a class="btn btn-primary" href="{{ route('socios_path') }}">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>

        </div>
    </div>
</form>
@endsection
