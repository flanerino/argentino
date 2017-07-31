<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\deporte;
use Argentino\socio;
use Argentino\Http\Requests\CreateSocioRequest;
use Argentino\Http\Requests\UpdateSocioRequest;
use Illuminate\Support\Facades\Input;

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
    public function show_socios()
    {
        $protector=Input::get('protector');
        $deporte_id=Input::get('deporte_id');
            
        $deportes = Deporte::all();
        
        $socios = Socio::filter($protector,$deporte_id)->orderBy('id', 'asc')->get();

        return view('socios/socios_list')->with(
                [   'socios' => $socios, 
                    'deportes' => $deportes,
                    'protector' => $protector,
                    'deporte_id' => $deporte_id
                ]);
    }
    //Mostrar Socio individual
    public function show_socio(Socio $socio)
    {
      return view ('socios.socio')->with(['socio' => $socio]);
    }

// Eliminado de Socios

    public function delete_socio(socio $socio)
    {
        $socio->delete();
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
        if(is_null($request->get('protector')))
        {
            $socio->protector = 0;
        }
        else
        {
            $socio->protector = $request->get('protector');
        }
        $socio->update($request->only('nombre',
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
        $socio->protector = $request->get('protector');
        $socio->deporte_id = $request->get('deporte_id');
        
        if (Input::hasFile('imagen'))
        {
            $file = Input::file('imagen');
            $filename = $request->get('dni').'.jpg';
            Input::file('imagen')->move(public_path('images/socios'), $filename);
            $socio->imagen = $filename;
        }
        $socio->save();

        session()->flash('msj', 'Socio Creado');
        return redirect()->route('edit_socio_path',['socio' => $socio->id]);
    }
}
