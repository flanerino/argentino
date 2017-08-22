@extends('layouts.app')

@php ($title = 'Crear Socio')

@section ('content')
<h2> Agregar Socio </h2>
@include('socios.msjs')
<form action="{{ route('store_socio_path') }}" files=true class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-user" aria-hidden="true"></i> Socios <small>Crear Socio</small></h2>
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
            @include('socios.errors')
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-12 profile_left" style="overflow:hidden">

                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 profile_left" style="overflow:hidden">
                    <div class="profile_img">
                        <!-- end of image cropping -->
                        <label for="logo">Foto</label>
                        <div><img id="cambiar_imagen" src="/./images/user.png" class="imagen" /> </div>
                        <input class="btn " id="imagen" name="imagen" type="file" onchange="readURL(this);">
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Socio <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <select id="protector" name="protector" class="form-control">
                                <option value="">Seleccione tipo</option>
                                <option <?if(old('protector')==0) echo 'selected';?> value="0">Deportista/a</option>
                                <option <?if(old('protector')==1) echo 'selected';?> value="1">Protector/a</option>
                            </select>
                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <select name="deporte_id" class="form-control">
                                <option value="">Seleccione un deporte</option>
                                @foreach($deportes as $deporte)
                                    <option value="{{$deporte->id}}"><li>{{$deporte->nombreTree}}</li></option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="nombre" id="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{old('nombre')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12" value="{{old('apellido')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">DNI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                            <input id="dni" name="dni" class="form-control col-md-7 col-xs-12" required="required" data-inputmask="'mask': '99999999'" type="text" value="{{old('dni')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ln_solid"></div>
	    <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Nacimiento</label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div id="fecha_nac" class="btn-group" data-toggle="buttons">
                                <input id="fecha_nac" data-inputmask="'mask': '99/99/9999'" class="form-control col-md-7 col-xs-12" type="text" name="fecha_nac" value="{{old('fecha_nac')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Estado Civil</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <select id="estado_civil" name="estado_civil" class="form-control col-md-7 col-xs-12">
                                <option value="1" <?if(old('estado_civil')==1) echo 'selected';?> > Soltero/a</option>
                                <option <?if(old('estado_civil')==2) echo 'selected';?> value="2">Casado/a</option>
                                <option <?if(old('estado_civil')==3) echo 'selected';?> value="3">Divorciado/a</option>
                                <option <?if(old('estado_civil')==4) echo 'selected';?> value="4">Viudo/a</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Tel&eacutefono</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="telefono" name="telefono" class="form-control col-md-7 col-xs-12" type="text" value="{{old('telefono')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicilio
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="domicilio" name="domicilio" class="form-control col-md-7 col-xs-12" type="text" value="{{ old('domicilio')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicilio Cobro
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input id="domicilio_cobro" name="domicilio_cobro" class="form-control col-md-7 col-xs-12" type="text" value="{{old('domicilio_cobro')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="email" name="email" class="form-control col-md-7 col-xs-12" type="text" value="{{old('email')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ln_solid"></div>
	    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a class="btn btn-primary" href="{{ route('socios_path') }}">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#cambiar_imagen').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

	<style>
		.imagen{
			width:100px;
			height:100px;
		}
	</style>