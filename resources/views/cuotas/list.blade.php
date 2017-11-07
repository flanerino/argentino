@extends ('layouts.app')

@php ($title = 'Cuotas')

@section ('content')

<div class="x_panel">
    <div class="x_title">
        <h2><i class="fa fa-usd" aria-hidden="true"></i> Cuotas </h2>
        <div class=pull-right> <a class="btn btn-success" type="button" data-toggle="modal" data-target="#GenerateCuota">Generar Cuotas</a>
        <!-- Modal -->
        <div id="GenerateCuota" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
                  <form action="{{ route('generate_cuotas_path') }}" method="POST">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <select name="deporte_id" class="form-control">
                                <option value="">Seleccione Tipo de Socio</option>
                                @foreach($deportes as $deporte)
                                    <option value="{{$deporte->id}}"><li>{{$deporte->nombreTree}}</li></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Generar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                  </form>
            </div>
          </div>
        </div>

        <a href="{{ route('create_cuota_path') }}" class="btn btn-success">Cuota Personalizada</a></div>
        <div class="clearfix"></div>
    </div>

    @include('cuotas.msjs')
    <div class="x_content" style="display: block;">
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <div class="x_panel">
                        <div class="x_content">
                          <form class="form-inline" action="/cuotas" method="GET">
                              <div class="form-group">
                                  <label for="middle-name">Socio</label>
                                  <input id="autocomplete" name="autocomplete" class="form-control" type="text" data-autocomplete="/cuotas/autocomplete">
                              </div>
                              <div class="form-group">
                                  <label for="deporte">Deporte</label>
                                  <select id="deporte" name="deporte" class="form-control">
                                    <option value="">Seleccione deporte</option>
                                    @foreach($deportes as $deporte)
                                    <option value="{{$deporte->id}}">{{$deporte->deporte}}</option>
                                    @endforeach
                                  </select>
                              </div>
                              <div class="form-group pull-right">
                                <button type="submit" class="btn btn-default">Filtrar</button>
                                <a class="btn btn-danger" href="/cuotas"><i class="fa fa-times"></i></a>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="tableCuota" class="table table-striped table-bordered tableDinamica">
                        <thead>
                            <tr role="row">
                                <th>Nro Socio</th>
                                <th>Apellido/s</th>
                                <th>Nombre/s</th>
                                <th>Tipo Socio</th>
                                <th>Monto</th>
                                <th>Mes</th>
                                <th>A&ntilde;o</th>
                                <th>Fecha de Pago</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($cuotas as $cuota)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{$cuota->socio->nro}}</td>
                                <td>{{$cuota->socio->apellido}}</td>
                                <td>{{$cuota->socio->nombre}}</td>
                                <td>
                                    @if($cuota->socio->deporte->id == 1)
                                        <b>Protector</b>
                                    @else
                                        <b> Deportista({{$cuota->socio->deporte->deporte}})</b>
                                    @endif
                                </td>
                                <td>${{$cuota->monto}}</td>
                                <td>{{$cuota->mes}}</td>
                                <td>{{$cuota->anio}}</td>
                                <td>{{$cuota->fecha_pago}}</td>
                                <td>
                                    <a href="{{ route('edit_cuota_path', ['cuota' => $cuota->id]) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i></a>

                                    <a class="btn btn-danger" title="Eliminar" data-toggle="modal" data-target="#delete_register{{$cuota->id}}" type="button"><i class="fa fa-trash"></i></a>

                                    <div id="delete_register{{$cuota->id}}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel2">Eliminar Registro</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>
                                                        Seguro que desea eliminarlo?
                                                    </h4>
                                                </div>
                                                <form action="{{ route('delete_cuota_path', ['cuota' => $cuota->id]) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                  <a class="btn btn-success" title="Pagar" data-toggle="modal" data-target="#pago_register{{$cuota->id}}" type="button"><i class="fa fa-usd"></i></a>
                                  <div id="pago_register{{$cuota->id}}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                      <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                  </button>
                                                  <h4 class="modal-title" id="myModalLabel2">Registrar Pago</h4>
                                              </div>
                                              <div class="modal-body">
                                                  <h4>
                                                      Seguro que desea registrar el pago?
                                                  </h4>
                                              </div>
                                              <form action="{{ route('pago_cuota_path', ['cuota' => $cuota->id]) }}" method="POST">
                                                  {{ csrf_field() }}
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                      <button type="submit" class="btn btn-success">Registrar</button>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    @parent
    <!-- Datatables -->
    <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@endsection


@section('scripts')
    @parent
    <!-- Datatables -->
    <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="/js/tabladinamica.js"></script>
    <script src="/js/autocompletado.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            iniciarTabla();
        });
    </script>
@endsection
