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
            'celular'  => 'regex:/^[0-9]+$/i|between:8,12|unique:users,celular',
            'facultad' => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'carrera'  => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'materia'  => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'sigla'    => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'password' => 'required|max:12',
            'tipo'     => 'required',
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
                'sigla.regex'        => 'En el campo sigla solo se aceptan letras',
        ];
    }
}
