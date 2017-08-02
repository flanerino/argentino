<?php

namespace Argentino\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSocioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          /*  'nombre'=> 'required',
            'apellido' => 'required',
            'fecha_nac' => 'required',
            'dni' => 'required',
            'domicilio' => 'required',
            'domicilio_cobro' => 'required',
            'protector' => 'required',
            'deporte_id' => 'required' */
        ];
    }
}
