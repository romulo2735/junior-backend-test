<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $contactId = $this->route('contact')?->id;

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email' . ($contactId ? ",$contactId" : ''),
            'phone' => 'required|min:10',
        ];
    }
}
