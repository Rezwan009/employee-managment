<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryValidationRequest extends FormRequest
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
                        'country_code'       => 'required|string|unique:countries,country_code',
                        'name'               => 'required|string|max:255'

                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'country_code'      => 'required|string|unique:countries,country_code,' . $this->country->id,
                        'name'              => 'required|string|max:255',
                    ];
                }
            default:
                break;
        }
    }
}
