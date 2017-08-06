<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\deporte;
use Argentino\socio;
use Argentino\cuota;
use Argentino\Ingreso;
use Carbon\Carbon;
use Argentino\Http\Requests\CreateCuotaRequest;
use Argentino\Http\Requests\UpdateCuotaRequest;
use Illuminate\Support\Facades\Input;
use DateTime;

class CuotasController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show_cuotas(){
      $apellido=Input::get('apellido');
      $protector=Input::get('protector');
      $deporte_id=Input::get('deporte_id');
      $deportes = Deporte::all();
      $cuotas = Cuota::with('socio')->orderBy('id', 'desc')->paginate(10);


      return view('cuotas.list')->with(
              [   'cuotas' => $cuotas,
                  'deportes' => $deportes,
                  'protector' => $protector,
                  'deporte_id' => $deporte_id
              ]);
  }

  public function create_cuota(){
    $socios = Socio::all();
    $cuota = new Cuota;
    $deportes = Deporte::all();

    return view ('cuotas.cuota_create')->with(['cuota' => $cuota, 'deportes' => $deportes,'socios' => $socios]);
    }

  public function update_cuota(Cuota $cuota, UpdateCuotaRequest $request){
    $cuota->update($request->only(
            'mes',
            'anio',
            'monto'));
    session()->flash('msj','Cuota Editada');

    return redirect()->route('edit_cuota_path', ['cuota' => $cuota->id] );
  }

  public function edit_cuota(Cuota $cuota){
    $socios = Socio::all();
    $deportes = Deporte::all();

    return view ('cuotas.cuota_edit')->with(['cuota' => $cuota, 'deportes' => $deportes,'socios' => $socios]);

  }
  public function pago_cuota(Cuota $cuota){
  if(is_null($cuota->fecha_pago)){
    $dt = Carbon::now()->format('Y-m-d');
    Cuota::where('id', $cuota->id)->update(array('fecha_pago' => $dt));
    $ingreso = new Ingreso;
  //  $ingreso->num_recibo = $request->num_recibo;
    $ingreso->concepto = "pago de cuota";
    $ingreso->monto = $cuota->monto;
    $ingreso->forma_pago = "Efectivo";
    $ingreso->fecha = $dt;
    $ingreso->fecha_cobro = $cuota->fecha_pago;
    $ingreso->observacion = $cuota->socio->nro;
    $ingreso->save();
    session()->flash('msj','Pago Registrado');
    return redirect()->route('cuotas_path');
  }else{
    session()->flash('msj','Esta cuota ya se pagó');
    return redirect()->route('cuotas_path');
  }
  }
  public function delete_cuota(Cuota $cuota){
    $cuota->delete();
    session()->flash('msj','Cuota eliminada');
    return redirect()->route('cuotas_path');
  }
  public function store_cuota(CreateCuotaRequest $request){
    $cuota = new Cuota;

    if(is_null($request->socio_id)){

    }else{
      $cuota->socio_id = $request->get('socio_id');
      $cuota->monto = $request->get('monto');
    }
    $cuota->mes = $request->get('mes');
    $cuota->anio = $request->get('anio');
    $cuota->save();

    session()->flash('msj', 'cuota creada');
    return redirect()->route('cuotas_path');
  }

  public function store_cuotas(CreateCuotaRequest $request, Deporte $deporte){
    if(is_null($deporte)){
      $socios = Socio::all();
    }else{
      $socios = Socio::where('deporte_id', $deporte);
    }
    foreach($socios as $socio){
      $cuota = new Cuota;
      $cuota->socio_id = $socio->id;
      $cuota->monto = $socio->deporte->cuota;
      $cuota->mes= "3";
      $cuota->anio = "2017";
      $cuota->save();
    }
    session()->flash('msj', 'cuotas creadas');
    return redirect()->route('cuotas_path');
  }
}
