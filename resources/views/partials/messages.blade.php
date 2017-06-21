@if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}}</p>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Error:</strong> Ocurrieron errores en la validaci&oacute;n<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
