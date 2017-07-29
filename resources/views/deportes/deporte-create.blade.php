@extends('layouts.app')

@php ($title = 'Agregar Deporte')

@section('content')

  <h2>Agregar Deporte</h2>

  <div class="x_panel">
    <div class="x_title">
      <h2>
        <i class="fa fa-futbol-o" aria-hidden="true"></i> Deportes
        <small>ingrese un deporte</small>
      </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: block;">
      @include('gastos.errors')
      <br>

      <form data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{ route('store.deporte') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deporte">
            Deporte <span class="required">*</span>
          </label>
          <div class="col-md-2 col-sm-2 col-xs-8">
            <input type="text" name="deporte" class="form-control col-md-7 col-xs-12" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuota">
            Cuota <span class="required">*</span>
          </label>
          <div class="col-md-2 col-sm-2 col-xs-10">
            <input type="text" name="cuota" class="form-control col-md-7 col-xs-12" value="">
          </div>
        </div>

        <div class="form-group" style="display: none;">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_padre"></label>
          <div class="col-md-2 col-sm-2 col-xs-10">
            <input type="text" name="id_padre" class="form-control col-md-7 col-xs-12" value="0">
          </div>
        </div>

        <div class="ln_solid"></div>

        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a  type="button" class="btn btn-primary" href="{{ route('deportes.lista') }}">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection
