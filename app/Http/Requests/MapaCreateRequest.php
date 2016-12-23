<?php

namespace Infraestructura\Http\Requests;

use Infraestructura\Http\Requests\Request;

class MapaCreateRequest extends Request
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
            'titulo'   => 'required|regex:/^[a-z ñáéíóú 0-9 , .]+$/i|min:5|max:50',
            'lat'      => 'required',
            'lng'      => 'required',
        ];
    }
    public function messages()
    {
        return [
                'titulo.regex'   => 'El título solo deben ser letras',
        ];
    }
}
