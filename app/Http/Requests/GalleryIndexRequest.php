<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GalleryIndexRequest extends FormRequest
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
            'category' => ['required', Rule::in(['kuchyne_klasicke','kuchyne_moderni','kuchyne_bezuchytkove','skrine','komercni_prostory','koupelny','doplnky'])]
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Povinný parametr',
            'category.in' => 'Nevalidní hodnota parametru'
        ];
    }
}
