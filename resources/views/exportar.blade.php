@extends('layouts.appblank')
@section ('content')
@php ($title = 'Exportado' )
<div style="">
<center><h1>Listado de Socios</h1></center>
</div>
<hr>
@include('socios.msjs')

    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        <div class="row">
            <div class="col-sm-12" style="margin-left: 2.5cm;font-size:18px;">
                <table id="tableSocio" class="table table-striped table-bordered tableDinamica"style= "width:100%;">
                    <thead>
                        <tr role="row">
                            <th>Nro Socio</th>
                            <th>Apellido/s</th>
                            <th>Nombre/s</th>
                            <th>Telefono</th>
                            <th>Tipo Socio</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($socios as $socio)
                        <tr role="row" class="odd">
                            <td class="sorting_1">
                                <a "{{ route('edit_socio_path', ['socio' => $socio->id] ) }}"># {{$socio->nro}} </a>
                            </td>
                            <td>{{$socio->apellido}}</td>
                            <td>{{$socio->nombre}}</td>
                            <td>{{$socio->telefono}}</td>
                            <td>
                                @if($socio->protector)
                                    <b>Protector</b>
                                @else
                                    <b> Deportista({{$socio->deporte->deporte}})</b>
                                @endif
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
