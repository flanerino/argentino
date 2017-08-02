<?php

namespace Argentino\Http\Controllers;

use Illuminate\Http\Request;
use Argentino\Http\Controllers\Controller;
use Argentino\Gasto;
use Argentino\Http\Requests\CreateGastoRequest;
use Argentino\Http\Requests\UpdateGastoRequest;
use Illuminate\Support\Facades\Input;

class GastosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Metodos para la parte de gastos

    // Metodo que devuleve el formulario de ingreso de gastos
    public function createGasto()
    {
        return view('gastos.gasto-create');
    }

    // Metodo para guardar un gasto
    public function storeGasto(CreateGastoRequest $request)
    {
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

        return view('gastos.gasto-edit')->with(['gasto' => $gasto]);
    }

    // Metodo para mostar las lista de los gastos ingresados
    public function showListaGastos()
    {
        $nrofactura=Input::get('nrofactura');
        $proveedor=Input::get('proveedor');
        $concepto=Input::get('concepto');
        
        $gastos = Gasto::filter($nrofactura,$proveedor,$concepto)->orderBy('id', 'asc')->get();

        return view('gastos.gastos-lista')->with(
                [   'gastos' => $gastos,
                    'nrofactura' => $nrofactura,
                    'proveedor' => $proveedor,
                    'concepto' => $concepto
                ]);
    }

    // Metodo que devuelve el formulario de edicion de un gasto
    public function editGasto(Gasto $gasto)
    {
        return view('gastos.gasto-edit')->with(['gasto' => $gasto]);
    }

    // Metodo para actualizar un gasto
    public function updateGasto(Gasto $gasto, UpdateGastoRequest $request)
    {        
        $gasto->update($request->only(
            'num_factura',
            'proveedor',
            'concepto',
            'fecha',
            'monto',
            'fecha_pago',
            'fecha_vencimiento',
            'observacion'
        ));
        
        session()->flash('msj', 'Gasto Actualizado');
        return redirect()->route('edit.gasto', ['gasto' => $gasto->id]);
    }

    // Metodo para eliminar un gasto
    public function deleteGasto(Gasto $gasto)
    {
        $gasto->delete();
        session()->flash('msj', 'Gasto Eliminado');
        return redirect()->route('gastos.lista');
    }
    // final metodos para parte de gastos
}
