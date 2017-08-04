<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\Http\Controllers\Controller;
use Argentino\Ingreso;
use Argentino\Http\Requests\CreateIngresoRequest;
use Argentino\Http\Requests\UpdateIngresoRequest;
use Illuminate\Support\Facades\Input;
use Dompdf\Dompdf;

class IngresosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  // Metodo que devuleve el formulario de ingreso de ingresos
  public function createIngreso()
  {
      return view('ingresos.ingreso-create');
  }

  // Metodo para guardar un ingreso
  public function storeIngreso(CreateIngresoRequest $request)
  {
      $ingreso = new Ingreso;
      $ingreso->num_recibo = $request->num_recibo;
      $ingreso->concepto = $request->concepto;
      $ingreso->fecha = $request->fecha;
      $ingreso->monto = $request->monto;
      $ingreso->forma_pago = $request->forma_pago;
      $ingreso->fecha_cobro = $request->fecha_cobro;
      $ingreso->observacion = $request->observacion;
      $ingreso->save();

      session()->flash('msj', 'Ingreso Registrado');

      return view('ingresos.ingreso-edit')->with(['ingreso' => $ingreso]);
  }

  // Metodo para mostar las lista de los ingresos registrados
  public function showListaIngresos()
  {
      $nrorecibo = Input::get('nrorecibo');
      $concepto = Input::get('concepto');

      $ingresos = Ingreso::filter($nrorecibo, $concepto)->orderBy('id', 'asc')->get();

      return view('ingresos.ingreso-lista')->with(
              [   'ingresos' => $ingresos,
                  'nrorecibo' => $nrorecibo,
                  'concepto' => $concepto
              ]);
  }

  // Metodo que devuelve el formulario de edicion de un ingreso
  public function editIngreso(Ingreso $ingreso)
  {
      return view('ingresos.ingreso-edit')->with(['ingreso' => $ingreso]);
  }

  // Metodo para actualizar un ingreso
  public function updateIngreso(Ingreso $ingreso, UpdateIngresoRequest $request)
  {
      $ingreso->update($request->only(
          'num_recibo',
          'concepto',
          'fecha',
          'monto',
          'forma_pago',
          'fecha_cobro',
          'observacion'
      ));

      session()->flash('msj', 'Ingreso Actualizado');
      return redirect()->route('edit.ingreso', ['ingreso' => $ingreso->id]);
  }

  // Metodo para eliminar un ingreso
  public function deleteIngreso(Ingreso $ingreso)
  {
      $ingreso->delete();
      session()->flash('msj', 'Ingreso Eliminado');
      return redirect()->route('ingresos.lista');
  }

  // Metodo que devuelve el recibo (pdf) de un ingreso
  public function generarRecibo(Ingreso $ingreso)
  {
    $view = \View::make('ingresos.recibo',compact('ingreso'))->render();
    $pdf = new Dompdf();
      $pdf->loadHtml($view);
      $pdf->setPaper('A4', 'portrait');
      $pdf->render();
      $pdf->stream("recibo.pdf", array("Attachment"=>0));
  }
}
