<?php

namespace Argentino\Http\Controllers;

use Argentino\Http\Controllers\Controller;
use Argentino\deporte;
use Argentino\Http\Requests\CreateDeporteRequest;
use Argentino\Http\Requests\UpdateDeporteRequest;

class DeportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showListaDeportes()
    {
        $deportes = deporte::orderBy('id', 'desc')->paginate(10);

        return view('deportes.deportes-lista')->with([
            'deportes' => $deportes
        ]);
    }

    public function createDeporte()
    {
        return view('deportes.deporte-create');
    }

    public function storeDeporte(CreateDeporteRequest $request)
    {
        $deporte = new deporte;
        $deporte->deporte = $request->deporte;
        $deporte->cuota = $request->cuota;
        $deporte->id_padre = $request->id_padre;
            
        $deporte->save();

        if($request->id_padre)
        {
            $deportePadre = Deporte::find($request->id_padre);            
            $deporte->orden=$deportePadre->orden.'->'.$deporte->id;        
        }        
        
        session()->flash('msj', 'Deporte Generado');

        return redirect()->route('deportes.lista');
    }

    public function editDeporte(deporte $deporte)
    {
        return view('deportes.deporte-edit')->with(['deporte' => $deporte]);
    }

    public function updateDeporte(deporte $deporte, UpdateDeporteRequest $request)
    {
        $deporte->update(
            $request->only('deporte', 'cuota')
        );
        
        session()->flash('msj', 'Deporte Actualizado');

        return redirect()->route('deportes.lista', ['deporte' => $deporte->id]);
    }

    public function deleteDeporte(deporte $deporte)
    {

        $deporte->delete();

        session()->flash('msj', 'Deporte Eliminado');

        return redirect()->route('deportes.lista');
    }
}
