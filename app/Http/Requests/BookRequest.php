<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "book_name" => 'required',
            "book_description" => 'required',
            "book_author" => 'required',
            "book_editorial" => 'required',
            "book_page_number" => ['required'],
            "book_publication_date" =>  ['required', 'date']
        ];
    }
}
