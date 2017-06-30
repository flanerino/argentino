<?php

namespace Argentino\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGastoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'num_factura' => 'required',
            'proveedor' => 'required',
            'concepto' => 'required',
            'fecha' => 'required|date',
            'monto' => 'required',
            'fecha_pago' => 'required|date',
            'fecha_vencimiento' => 'required|date',
            'observacion' => 'required',
        ];
    }
}
