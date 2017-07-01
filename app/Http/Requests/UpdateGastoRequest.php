<?php

namespace Argentino\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGastoRequest extends FormRequest
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
          'fecha' => 'required',
          'monto' => 'required',
          'fecha_pago' => 'required',
          'fecha_vencimiento' => 'required',
          'observacion' => 'required',
      ];
  }
}
