<?php

namespace Argentino\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeporteRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
      return [
          'deporte' => 'required',
          'cuota' => 'required',
      ];
    }
}
