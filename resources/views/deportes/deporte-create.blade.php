@extends('layouts.app')

@php ($title = 'Mi Panel')

@section('content')

  <div class="x_panel">
    <div class="x_title">
      <h2>Ingresar Deporte</h2>
      <div class="clearfix"></div>
      @include('gastos.errors')
    </div>
    <div class="x_content" style="display: block;">
      <br>

      <form data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="{{ route('store.deporte') }}" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deporte">
            Deporte
          </label>
          <div class="col-md-2 col-sm-2 col-xs-8">
            <input type="text" name="deporte" class="form-control col-md-7 col-xs-12" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cuota">
            Cuota
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
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>

      </form>

    </div>
  </div>

@endsection
