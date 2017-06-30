@extends('layouts.app')

@php ($title = 'Editar Socio')

@section ('content')

<div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nacionalidad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nacionalidad">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento  <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div id="fecha_nac" class="btn-group" data-toggle="buttons">
                            <input id="fecha_nac" required="required" class="form-control col-md-7 col-xs-12" type="text" name="fecha_nac">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">DNI</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dni" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel&eacutefono</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="telefono" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicilio</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="domicilio" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicilio Cobro</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="domicilio_cobro" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="estado_civil" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Protector <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="protector" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deporte <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="deporte" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" href="{{ route('socios_path') }}">Cancelar</button>
						  <button class="btn btn-primary" type="reset">Restaurar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

@endsection
