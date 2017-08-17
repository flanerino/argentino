@extends('layouts.app')

@php ($title = 'Editar Gasto')

@section('content')
<h2>Editar Gasto</h2>
@include('gastos.msjs')
<form action="{{ route('update.gasto', ['gasto' => $gasto]) }}" files=true class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-user" aria-hidden="true"></i> Gasto <small>{{$gasto->concepto}}</small></h2>
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
            @include('gastos.errors')
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 profile_left">
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                        Concepto <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="concepto" required="required" name="concepto" class="form-control col-md-7 col-xs-12" type="text" value="{{$gasto->concepto}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_factura">
                        N° de Factura
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-8">
                            <input id="num_factura" type="text" name="num_factura" class="form-control col-md-7 col-xs-12" value="{{$gasto->num_factura}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proveedor">
                        Proveedor
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-10">
                            <input id="proveedor" type="text" name="proveedor" class="form-control col-md-7 col-xs-12" value="{{$gasto->proveedor}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Fecha <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-8">
                            <input id="fecha" type="text" name="fecha" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{$gasto->fecha}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Monto <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-8">
                            <input id="monto" required="required" name="monto" class="form-control col-md-7 col-xs-12" data-inputmask="'alias': 'currency', 'groupSeparator': '', 'prefix': ''" type="text" value="{{$gasto->monto}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 profile_left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Fecha de Pago
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-8">
                            <input id="fecha_pago" name="fecha_pago" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{$gasto->fecha_pago}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Fecha de Vencimiento
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-8">
                            <input id="fecha_vencimiento" name="fecha_vencimiento" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{$gasto->fecha_vencimiento}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                        Observacion
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="observacion" class="form-control col-md-7 col-xs-12" name="observacion" rows="8" cols="80">{{$gasto->observacion}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ln_solid"></div>
	    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a type="button" href="{{ route('gastos.lista') }}" class="btn btn-primary">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
