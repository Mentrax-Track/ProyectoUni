<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class ViajeCreateRequest extends Request
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
            'destino_id'=> 'required',
            'kilome'    => 'required|numeric',
            'k1'        => 'numeric',
            'k2'        => 'numeric',
            'k3'        => 'numeric',
            'k4'        => 'numeric',
            'k5'        => 'numeric',
            'adicional' => 'required|numeric',
            'total'     => 'required|numeric',
            'chofer'    => 'required',
            'encargado' => 'required',
            'vehiculo'  => 'required',
            'entidad'   => 'required|regex:/^[a-z ñáéíóú-]+$/i|min:5|max:50',

            'objetivo'     => 'required|regex:/^[a-z ñáéíóú]+$/i|min:5|max:100',
            'tipo'         => 'required|in:Viaje de Práctica,Viaje de Inspección,Viaje Académico,Viaje de Cultura',
            'pasajeros'    => 'required|numeric',
            'fecha_inicial'=> 'required|date',
            'fecha_final'  => 'required|date',
        ];
    }
    public function messages()
    {
        return [
                'entidad.regex'   => 'En la entidad solo se aceptan letras',
                'objetivo.regex'  => 'En el Objetivo solo se aceptan letras',
        ];
    }
}
