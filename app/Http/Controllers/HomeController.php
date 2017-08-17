<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\socio;
use Argentino\Gasto;
use Argentino\Ingreso;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$ingresosMonto = DB::table('ingresos')->select('monto', 'fecha')->orderBy('id', 'desc')->get();
        //return dd($egresosMonto->all());

        $socios = Socio::count();
        $ingresos = DB::table('ingresos')->whereNotNull('fecha')->sum('monto');
        $gastos = DB::table('gastos')->whereNotNull('fecha')->sum('monto');
        $balance = $ingresos - $gastos;
        return view('home', compact('socios','ingresos','gastos','balance', 'ingresosMonto', 'egresosMonto'));
    }
}
