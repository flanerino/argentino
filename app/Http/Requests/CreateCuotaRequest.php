<?php

namespace Argentino\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCuotaRequest extends FormRequest
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
            'monto' => 'required',
            'nombre' => 'required_without:socio_id',
            'apellido' => 'required_without:socio_id',
            'telefono' => 'required_without:socio_id',
            'domicilio' => 'required_without:socio_id',
            'mes' => 'required',
            'anio' => 'required'
        ];
    }
}
