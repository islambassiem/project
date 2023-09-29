<?php

namespace App\Http\Requests\CreditTransfer;

use Illuminate\Foundation\Http\FormRequest;

class LoninRequest extends FormRequest
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
      'empid' => 'required',
      'password' => 'required'
    ];
  }

  public function messages()
  {
    return [
      'empid.required' => 'Employee ID is required',
      'password.required' => 'Password is required'
    ];
  }
}
