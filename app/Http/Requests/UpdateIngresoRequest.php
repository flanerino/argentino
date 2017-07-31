<?php

namespace Argentino\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIngresoRequest extends FormRequest
{
  public function authorize()
  {
      return true;
  }

  public function rules()
  {
      return [
        'concepto' => 'required',
        'fecha' => 'required',
        'monto' => 'required'
      ];
  }
}
