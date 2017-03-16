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
            'cedula'   => 'between:7,12',
            'celular'  => 'between:8,12',
            'tipo'     => 'required|in:chofer,mecánico,encargado,mensajero',
            'email'    => 'max:50',
            'facultad' => 'regex:/^[a-z ñáéíóú]+$/i|min:10|max:30',
            'carrera'  => 'regex:/^[a-z ñáéíóú]+$/i|min:5|max:30',
            'materia'  => 'regex:/^[a-z ñáéíóú]+$/i|min:5|max:20',
            'sigla'    => 'min:5|max:15'

        ];
    }
    public function messages()
    {
        return [
                'nombres.regex'   => 'En el nombre solo se aceptan letras',
                'apellidos.regex' => 'En el apellido solo se aceptan letras',
                'facultad.regex'  => 'En la facultad solo se aceptan letras',
                'carrera.regex'   => 'En la carrera solo se aceptan letras',
                'materia.regex'   => 'En la materia solo se aceptan letras',
        ];
    }
}
