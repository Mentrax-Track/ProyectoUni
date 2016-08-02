<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class UserUpdateRequest extends Request
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
            'nombres'  => 'required|regex:/^[a-z ñáéíóú]+$/i|max:20',
            'apellidos'=> 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'cedula'   => 'required|between:8,10',
            'celular'  => 'required|between:8,10',
            'tipo'     => 'required',
            'email'    => 'max:30',

        ];
    }
    public function messages()
    {
        return [
                'nombres.regex'      => 'En el nombre solo se aceptan letras',
                'apellidos.regex'    => 'En el apellido solo se aceptan letras',
        ];
    }
}
