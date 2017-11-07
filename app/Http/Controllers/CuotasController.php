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
use Illuminate\Support\Facades\DB;
use DateTime;
use Response;

class CuotasController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
//MOSTRAR CUOTAS
  public function show_cuotas(){
      $apellido=Input::get('apellido');
      $deporte_id=Input::get('deporte_id');
      $deportes = Deporte::all();
      $cuotas = Cuota::with('socio')->orderBy('id', 'desc')->paginate(10);


      return view('cuotas.list')->with(
              [   'cuotas' => $cuotas,
                  'deportes' => $deportes,
                  'deporte_id' => $deporte_id

              ]);
  }
//Crear Cuotas (vista)
  public function create_cuota(Socio $socio){
    $socios = Socio::where('activo', 1);
    $cuota = new Cuota;
    $deportes = Deporte::all();

    return view ('cuotas.cuota_create')->with(['cuota' => $cuota, 'deportes' => $deportes,'socios' => $socios]);
    }

//Autocompletado
    public function buscar_socios(){

        $search = '%' . $_GET['term'] . '%';

        $results = array();

        $queries = DB::table('socios')->where('nombre', 'LIKE', $search)->orWhere('apellido', 'LIKE', $search)->take(5)->get();

        if($queries){
          foreach ($queries as $query){
           $results[] = ['id' => $query->id, 'value' => $query->nombre.' '.$query->apellido ];
          }  
        }else{
          $results[] = [ 'id' => null, 'value' => 'no hay resultados'];
        }

        return Response::json($results);
    }

//Editar Cuotas (vista)
  public function edit_cuota(Cuota $cuota){
    $socios = Socio::where('activo', 1);
    $deportes = Deporte::all();

    return view ('cuotas.cuota_edit')->with(['cuota' => $cuota, 'deportes' => $deportes,'socios' => $socios]);

  }
  //Actualizar Cuota
    public function update_cuota(Cuota $cuota, UpdateCuotaRequest $request){
      $cuota->update($request->only(
              'mes',
              'anio',
              'monto'));
      session()->flash('msj','Cuota Editada');

      return redirect()->route('edit_cuota_path', ['cuota' => $cuota->id] );
    }

  //Generar Cuotas
  public function generate_cuotas(Request $request){
	   // $socios = DB::table('socios')->where('deporte_id', '=', $request->deporte_id)->get();
     $protectores = Deporte::where('id',1)->get();
     foreach($protectores as $protector){
       $protector_monto = $protector->cuota;
     }

     

       $socios = Socio::where('deporte_id',$request->deporte_id)->get(); //cobrar deportistas

		$dt = Carbon::now();
	  foreach($socios as $socio){
		  $cuota = new Cuota;
		  $cuota->socio_id = $socio->id;
      if($socio->deporte->id == 1){
      $cuota->monto = $protector_monto;
    }else{
      $cuota->monto = $protector_monto + $socio->deporte->cuota;
    }

		  $cuota->mes= $dt->month;
		  $cuota->anio = $dt->year;
		  $cuota->save();
	  }

	  return redirect()->route('cuotas_path');
  }

  //Pago de Cuotas
  public function pago_cuota(Cuota $cuota){
  if(is_null($cuota->fecha_pago)){
    $dt = Carbon::now();
    Cuota::where('id', $cuota->id)->update(array('fecha_pago' => $dt));

	$ingreso = new Ingreso;
  //  $ingreso->num_recibo = $request->num_recibo;
    $ingreso->concepto = "Pago de cuota. "."Correspondiente al mes ".$cuota->mes."/".$cuota->anio;
    $ingreso->monto = $cuota->monto;
    $ingreso->forma_pago = "Efectivo";
	$dt2 = Carbon::now()->format('d/m/Y');
    $ingreso->fecha = $dt2;
   // $ingreso->fecha_cobro = $cuota->fecha_pago;
    $ingreso->observacion = $cuota->socio->nro;

    $ingreso->save();
	$ingreso->num_recibo = 10000000+$ingreso->id;
	$ingreso->save();

	session()->flash('msj','Pago Registrado');
    return redirect()->route('cuotas_path');
  }else{
    session()->flash('msj','Esta cuota ya se pagó');
    return redirect()->route('cuotas_path');
    }
  }

  //Borrar Cuota
  public function delete_cuota(Cuota $cuota){
    $cuota->delete();
    session()->flash('msj','Cuota eliminada');
    return redirect()->route('cuotas_path');
  }

  //Guardar Cuota
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

}
