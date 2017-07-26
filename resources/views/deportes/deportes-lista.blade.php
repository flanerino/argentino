@extends('layouts.app')

@php ($title = 'Mi Panel')

@section('content')

  <div class="x_panel">

  <div class="x_title">
    <h2>Listado de Deportes</h2>
    <span class="pull-right">
      <a class="btn btn-success" href="{{ route('create.deporte') }}">
        Nuevo Deporte
      </a>
    </span>

    <div class="clearfix"></div>

    @include('deportes.msjs')
  </div>

    <div class="x_content" style="display: block; ">

      <div class="row">
        <div>

          <table class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid" aria-describedby="datatable-checkbox_info">
            <thead>
              <tr role="row">
                  <th class="sorting text-center" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                   Deporte
                  </th>
                  <th class="sorting text-center" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                   Cuota
                  </th>

                  @if ($deportes->isEmpty())

                  @else
                    <th class="sorting_disabled col-md-1 col-sm-1 col-xs-1" rowspan="1" colspan="1"></th>
                    <th class="sorting_disabled col-md-1" rowspan="1" colspan="1"></th>
                  @endif
              </tr>
            </thead>
  <!-- Body -->
      <tbody>

        @foreach ($deportes as $deporte)
          <tr role="row" class="odd">

            <td style="text-align: center;">{{ $deporte->deporte }}</td>
            <td style="text-align: center;">${{ $deporte->cuota }}</td>

            <!-- boton para eliminar una entrada -->
            <td class="text-center">
              <form action="{{ route('delete.deporte', ['deporte' => $deporte->id]) }}" method="POST">
                {{ csrf_field() }}
  							{{ method_field('DELETE') }}

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDeleteDeporte{{$deporte->id}}">
                  <i type="button" class="fa fa-times-circle" aria-hidden="true"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalDeleteDeporte{{$deporte->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Advertencia!</h2>

                      </div>
                      <div class="modal-body">
                        <h4>Esta seguro que quiere eliminar este DEPORTE?</h4>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                      </div>
                    </div>
                  </div>
                </div>

              </form>
            </td>

            <!-- boton para editar entrada -->
            <td class="text-center">
              <a class="btn btn-primary" href="{{ route('edit.deporte', ['deporte' => $deporte->id]) }}">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>
            </td>

          </tr>
      @endforeach

      </table>
    </div>
  </div>

  </div>
  </div>
  </div>

@endsection