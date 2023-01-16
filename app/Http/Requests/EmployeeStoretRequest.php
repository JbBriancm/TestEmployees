<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoretRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|unique:employees|min:1|regex:/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',
            'first_name' => 'required|regex:/^(?=.{3,45}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',
            'last_name' => 'required|regex:/^(?=.{3,45}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/',
            'start_date' => 'required',
            'position_id' => 'required',
            'company_id' => 'required'

            
        ];
    }
}
