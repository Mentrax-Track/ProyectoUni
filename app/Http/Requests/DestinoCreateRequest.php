<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class DestinoCreateRequest extends Request
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
            'origen'     => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'destino'    => 'required|regex:/^[a-z ñáéíóú]+$/i|max:30',
            'ruta'       => 'required|regex:/^[a-z ñáéíóú-]+$/i|max:100',
            'dep_inicio' => 'required|in:Potosí,Oruro,La_paz,Pando,Cochabamba,Sucre,Tarija,Santa_cruz,Beni',
            'dep_final'  => 'required|in:Potosí,Oruro,La_paz,Pando,Cochabamba,Sucre,Tarija,Santa_cruz,Beni',
            'kilometraje'=> 'required|between:1,5',
            'tiempo'     => 'required',
        ];
    }
    public function messages()
    {
        return [
                'origen.regex'   => 'En el origen solo se aceptan letras',
                'destino.regex'  => 'En el destino solo se aceptan letras',
                'ruta.regex'     => 'En la ruta solo se aceptan letras y el caracter -',
        ];
    }
}
