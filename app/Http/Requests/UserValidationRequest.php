<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidationRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'first_name'      => 'required|string|max:255',
                        'last_name'       => 'required|string|min:3|max:255',
                        'user_name'       => 'required|string|min:3|max:255',
                        'email'           => 'required|string|email|max:255|unique:users',
                        'password'        => 'required|string|min:8'
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'first_name'      => 'required|string|max:255',
                        'last_name'       => 'required|string|min:3|max:255',
                        'user_name'       => 'required|string|min:3|max:255',
                        'email'           => 'required|string|email|max:255,' . $this->id,
                    ];
                }
            default:
                break;
        }
    }
}
