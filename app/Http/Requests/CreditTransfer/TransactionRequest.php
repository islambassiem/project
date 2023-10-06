<?php

namespace App\Http\Requests\CreditTransfer;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
      'student_name'    => 'required',
      'student_id'      => 'required',
      'semester'        => 'required|numeric|between:111,999',
      'college_id'         => 'required',
      'specialization_id'  => 'required',
      'department_id'      => 'required'
    ];
  }

  public function messages()
  {
    return  [
      'student_name.required'        => 'You cannot leave student name blank',
      'student_id.required'          => 'You cannot leave student ID blank',
      'semester.required'            => 'You cannot leave the semester blank',
      'semester.between'             => 'The semester is not correct',
      'college_id.required'          => 'You need to choose the previous college of the students',
      'specialization_id.required'   => 'You need to choose the previous specialization of the students',
      'department_id.required'       => 'You need to choose the next specialization of the students',
    ];
  }
}
