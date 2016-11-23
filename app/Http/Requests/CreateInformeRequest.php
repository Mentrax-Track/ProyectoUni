<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class CreateInformeRequest extends Request
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
                    'vehiculo' => 'required',
                    'chofer'   => 'required',
                    'encargado'=> 'required',
                    'entidad'  => 'required|regex:/^[a-z ñáéíóú]+$/i|min:5|max:40',
                    'fechapartida'=> 'required|date',
                    'kilopartida' => 'required|numeric',
                    'tiempopartida'=> 'required',
                    'fechallegada' => 'required|date',
                    'kilollegada'  => 'numeric',
                    'tiempollegada'=> 'required',
                    'viaticoa'     => 'numeric',
                    'viaticob'     => 'numeric',
                    'viaticoc'     => 'numeric',
                    'pasajeros'    => 'required|numeric',
                    'kmtotal'      => 'required|numeric',
                    'dias'         => 'required|numeric',
                    'recargue1'    => 'required|numeric',
                    'compra1'      => 'required|numeric',
                    'recargue2'    => 'numeric',
                    'compra2'      => 'numeric',
                    'recargue3'    => 'numeric',
                    'compra3'      => 'numeric',
                    'descripe'     => 'required|regex:/^[a-z ñáéíóú]+$/i|max:100',
                    'montope'      => 'required|numeric',
                    'montoim'      => 'numeric',
                    'totalpeim'    => 'required|numeric',
                    'delegacion'   => 'required|regex:/^[a-z ñáéíóú]+$/i|min:5|max:250',
                    'recomendacion'=> 'required|regex:/^[a-z ñáéíóú]+$/i|min:5|max:200',
                    'descripmante' => 'regex:/^[a-z ñáéíóú]+$/i|min:5|max:200',
                    'combustotalu' => 'required|numeric',
                    'combustotalco' => 'required|numeric',
                    'combus'=> 'numeric',
                    'peaje' => 'numeric',
                    'impre' => 'numeric',
                    'totalcopeim'      => 'numeric',
                    'mantenimiento'    => 'max:200',
        ];
    }

    public function messages()
    {
        return [
                'entidad.regex'      => 'En la entidad solo se aceptan letras. Maximo 40 caracteres',
                'descripe.regex'     => 'En la descripción de peajes e imprevistos solo se aceptan letras máximo 100 caracteres',
                'delegacion.regex'   => 'En al descripcion de la delegacion solo se aceptan letras máximo 250 caracteres',
                'recomendacion.regex'=> 'En la recomendación solo se aceptan letras como máximo 200 caracteres',
                'descripmante.regex' => 'En la descripción del mantenimiento solo deben haber letras hasta 200 caracteres'
        ];
    }
}
