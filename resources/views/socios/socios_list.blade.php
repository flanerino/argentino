@extends ('layouts.app')

@php ($title = 'Socios')

@section ('content')


<div class="x_panel">

  <div class="x_title">
    <h2> Socios </h2>
    <div class=pull-right> <a href="{{ route('create_socio_path') }}" class="btn btn-success">Nuevo Socio</a></div>
    <div class="clearfix"></div>


  </div>
@include('socios.msjs')
<div class="x_content" style="display: block;">
  <div class="row">
    <div>

  <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
      <div class="row">
          <div class="col-sm-12">
              <table table id="datatable-checkbox" class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid" aria-describedby="datatable-checkbox_info">
                <thead>
                  <tr role="row">
                      <th class="col-sm-1" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" ><b> Nro Socio </b></th>
                      <th class="col-sm-3" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1"><b> Apellido/s </b></th>
                      <th class="col-sm-4" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1"><b> Nombre/s </b></th>
                      <th tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1"><b> Telefono </b></th>
                      <th class="col-sm-2" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1"><b> Tipo Socio </b></th>
                      <th tabindex="0" aria-controls="datatable-checkbox" rowspan="1"> </th>
                      <th tabindex="0" aria-controls="datatable-checkbox" rowspan="1"> </th>

                  </tr>
                </thead>
                  @foreach($socios as $socio)
                  <tr role="row" class="odd">
                      <td class="sorting_1">
                          <a> {{$socio->id}} </a>
                      </td>
                      <td>{{$socio->apellido}}</td>
                      <td>{{$socio->nombre}}</td>
                      <td>{{$socio->telefono}}</td>
                      <td>
                          @if($socio->protector)
                              <b> Protector </b>
                          @else
                              <b> {{$socio->deporte->deporte}} </b>
                          @endif
                      </td>
                      <td><a href="{{ route('edit_socio_path', ['socio' => $socio->id] ) }}" class="btn btn-info"><i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i></a></td>
                      <form action="{{ route('delete_socio_path', ['socio' => $socio->id] ) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <td><button class="btn btn-danger" aria-hidden="true" type="submit"><i class="fa fa-times-circle fa-1x" aria-hidden="true" type="submit"></i></button></td>
                      </form>
              </tr>
            @endforeach
          </table>
        </div>
        {{ $socios->render() }}
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
@endsection
