<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class PresupuestoCreateRequest extends Request
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
            'chofer'      => 'required',
            'encargado'   => 'required|numeric',
            'entidad'     => 'required',
            'fecha_sa'    => 'required|date',
            'division1'   => 'required|numeric',
            'viaje_id'    => 'required|numeric',
            'combustible1'=> 'required|numeric',
            'cantidad1'   => 'required|numeric',
            'precio1'     => 'required|numeric',
            'total1C'     => 'required|numeric',
            'cantidad2'   => 'numeric',
            'precio2'     => 'numeric',
            'total2VC'    => 'numeric',
            'cantidad3'   => 'numeric',
            'precio3'     => 'numeric',
            'total3VP'    => 'numeric',
            'cantidad4'   => 'numeric',
            'precio4'     => 'numeric',
            'total4VF'    => 'numeric',
            'cantidad5'   => 'numeric',
            'precio5'     => 'numeric',
            'total5P'     => 'numeric',
            'cantidad6'   => 'numeric',
            'precio6'     => 'numeric',
            'total6M'     => 'numeric',
            'cantidad7'   => 'numeric',
            'precio7'     => 'numeric',
            'total7G'     => 'numeric',
            'total8T'     => 'required|numeric',
            'responsable' => 'required|regex:/^[a-z ñáéíóú]+$/i|max:40',
            'materia'     => 'regex:/^[a-z ñáéíóú]+$/i|max:30',
            'sigla'       => 'min:4|max:15',
            'hsalida'     => 'required',
            'hllegada'    => 'required',
            'p1'   => 'required|numeric',
            'r1'   => 'required|regex:/^[a-z ñáéíóú]+$/i|max:100',
            'c1'   => 'required|numeric',
            't1'   => 'required|numeric',
            'p2'   => 'numeric',
            'r2'   => 'regex:/^[a-z ñáéíóú]+$/i|max:100',
            'c2'   => 'numeric',
            't2'   => 'numeric',
            'p3'   => 'numeric',
            'c3'   => 'numeric',
            't3'   => 'numeric',
            'tt'   => 'required|numeric',
            'diferencia'   => 'required',
            'nota' => 'regex:/^[a-z ñáéíóú]+$/i|max:100',

        ];
    }
    public function messages()
    {
        return [
                'entidad.regex'      => 'En la entidad solo se aceptan letras',
                'responsable.regex'  => 'En el responsable solo se aceptan letras',
                'materia.regex'      => 'En la materia solo se aceptan letras',
                'r1.regex'           => 'En la ruta solo se aceptan letras hasta 100 caracteres',
                'r2.regex'           => 'En la ruta solo se aceptan letras hasta 100 caracteres',
                'nota.regex'         => 'En la nota solo se aceptan letras hasta 100 caracteres', 
        ];
    }
}
