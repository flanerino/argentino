@extends('layouts.app')

@php ($title = 'Editar Ingreso')

@section('content')
<h2>Editar Ingreso</h2>
@include('ingresos.msjs')
<form action="{{ route('update.ingreso', ['ingreso' => $ingreso]) }}" files=true class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="x_panel">
        <div class="x_title">
            <h2>
              <i class="fa fa-dollar" aria-hidden="true"></i> Ingreso
              <small>
                {{$ingreso->concepto}}
              </small>
            </h2>
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
            @include('ingresos.errors')
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 profile_left">
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                        Concepto <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="concepto" name="concepto" class="form-control col-md-7 col-xs-12" type="text" value="{{$ingreso->concepto}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_factura">
                        N° de Recibo
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-8">
                            <input id="num_recibo" disabled type="text" name="num_recibo" class="form-control col-md-7 col-xs-12" value="{{$ingreso->num_recibo}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Fecha
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-8">
                            <input id="fecha" type="text" name="fecha" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{$ingreso->fecha}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Monto <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-8">
                            <input id="monto" name="monto" class="form-control col-md-7 col-xs-12" data-inputmask="'alias': 'currency', 'groupSeparator': '', 'prefix': ''" type="text" value="{{$ingreso->monto}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Forma de Pago <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-10">
                          <select class="form-control" name="forma_pago">
                            <option value="{{ $ingreso->forma_pago or old('forma_pago') }}">{{ $ingreso->forma_pago or old('forma_pago') }}</option>
                            <option value="Efectivo">Efectivo</option>
                            <option value="Tarjeta">Tarjeta</option>
                            <option value="Transaccion Bancaria">Transaccion Bancaria</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 profile_left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Fecha de Cobro
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-8">
                            <input id="fecha_cobro" name="fecha_cobro" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{$ingreso->fecha_cobro}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Observacion
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="observacion" class="form-control col-md-7 col-xs-12" name="observacion" rows="8" cols="80">{{$ingreso->observacion}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ln_solid"></div>
	    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <span class="pull-left">
                    <a target="_blank" type="button" href="{{ route('recibo.ingreso', ['ingreso' => $ingreso]) }}" class="btn btn-success">Generar Recibo</a>
                  </span>
                  <div class="form-group pull-right">
                      <button type="submit" class="btn btn-success">Guardar</button>
                      <a type="button" href="{{ route('ingresos.lista') }}" class="btn btn-primary">Cancelar</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
