<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\socio;
use Argentino\Gasto;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $socios=Socio::count();
        $ingresos=0;
        $gastos=DB::table('gastos')->whereNotNull('fecha_pago')->sum('monto');                
        $balance=0;
        return view('home',compact('socios','ingresos','gastos','balance'));
    }
}
