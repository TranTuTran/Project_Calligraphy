<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email', // Validate email format and uniqueness
            'name' => 'required|string|max:255', // Validate email format and uniqueness
            'password' => 'required|confirmed|min:8', // Validate password with a minimum length of 8
            'national_id' => 'required|integer|exists:nationals,id', // Validate national (e.g., nationality) as a string
            'level_id' => 'required|integer|exists:levels,id', // Validate level (1, 2, or 3)
            'address' => 'nullable|string|max:255', // Validate address as a string (nullable)
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate avatar as an image file (optional)
            'phone_number' => 'nullable|string|regex:/^(\+?\d{1,4}[\s\-]?)?(\(?\d{1,3}\)?[\s\-]?\d{3,4}[\s\-]?\d{4})$/', // Validate phone number with regex pattern
        ];
    }
}
