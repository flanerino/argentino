@extends('layouts.appblank')
@section ('content')
@php ($title = 'Carnet' )
<div style="">

  <div class="col-md-6" style="border-radius: 13px 13px 13px 13px;
    -moz-border-radius: 13px 13px 13px 13px;
    -webkit-border-radius: 13px 13px 13px 13px;
    border: 1px none #000000;float:left; height:220px ;width:335px; border:2px solid black;overflow:hidden;">
    <div style="float:left;width:100px;min-height:100px;">
    <img style="margin:0px;padding:0px;width:100px;height:100px" src="./images/sources/user128x128.png">
    </div>
    <div style="float:right;width:210px;min-height:100px;font-family: sans-serif;">
      <u><h3>Club A y C Argentino</h3></u>
    </div>
    <div style="float:right;width:230px;min-height:100px;">
  </div>
    <div style="clear:both;font-family: sans-serif;margin-left: 0.2cm;line-height: 130%;">
      <u>Nombre:</u>   {{$socio->nombre}}
    </div>
    <div style="clear:both;font-family: sans-serif;margin-left: 0.2cm;line-height: 130%;">
        <u>Apellido:</u>   {{$socio->apellido}}
    </div>
    <div style="clear:both;font-family: sans-serif;margin-left: 0.2cm;line-height: 130%;">
        <u>Telefono:</u>   {{$socio->telefono}}
    </div>
    <div style="margin:0px;width:300px;padding:-2px;font-family: sans-serif; margin-left: 1.5cm;" >
      <p>Club Atlético y Cultural Argentino.
         <br>Calle 32 Nº 750,02302 - 423896<p>
    </div>

  </div>
  <div  class="col-md-6" style="border-radius: 13px 13px 13px 13px;
      -moz-border-radius: 13px 13px 13px 13px;
      -webkit-border-radius: 13px 13px 13px 13px;
      border: 1px none #000000;overflow:hidden;float:left; height:220px;  width:335px ;border:2px solid black;">
      <div style="margin:10px;border: 1px none #000000;float:left; height:120px;  width:120px ;border:2px solid black;">
        @if($socio->imagen)  
        <img id="imagen" src="./images/socios/{{$socio->imagen}}" width="120" height="120" >
        @else
        <img id="imagen" src="./images/sources/user128x128.png" width="120" height="120" >
        @endif
      </div>

    <br><div style="clear:both;float:right;font-family:sans-serif;width: 193px;">
        <u>DNI:</u>{{$socio->dni}}
      </div></br>
      <br><div style="float:right;font-family: sans-serif;width: 200px;width: 193px">
          <u>Deporte:</u>{{$socio->deporte_id}}
      </div></br>
      <br>
      <div style="float:right;font-family: sans-serif;width: 200px;width: 193px;">
          <u>Domicilio:</u>{{$socio->domicilio}}
      </div></br>

      <div style="margin:20px; none #000000;float:left; position: absolute;left: 100px;top:150px;">
        __________________________________
      </div>


  </div>

</div>
@endsection
