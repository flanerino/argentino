@extends('layouts.appblank')
@section ('content')
@php ($title = 'Carnet' )
<div style="">

  <div class="col-md-6" style="border-radius: 13px 13px 13px 13px;
    -moz-border-radius: 13px 13px 13px 13px;
    -webkit-border-radius: 13px 13px 13px 13px;
    border: 1px none #000000;float:left; height:220px ;width:335px; border:2px solid black;overflow:hidden;background:aqua">
    <div style="float:left;width:100px;min-height:100px;background:red">
    <img style="margin:0px;padding:0px;width:100px;height:100px" src="./images/sources/user128x128.png">
    </div>
    <div style="float:right;width:210px;min-height:100px;background:pink;font-family: sans-serif;">
      <u><h3>Club A y C Argentino</h3></u>
    </div>
    <div style="float:right;width:230px;min-height:100px;background:blue">
  </div>
    <div style="clear:both;background:brown;font-family: sans-serif;margin-left: 0.2cm;line-height: 130%;">
      Nombre:   {{$socio->nombre}}
    </div>
    <div style="clear:both;background:red;font-family: sans-serif;margin-left: 0.2cm;line-height: 130%;">
        Apellido:   {{$socio->apellido}}
    </div>
    <div style="clear:both;background:green;font-family: sans-serif;margin-left: 0.2cm;line-height: 130%;">
        Telefono:   {{$socio->telefono}}
    </div>
    <div style="margin:0px;background:red;width:300px;font-family: sans-serif; margin-left: 1.0cm;" >
      <p>Club Atlético y Cultural Argentino.
         <br>Calle 32 Nº 750,02302 - 423896<p>
    </div>

  </div>
  <div  class="col-md-6" style="border-radius: 13px 13px 13px 13px;
      -moz-border-radius: 13px 13px 13px 13px;
      -webkit-border-radius: 13px 13px 13px 13px;
      border: 1px none #000000;overflow:hidden;float:left; height:220px;  width:335px ;border:2px solid black;background:aqua">
      <div style="margin:10px;border: 1px none #000000;float:left; height:120px;  width:120px ;border:2px solid black;background :blue">
      </div>

    <br><div style="clear:both;background:red;float:right;font-family:sans-serif;width: 193px;">
        DNI:{{$socio->dni}}
      </div></br>
      <br><div style="background:pink;float:right;font-family: sans-serif;width: 200px;width: 193px">
          Deporte:{{$socio->deporte_id}}
      </div></br>
      <br>
      <div style="background:brown;float:right;font-family: sans-serif;width: 200px;width: 193px;">
          Domicilio:{{$socio->domicilio}}
      </div></br>

      <div style="margin:20px; none #000000;float:left;background :red; position: absolute;left: 100px;top:150px;">
        __________________________________
      </div>


  </div>

</div>
@endsection
