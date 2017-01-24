<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class SolicitudCreateRequest extends Request
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
            'vehiculo_id' => 'required',
            'solicitud'   => 'required|max:100',
            'descripsoli' => 'required|regex:/^[a-z ñáéíóú )]+$/i|max:250',
        ];
    }
    public function messages()
    {
        return [
                'descripsoli.regex'    => 'En el campo descripción deben ser números y letras hasta 250 caracteres',
        ];
    }
}
