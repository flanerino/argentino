<?php

namespace Argentino\Http\Controllers;

use Argentino\socio;
use Illuminate\Http\Request;
use Argentino\deporte;


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

	public function delete_socio(socio $socio){

      $socio->delete();

      session()->flash('message','Socio eliminado correctamente');

      return redirect()->route('socios_path');
	}

	public function edit_socio(socio $socio){
		return view ('socios.socio_edit')->with(['socio' => $socio]);
	}
}
