<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class PresuDiaCreateRequest extends Request
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
            'vehiculo'    => 'required|numeric',
            'chofer'      => 'required|numeric',
            'encargado'   => 'required|numeric',
            'combustible' => 'required|numeric',
            'litros'      => 'required|numeric',
            'numero'      => 'required|numeric',
            'vuelta'      => 'required|numeric',
            'fechavu'     => 'required|date',
            'viaje_id'    => 'required|numeric',
            'motivo'      => 'required|regex:/^[a-z ñáéíóú]+$/i|max:100',
            'entidad'     => 'required|regex:/^[a-z ñáéíóú]+$/i|max:50',
            
        ];
    }
    public function messages()
    {
        return [
                'motivo.regex'      => 'En el motivo solo se aceptan letras hasta 100 caracteres',
                'entidad.regex'  => 'En la entidad solo se aceptan letras hasta 50 caracteres',
            ];
    }
}
