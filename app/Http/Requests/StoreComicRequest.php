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
            "title" => "required|string|min:5|max:100",
            "description" => "required|string|min:5|max:100",
            "price" => "required|decimal:8,2|min:5|max:100",
            "series" => "required|string|min:5|max:100",
            "thumb" => "required|string|min:5|max:100",
            "sale_date" => "required|date|min:5|max:100",
            "type" => "required|string|min:5|max:100"
        ];
    }
}
