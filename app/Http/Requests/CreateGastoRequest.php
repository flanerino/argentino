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
            'concepto' => 'required',
            'monto' => 'required',
            'fecha' => 'required'
        ];
    }
}
