@extends('layouts.app')

@php ($title = 'Gastos')

@section('content')

<div class="x_panel">
    <div class="x_title">
        <h2><i class="fa fa-usd" aria-hidden="true"></i> Gastos</h2>
        <span class="pull-right"><a class="btn btn-success" href="{{ route('create.gasto') }}">Nuevo Gasto</a></span>
        <div class="clearfix"></div>
    </div>
    @include('gastos.msjs')
    <div class="x_content" style="display: block; ">    
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form class="form-inline" action="/gastos/lista" method="GET">
                                <div class="form-group">
                                    <label for="middle-name">Concepto</label>
                                    <input id="concepto" name="concepto" class="form-control" type="text" value="{{$concepto}}">
                                </div>                    
                                <div class="form-group">
                                    <label for="num_factura">N° de Factura</label>
                                    <input id="num_factura" type="text" name="num_factura" class="form-control" value="{{$nrofactura}}">
                                </div>                    
                                <div class="form-group">
                                    <label for="proveedor">Proveedor</label>
                                    <input id="proveedor" type="text" name="proveedor" class="form-control" value="{{$proveedor}}">
                                </div>
                                <button type="submit" class="btn btn-default">Filtrar</button>
                                <a class="btn btn-danger" href="/gastos/lista"><i class="fa fa-times"></i></a>
                            </form>
                        </div>
                    </div>                    
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-12">            
                    <table id="tableGasto" class="table table-striped table-bordered tableDinamica">
                        <thead>
                            <tr role="row">
                                <th>N° Factura</th>
                                <th>Proveedor</th>
                                <th>Concepto</th>
                                <th>Fecha</th>
                                <th>Monto</th>
                                <th>Fecha de Pago</th>
                                <th>Fecha de Vencimiento</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($gastos as $gasto)
                            <tr role="row" class="odd">
                                <td>{{ $gasto->num_factura }}</td>
                                <td>{{ $gasto->proveedor }}</td>
                                <td>
                                    <a href="{{ route('edit.gasto', ['socio' => $gasto->id] ) }}"> {{ $gasto->concepto }} </a>                                    
                                </td>
                                <td>{{ $gasto->fecha }}</td>
                                <td>${{ $gasto->monto }}</td>
                                <td>{{ $gasto->fecha_pago }}</td>
                                <td>{{ $gasto->fecha_vencimiento }}</td>
                                <td>
                                    <a href="{{ route('edit.gasto', ['gasto' => $gasto->id]) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i></a>                        
                                    <a class="btn btn-danger" title="Eliminar" data-toggle="modal" data-target="#delete_register{{$gasto->id}}" type="button"><i class="fa fa-trash"></i></a>

                                    <div id="delete_register{{$gasto->id}}" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                <form action="{{ route('delete.gasto', ['gasto' => $gasto->id]) }}" method="POST">
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