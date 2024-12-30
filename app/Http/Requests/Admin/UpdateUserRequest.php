<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $userId = $this->route('id'); //Lấy giá trị tham số id từ route hiện tại
        return [
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($userId), //Kiểm tra tính duy nhất của email trong bảng users, nhưng bỏ qua (ignore) bản ghi có ID là $userId (tránh lỗi khi cập nhật chính email của mình).
            ], // Validate email format and uniqueness
            'name' => 'required|string|max:255',
            'national_id' => 'required|integer|exists:nationals,id', // Validate national (e.g., nationality) as a string
            'level_id' => 'required|integer|exists:levels,id', // Validate level (1, 2, or 3)
            'address' => 'nullable|string|max:255', // Validate address as a string (nullable)
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate avatar as an image file (optional)
            'phone_number' => 'nullable|string|regex:/^(\+?\d{1,4}[\s\-]?)?(\(?\d{1,3}\)?[\s\-]?\d{3,4}[\s\-]?\d{4})$/', // Validate phone number with regex pattern
        ];
    }
}
