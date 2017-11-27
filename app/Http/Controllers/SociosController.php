<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\deporte;
use Argentino\socio;
use Argentino\Http\Requests\CreateSocioRequest;
use Argentino\Http\Requests\UpdateSocioRequest;
use Illuminate\Support\Facades\Input;
use Dompdf\Dompdf;
use DB;
use Response;

class SociosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     //Mostrar lista de socios
    public function show_socios(){

        $deporte_id=Input::get('deporte_id');
        $autocomplete = Input::get('autocomplete');

        $deportes = Deporte::all();
        if($autocomplete){
          $socios = Socio::where('activo', 1)->filter($autocomplete)->orderBy('id', 'asc')->get();
        }else{
          $socios = Socio::where('activo', 1)->filter($deporte_id)->orderBy('id', 'asc')->get();  
        }
        

        return view('socios/socios_list')->with(
                [   'socios' => $socios,
                    'deportes' => $deportes,
                    'deporte_id' => $deporte_id,
                    'title' => 'Socios'
                ]);
    }

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

    //lista de socios historicos
    public function show_socios_historicos(){
      $deporte_id=Input::get('deporte_id');

      $deportes = Deporte::all();

      $socios = Socio::where('activo', 0)->filter($deporte_id)->orderBy('id', 'asc')->get();

      return view('socios/historicos/socios_list')->with(
              [   'socios' => $socios,
                  'deportes' => $deportes,
                  'deporte_id' => $deporte_id,
                  'title' => 'Socios Hist&oacutericos'
              ]);
    }

    public function view_socio_historico(socio $socio)
    {
        $deportes = Deporte::all();
        return view ('socios.historicos.socio_edit')->with(['socio' => $socio,  'deportes' => $deportes]);
    }

    public function restore_socio(socio $socio)
    {
        $socio->activo = 1;
        $socio->save();
        session()->flash('msj','Socio Restaurado');
        return redirect()->route('socios_historicos_path');
    }

    //Mostrar Socio individual
    public function show_socio(Socio $socio)
    {
      return view ('socios.socio')->with(['socio' => $socio]);
    }

// Eliminado de Socios

    public function delete_socio(socio $socio)
    {
        $socio->activo = 0;
        $socio->save();
        session()->flash('msj','Socio eliminado');
        return redirect()->route('socios_path');
    }

// Editado de Socios

    public function edit_socio(socio $socio)
    {
        $deportes = Deporte::all();
        return view ('socios.socio_edit')->with(['socio' => $socio,  'deportes' => $deportes]);
    }

    //Actualización de Socio en la DB
    public function update_socio(Socio $socio, UpdateSocioRequest $request)
    {
        $socio->update($request->only(
                'nro',
                'nombre',
                'apellido',
                'fecha_nac',
                'email',
                'dni',
                'telefono',
                'domicilio',
                'domicilio_cobro',
                'estado_civil',
                'deporte_id',
                'tipo_socios_id'));
        if (Input::hasFile('imagen'))
        {
            $file = Input::file('imagen');
            $filename = $request->get('dni').'.jpg';
            Input::file('imagen')->move(public_path('images/socios'), $filename);
            $socio->imagen = $filename;
            $socio->save();
        }


        session()->flash('msj','Socio Editado');

        return redirect()->route('edit_socio_path', ['socio' => $socio->id] );
    }

    // Creado de Socios
    public function create_socio()
    {
        $socio = new Socio;
        $deportes = Deporte::all();
        return view ('socios.socio_create')->with(['socio' => $socio, 'deportes' => $deportes]);
    }

    //Guardado de Socio en la DB
    public function store_socio(CreateSocioRequest $request)
    {
        $socio = new Socio;
        $socio->nombre = $request->get('nombre');
        $socio->apellido = $request->get('apellido');
        //$socio->fecha_nac = DateHelper::formatToDB($request->get('fecha_nac'));
        $socio->fecha_nac = $request->get('fecha_nac');
        $socio->email = $request->get('email');
        $socio->dni = $request->get('dni');
        $socio->telefono = $request->get('telefono');
        $socio->domicilio = $request->get('domicilio');
        $socio->domicilio_cobro = $request->get('domicilio_cobro');
        $socio->estado_civil = $request->get('estado_civil');
        $socio->deporte_id = $request->get('deporte_id');
        $socio->activo = 1;

        if($socio->fecha_nac = 0){
          $socio->fecha_nac = null;
        }


        if (Input::hasFile('imagen'))
        {
            $file = Input::file('imagen');
            $filename = $request->get('dni').'.jpg';
            Input::file('imagen')->move(public_path('images/socios'), $filename);
            $socio->imagen = $filename;
        }
        $socio->save();
		$socio->nro = $socio->id;
		$socio->save();

        session()->flash('msj', 'Socio Creado');
        return redirect()->route('edit_socio_path',['socio' => $socio->id]);
    }

  public function prueba(socio $socio)
  {
    $view = \View::make('prueba',compact('socio'))->render();
    $pdf = new Dompdf();
      $pdf->loadHtml($view);
      $pdf->setPaper('A4', 'portrait');
      $pdf->render();
      $pdf->stream("Carnet.pdf", array("Attachment"=>0));
  }
  public function exportar()
  {
    $socios = Socio::where('activo', 1)->get();
    $view = \View::make('exportar',compact('socios'))->render();
    $pdf = new Dompdf();
      $pdf->loadHtml($view);
      $pdf->setPaper('A4', 'portrait');
      $pdf->render();
      $pdf->stream("exportar.pdf", array("Attachment"=>0));
  }

}
