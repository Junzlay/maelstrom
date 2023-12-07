<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'car_model' => 'required',
            'year_manufactured' => 'required',
            'service_name' => 'required',
            'special_instructions' => 'required',
            'preferred_date_time' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'full name',
            'email' => 'email address',
            'contact' => 'contact number',
            'address' => 'current address',
            'car_model' => 'model of the car',
            'year_manufactured' => 'year of manucture',
            'service_name' => 'service name',
            'special_instructions' => 'special requests and instructions',
            'preferred_date_time' => 'preferred date and time'
        ];
    }
}
