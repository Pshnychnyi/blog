<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer'
        ];
    }

    public function messages() {
    	return [
    		'name.required' => 'Это поле обязательно к заполнению',
    		'name.string' => 'Данные должны соответствовать строчному типу',
    		'name.min' => 'Поле должно содержать не мение 2 символов',
    		'name.max' => 'Данные должны соответствовать строчному типу',
    		'email.required' => 'Это поле обязательно к заполнению',
    		'email.string' => 'Данные должны соответствовать строчному типу',
    		'email.email' => 'Поле должно соответствовать виду example@example.example',
    		'email.unique' => 'Поле Email должно быть уникальным',
    		'role.integer' => 'Данные должны соответствовать числовому типу',
    		'role.required' => 'Это поле обязательно к заполнению'
 
    	];

    }
}
