<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use MDP\RequestsData\ContactFormData;

class ContactFormRequest extends FormRequest implements ContactFormData
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return config('app.user_contact_form_enabled');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'subject' => 'required|string|min:2',
            'message' => 'required|string|min:5'
        ];
    }

    public function getName(): string
    {
        return $this->get('name');
    }

    public function getSubject(): string
    {
        return $this->get('subject');
    }

    public function getEmail(): string
    {
        return $this->get('email');
    }

    public function getMessage(): string
    {
        return $this->get('message');
    }
}
