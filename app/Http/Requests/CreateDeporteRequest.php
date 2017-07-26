<?php

namespace Argentino\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDeporteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
      return [
          'deporte' => 'required',
          'cuota' => 'required',
      ];
    }
}
