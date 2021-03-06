<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MessageRequest extends Request
{
    /**
     * valida que el usuario pueda hacer una petición.
     *
     * @return bool
     */
    public function authorize()
    {
        /* habilita al user hacer peticiones */
        return true;
    }

    /**
     * Valida que campos son requeridos para crear un nuevo message
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'seen' => 'required|string',
            'message' => 'required'
        ];
    }
}
