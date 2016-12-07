<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class VehiculoUpdateRequest extends Request
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
            'codigo'     => 'required|max:10|min:2|alpha_dash',
            'placa'      => 'required|max:20|min:3|alpha_dash',
            'color' => 'required|alpha|max:20',
            'pasajeros'  => 'required|numeric',
            'kilometraje'=> 'numeric',
            'tipog'  => 'required|alpha|max:30|min:4',
            'estado'=> 'required|in:optimo,mantenimiento,desuso',
            'modelo'=> 'required|numeric',
            'tipoe' => 'required|alpha|max:30|min:4',
            'marca' => 'required|alpha|max:30|min:4',
            'chasis'=> 'required|max:70|min:3|alpha_dash',
            'chasis'=> 'required|max:70|min:3',
            'cilindrada'=> 'required|numeric',
        ];
    }
}
