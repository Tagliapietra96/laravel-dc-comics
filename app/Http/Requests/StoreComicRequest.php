<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "reuired|string|min:5|max:100",
            "description" => "reuired|string|min:5|max:100",
            "price" => "reuired|decimal:8,2|min:5|max:100",
            "series" => "reuired|string|min:5|max:100",
            "thumb" => "reuired|string|min:5|max:100",
            "sale_date" => "reuired|date|min:5|max:100",
            "type" => "reuired|string|min:5|max:100"
        ];
    }
}
