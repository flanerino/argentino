@extends ('layouts.app')

@section ('content')

<div class="x_panel">
    <div class="x_title">
        <h2><i class="fa fa-user" aria-hidden="true"></i> Socios </h2>
          <div class=pull-right> <a href="{{ route ('exportarsocios' )}}" target="_blank" class="btn btn-primary">Exportar Socios</a></div>
        <div class=pull-right> <a href="{{ route('create_socio_path') }}" class="btn btn-success">Nuevo Socio</a></div>
        <div class="clearfix"></div>
    </div>
    @include('socios.msjs')
    <div class="x_content" style="display: block;">
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form class="form-inline" action="/socios" method="GET">
                                <div class="form-group">
                                    <select name="deporte_id" class="form-control">
                                        <option value="">Seleccione un deporte</option>
                                        @foreach($deportes as $deporte)
                                            <option <?if($deporte_id==$deporte->id) echo 'selected';?> value="{{$deporte->id}}"><li>{{$deporte->nombreTree}}</li></option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-default">Filtrar</button>
                                <a class="btn btn-danger" href="/socios"><i class="fa fa-times"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="tableSocio" class="table table-striped table-bordered tableDinamica">
                        <thead>
                            <tr role="row">
                                <th>Nro Socio</th>
                                <th>Apellido/s</th>
                                <th>Nombre/s</th>
                                <th>Telefono</th>
                                <th>Tipo Socio</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($socios as $socio)
                            <tr role="row" class="odd">
                                <td class="sorting_1">
                                    <a href="{{ route('edit_socio_path', ['socio' => $socio->id] ) }}"> {{$socio->nro}} </a>
                                </td>
                                <td>{{$socio->apellido}}</td>
                                <td>{{$socio->nombre}}</td>
                                <td>{{$socio->telefono}}</td>
                                <td>
                                <b> Deportista({{$socio->deporte->deporte}})</b>
                                </td>
                                <td>

                                    <a title="editar" href="{{ route('socios_historicos_view_path', ['socio' => $socio->id] ) }}" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i></a>
                                    <a title="restaurar" class="btn btn-success" title="Restaurar" data-toggle="modal" data-target="#restore_register{{$socio->id}}" type="button"><i class="fa fa-arrow-up"></i></a>

                                    <div id="restore_register{{$socio->id}}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel2">Restaurar Socio</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>
                                                        Seguro que desea restaurarlo?
                                                    </h4>
                                                </div>
                                                <form action="{{ route('restore_socio_path', ['socio' => $socio->id] ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success">Restaurar</button>
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

    <script type="text/javascript">
        $(document).ready(function(){
            iniciarTabla();
        });
    </script>
@endsection
