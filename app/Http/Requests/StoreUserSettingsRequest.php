<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        
        $userSettingsId = $this->route('user_setting');
        $user = $this->user();

        // Check if the user owns the user settings being updated
        return $user->userSettings()->where('id', $userSettingsId)->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nickname' => 'required|string|max:20',
            'work_length' => 'required|integer',
            'short_break' => 'required|integer',
            'long_break' => 'required|integer',
        ];
    }
}
