@extends('layouts.app')

@php ($title = 'Ingresar Gasto')

@section('content')

  <h2>Ingresar Gasto</h2>

  <div class="x_panel">
    <div class="x_title">
      <h2>
        <i class="fa fa-usd" aria-hidden="true"></i>Gastos
        <small>ingresa un gasto</small>
      </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: block;">
      @include('gastos.errors')
      <br>

      <form data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{ route('store.gasto') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_factura">
            N° de Factura
          </label>
          <div class="col-md-2 col-sm-2 col-xs-8">
            <input id="num_factura" type="text" name="num_factura" class="form-control col-md-7 col-xs-12" value="{{ old('num_factura') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proveedor">
            Proveedor
          </label>
          <div class="col-md-4 col-sm-4 col-xs-10">
            <input id="proveedor" type="text" name="proveedor" class="form-control col-md-7 col-xs-12" value="{{ old('proveedor') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            Concepto <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="concepto" required="required" name="concepto" class="form-control col-md-7 col-xs-12" type="text" value="{{ old('concepto') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Fecha
          </label>
          <div class="col-md-3 col-sm-3 col-xs-8">
            <input id="fecha" placeholder="Año/Mes/Dia" type="text" name="fecha" class="form-control" data-inputmask="'mask': '9999/99/99'" value="{{ old('fecha') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Monto <span class="required">*</span>
          </label>
          <div class="col-md-2 col-sm-2 col-xs-8">
            <input id="monto" required="required" name="monto" class="date-picker form-control col-md-7 col-xs-12" type="text" value="{{ old('monto') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Fecha de Pago
          </label>
          <div class="col-md-3 col-sm-3 col-xs-8">
            <input id="fecha_pago" placeholder="Año/Mes/Dia" name="fecha_pago" type="text" class="form-control" data-inputmask="'mask': '9999/99/99'" value="{{ old('fecha_pago') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Fecha de Vencimiento
          </label>
          <div class="col-md-3 col-sm-3 col-xs-8">
            <input id="fecha_vencimiento" placeholder="Año/Mes/Dia" name="fecha_vencimiento" type="text" class="form-control" data-inputmask="'mask': '9999/99/99'" value="{{ old('fecha_vencimiento') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">
            Observacion
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="observacion" class="form-control col-md-7 col-xs-12" name="observacion" rows="8" cols="80">{{ old('observacion') }}</textarea>
          </div>
        </div>

        <div class="ln_solid"></div>

        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a type="button" href="{{ route('gastos.lista') }}" class="btn btn-primary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection
