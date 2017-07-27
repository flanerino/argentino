@extends('layouts.app')

@php ($title = 'Mi Panel')

@section('content')

  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-usd" aria-hidden="true"></i> Ingresar Gasto</h2>
      <div class="clearfix"></div>
      @include('gastos.errors')
    </div>
    <div class="x_content" style="display: block;">
      <br>

      <form data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{ route('store.gasto') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_factura">
            N° de Factura
          </label>
          <div class="col-md-2 col-sm-2 col-xs-8">
            <input type="text" name="num_factura" class="form-control col-md-7 col-xs-12" value="{{ $gasto->num_factura or old('num_factura') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proveedor">
            Proveedor
          </label>
          <div class="col-md-4 col-sm-4 col-xs-10">
            <input type="text" name="proveedor" class="form-control col-md-7 col-xs-12" value="{{ $gasto->proveedor or old('proveedor') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            Concepto
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input name="concepto" class="form-control col-md-7 col-xs-12" type="text" value="{{ $gasto->concepto or old('concepto') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Fecha
          </label>
          <div class="col-md-3 col-sm-3 col-xs-8">
            <input placeholder="Año/Mes/Dia" type="text" name="fecha" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{ $gasto->fecha or old('fecha') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Monto
          </label>
          <div class="col-md-2 col-sm-2 col-xs-8">
            <input name="monto" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{ $gasto->monto or old('monto') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Fecha de Pago
          </label>
          <div class="col-md-3 col-sm-3 col-xs-8">
            <input placeholder="Año/Mes/Dia" name="fecha_pago" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{ $gasto->fecha_pago or old('fecha_pago') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Fecha de Vencimiento
          </label>
          <div class="col-md-3 col-sm-3 col-xs-8">
            <input placeholder="Año/Mes/Dia" name="fecha_vencimiento" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" value="{{ $gasto->fecha_vencimiento or old('fecha_vencimiento') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Observacion
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea class="form-control col-md-7 col-xs-12" name="observacion" rows="8" cols="80" value="{{ $gasto->observacion or old('observacion') }}"></textarea>
          </div>
        </div>

        <div class="ln_solid"></div>

        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection
