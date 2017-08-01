<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\Http\Controllers\Controller;
use Argentino\Gasto;
use Argentino\Http\Requests\CreateGastoRequest;
use Argentino\Http\Requests\UpdateGastoRequest;

class GastosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  // Metodos para la parte de gastos

  // Metodo que devuleve el formulario de ingreso de gastos
  public function createGasto(){
    return view('gastos.gasto-create');
  }

  // Metodo para guardar un gasto
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

  // Metodo para mostar las lista de los gastos ingresados
  public function showListaGastos(){
    $gastos = Gasto::orderBy('id', 'desc')->paginate(10);

    return view('gastos.gastos-lista')->with(['gastos' => $gastos]);
  }

  // Metodo que devuelve el formulario de edicion de un gasto
  public function editGasto(Gasto $gasto){
    return view('gastos.gasto-edit')->with(['gasto' => $gasto]);
  }

  // Metodo para actualizar un gasto
  public function updateGasto(Gasto $gasto, UpdateGastoRequest $request){
    $gasto->update(
          $request->all()
      );
      session()->flash('msj', 'Gasto Actualizado');

      return redirect()->route('gastos.lista', ['gasto' => $gasto->id]);
  }

  // Metodo para eliminar un gasto
  public function deleteGasto(Gasto $gasto){
    $gasto->delete();

    session()->flash('msj', 'Gasto Eliminado');

    return redirect()->route('gastos.lista');
  }
  // final metodos para parte de gastos
}
