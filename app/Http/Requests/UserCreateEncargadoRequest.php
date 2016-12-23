<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class UserCreateEncargadoRequest extends Request
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
            'cedula'   => 'regex:/^[0-9 a-z A-Z]+$/i|between:7,12|unique:users,cedula',
            'celular'  => 'regex:/^[0-9]+$/i|between:8,12|unique:users,celular',
            'facultad' => 'required|regex:/^[a-z ñáéíóú]+$/i|max:50',
            'carrera'  => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'materia'  => 'required|regex:/^[a-z ñáéíóú]+$/i|max:20',
            'sigla'    => 'required|min:5|max:15',
            'password' => 'required|max:20',
            'email'    => 'unique:users,email|max:50',
        ];
    }
    public function messages()
    {
        return [
                'nombres.regex'      => 'En el nombre solo se aceptan letras',
                'apellidos.regex'    => 'En el apellido solo se aceptan letras',
                'celular.regex'      => 'En el campo celular solo se aceptan números',
                'facultad.regex'     => 'En el campo facultad solo se aceptan letras',
                'carrera.regex'      => 'En el campo carrera aceptan letras',
                'materia.regex'      => 'En el campo materia solo se aceptan letras',
                'cedula.regex'       => 'En el campo cédula minimo son 7 caracteres',
        ];
    }
}
