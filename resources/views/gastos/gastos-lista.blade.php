@extends('layouts.app')

@php ($title = 'Mi Panel')

@section('content')

<div class="x_panel">

<div class="x_title">
  <h2>Listado de Gastos</h2>
  <div class="clearfix"></div>

  @include('gastos.msjs')
</div>

  <div class="x_content" style="display: block;">

    <div class="row">
      <div style="overflow-x: scroll;">

        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid" aria-describedby="datatable-checkbox_info">
          <thead>
            <tr role="row">
              <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=" " style="width: 6px;"></th>
              <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=" " style="width: 6px;"></th>

                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 N° Factura
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Proveedor
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Concepto
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Fecha
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Monto
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Fecha de Pago
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Fecha de Vencimiento
                </th>
                <th class="sorting" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1">
                 Observacion
                </th>
            </tr>
          </thead>
<!-- Body -->
    <tbody>
      <!-- foreach -->
      @foreach ($gastos as $gasto)
        <tr role="row" class="odd">
          <!-- boton para eliminar una entrada -->
          <td>
            <form action="{{ route('delete.gasto', ['gasto' => $gasto->id]) }}" method="POST">
              {{ csrf_field() }}
							{{ method_field('DELETE') }}

              <button type="submit" class="btn btn-danger" aria-hidden="true">
                <i type="submit" class="fa fa-times-circle" aria-hidden="true"></i>
              </button>
            </form>
          </td>
          <!-- boton para editar entrada -->
          <td>
            <a class="btn btn-primary" href="{{ route('edit.gasto', ['gasto' => $gasto->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
          </td>

          <td>{{ $gasto->num_factura }}</td>
          <td>{{ $gasto->proveedor }}</td>
          <td>{{ $gasto->concepto }}</td>
          <td>{{ $gasto->fecha }}</td>
          <td>${{ $gasto->monto }}</td>
          <td>{{ $gasto->fecha_pago }}</td>
          <td>{{ $gasto->fecha_vencimiento }}</td>
          <td>{{ $gasto->observacion }}</td>
        </tr>
      @endforeach

    </table>
  </div>
</div>

</div>
</div>
</div>
@endsection
