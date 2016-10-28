<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class SalidaCreateRequest extends Request
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
            'chofer'   => 'required',
            'vehiculo' => 'required',
            'lugar'    => 'required|regex:/^[a-z ñáéíóú-]+$/i|max:50',
            'motivo'     => 'required|regex:/^[a-z ñáéíóú-]+$/i|max:50',
            'responsable'=> 'required|regex:/^[a-z ñáéíóú-]+$/i|max:50',
        ];
    }
    public function messages()
    {
        return [
                'lugar.regex'  => 'En el campo lugar solo se aceptan letras hasta 50 caracteres',
                'motivo.regex' => 'En el campo motivo solo se aceptan letras hasta 50 caracteres',
                'responsable.regex' => 'En el campo responsable solo se aceptan letras hasta 50 caracteres',

        ];
    }
}
