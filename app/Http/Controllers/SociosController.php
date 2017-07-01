<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\deporte;
use Argentino\socio;
use Argentino\Http\Requests\CreateSocioRequest;
use Argentino\Http\Requests\UpdateSocioRequest;

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
    public function show_socios()
    {
		$socios = Socio::with('deporte')->orderBy('id', 'asc')->paginate(50);
        return view('socios/socios_list')->with(['socios' => $socios]);
    }

    public function show_socio(Socio $socio)
    {

      return view ('socios.socio')->with(['socio' => $socio]);
    }

// Eliminado de Socios

	public function delete_socio(socio $socio){

      $socio->delete();

      session()->flash('message','Socio eliminado');

      return redirect()->route('socios_path');
	}

// Editado de Socios

	public function edit_socio(socio $socio){
		return view ('socios.socio_edit')->with(['socio' => $socio]);
	}

  public function update_socio(Socio $socio, UpdateSocioRequest $request){
    $socio->update(
      $request->only('nombre','apellido','nacionalidad','fecha_nac','email','dni','telefono','domicilio','domicilio_cobro','estado_civil','protector','deporte_id','tipo_socios_id')
    );

    session()->flash('message','Socio Editado');

    return redirect()->route('socio_path', ['socio' => $socio->id]);
  }

  // Creado de Socios

  public function create_socio(){
    $socio = new Socio;
    return view ('socios.socio_create')->with(['socio' => $socio]);
  }

  public function store_socio(CreateSocioRequest $request){
    $socio = new Socio;
    $socio->nombre = $request->get('nombre');
    $socio->apellido = $request->get('apellido');
    $socio->nacionalidad = $request->get('nacionalidad');
    $socio->fecha_nac = $request->get('fecha_nac');
    $socio->email = $request->get('email');
    $socio->dni = $request->get('dni');
    $socio->telefono = $request->get('telefono');
    $socio->domicilio = $request->get('domicilio');
    $socio->domicilio_cobro = $request->get('domicilio_cobro');
    $socio->estado_civil = $request->get('estado_civil');
    $socio->protector = $request->get('protector');
    $socio->deporte_id = $request->get('deporte_id');
    $socio->save();

    session()->flash('message', 'Socio Creado');

    return redirect()->route('socios_path');
  }
}
