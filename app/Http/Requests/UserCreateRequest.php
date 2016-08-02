<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'cedula'   => 'required|regex:/^[0-9]+$/i|between:8,12|unique:users,cedula',
            'celular'  => 'required|regex:/^[0-9]+$/i|between:8,12|unique:users,celular',
            'password' => 'required|max:20',
            'tipo'     => 'required',
            'email'    => 'unique:users,email|max:30',

        ];
    }
    public function messages()
    {
        return [
                'nombres.regex'      => 'En el nombre solo se aceptan letras',
                'apellidos.regex'    => 'En el apellido solo se aceptan letras',
                'celular.regex'      => 'En el campo celular solo se aceptan números',
                'cedula.regex'       => 'En el campo cedula solo se aceptan números',
        ];
    }
}
