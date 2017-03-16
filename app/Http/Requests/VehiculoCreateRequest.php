<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class VehiculoCreateRequest extends Request
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
            'codigo'     => 'required|unique:vehiculos,codigo|max:10|min:2|alpha_dash',
            'placa'      => 'required|unique:vehiculos,placa|max:20|min:3|alpha_dash',
            'color' => 'required|max:20',
            'pasajeros'  => 'required|numeric',
            'kilometraje'=> 'numeric',
            'tipog'  => 'required|regex:/^[a-z ñáéíóú 0-9]+$/i|max:30|min:4',
            'estado'=> 'required|in:optimo,mantenimiento,desuso',
            'modelo'=> 'required|numeric',
            'tipoe' => 'required|regex:/^[a-z ñáéíóú 0-9]+$/i|max:30|min:4',
            'marca' => 'required|regex:/^[a-z ñáéíóú 0-9]+$/i|max:30|min:4',
            'chasis'=> 'required|max:70|min:3|alpha_dash',
            'cilindrada'=> 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
                'tipog.regex'  => 'En el tipo general solo se aceptan letras',
                'tipoe.regex'  => 'En el tipo específico solo se aceptan letras',
                'marca.regex'  => 'En la marca solo se aceptan letras',
        ];
    }
}
