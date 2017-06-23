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
}
