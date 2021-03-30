<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use MDP\RequestsData\UserCreateData;

class UserCreateRequest extends FormRequest implements UserCreateData
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return config('app.user_registration_enabled');
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
            'email' => 'required|email|min:5',
            'password' => 'required|string|min:6',
            'api_token' => 'required|string|min:6',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'api_token' => bcrypt('macri suck balls')
        ]);
    }

    public function getName(): string
    {
        return $this->get('name');
    }

    public function getEmail(): string
    {
        return $this->get('email');
    }

    public function getApiToken(): string
    {
        return $this->get('api_token');
    }

    public function getPass(): string
    {
        return $this->get('password');
    }
}
