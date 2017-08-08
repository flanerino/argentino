@if(session()->has('msj'))

  <div class="alert alert-success">

    {{ session()->get('msj') }}
    
  </div>


@endif
