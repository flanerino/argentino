@extends('layouts.app')

@php ($title = 'Socio' )

@section('content')
<div class="container">
	<div class="form-group">
		<div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;"><h2> Socio {{$socio->id}} </h2></div>
                <div class="panel-body">
					<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="row">


          <div class="row"><div class="col-sm-2"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid">
                      <thead>

                      <tbody>
                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Nº de Socio </b></td>
                            <td class="sorting_1">	{{$socio->id}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Apellido/s </b></td>
                            <td class="sorting_1">	{{$socio->apellido}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Nombre/s </b></td>
                            <td class="sorting_1">	{{$socio->nombre}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Nacionalidad </b></td>
                            <td class="sorting_1">	{{$socio->nacionalidad}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Fecha de Nacimiento </b></td>
                            <td class="sorting_1">	{{$socio->fecha_nac}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> E-mail </b></td>
                            <td class="sorting_1">	{{$socio->email}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> DNI </b></td>
                            <td class="sorting_1">	{{$socio->dni}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Telefono </b></td>
                            <td class="sorting_1">	{{$socio->telefono}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Domicilio </b></td>
                            <td class="sorting_1">	{{$socio->domicilio}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Domicilio de Cobro </b></td>
                            <td class="sorting_1">	{{$socio->domicilio_cobro}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Estado Civil </b></td>
                            <td class="sorting_1">	{{$socio->estado_civil}}	</td>
                        </tr>

                        <tr role="row" class="odd">
                            <td class="sorting_1"><b> Tipo de Socio </b></td>
                            <td>	@if($socio->protector)
																		Protector
																	@else
                                    Deportista
																	@endif
														</td>
                        </tr>

                        @if(!$socio->protector)
                          <tr role="row" class="odd">
                            <td class="sorting_1"><b> Deporte </b></td>
                            <td class="sorting_1">	{{$socio->deporte->deporte}}	</td>
                          </tr>
                        @endif
                        <tr>

                        </tr>
                      </tbody>
                    </table>
  <a href="{{route('socios_path')}}" class="btn btn-info">Volver</a>
                  </div>
                </div>
				</div>
		</div>
	</div>
</div>

@endsection
