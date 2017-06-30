<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\Gasto;
use Argentino\Http\Requests\CreateGastoRequest;
use Argentino\Http\Requests\UpdateGastoRequest;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    // Metodos para la parte de gastos
    public function createGasto(){
      return view('gastos.gasto-create');
    }

    public function storeGasto(CreateGastoRequest $request){
      $gasto = new Gasto;
      $gasto->num_factura = $request->num_factura;
      $gasto->proveedor = $request->proveedor;
      $gasto->concepto = $request->concepto;
      $gasto->fecha = $request->fecha;
      $gasto->monto = $request->monto;
      $gasto->fecha_pago = $request->fecha_pago;
      $gasto->fecha_vencimiento = $request->fecha_vencimiento;
      $gasto->observacion = $request->observacion;
      $gasto->save();

      session()->flash('msj', 'Gasto Generado');

      return redirect()->route('gastos.lista');
    }

    public function showListaGastos(){
      $gastos = Gasto::orderBy('id', 'desc')->get();

      return view('gastos.gastos-lista')->with(['gastos' => $gastos]);
    }

    public function editGasto(Gasto $gasto){
      return view('gastos.gasto-edit')->with(['gasto' => $gasto]);
    }

    public function updateGasto(Gasto $gasto, UpdateGastoRequest $request){
      $gasto->update(
            $request->all()
        );
        session()->flash('msj', 'Gasto Actualizado');

        return redirect()->route('gastos.lista', ['gasto' => $gasto->id]);
    }

    public function deleteGasto(Gasto $gasto){
      $gasto->delete();

      session()->flash('msj', 'Gasto Eliminado');

      return redirect()->route('gastos.lista');
    }
    // final metodos para parte de gastos
}
