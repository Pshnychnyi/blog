<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|min:2|max:100',
            'content' => 'required|string|min:2',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }

    public function messages() {
    	return [
    		'title.required' => 'Это поле необходимо для заполнения',
    		'title.string' => 'Данные должны соответствовать строчному типу',
    		'title.min' => 'Поле должно содержать не мение 2 символов',
    		'title.max' => 'Поле должно содержать не болие 100 символов',
    		'content.required' => 'Это поле необходимо для заполнения',
    		'content.string' => 'Данные должны соответствовать строчному типу',
    		'content.min' => 'Поле должно содержать не мение 2 символов',
    		'contrnt.max' => 'Поле должно содержать не болие 100 символов',
    		'preview_image.reqired' => 'Это поле необходимо для заполнения',
    		'preview_image.file' => 'Необходимо выбрать файл',
    		'main_image.required' => 'Это поле необходимо для заполнения',
    		'main_image.file' => 'Необходимо выбрать файл',
    		'category_id.required' => 'Это поле необходимо для заполнения',
    		'category_id.integer' => 'Данные должны соответствовать числовому типу',
    		'category_id.exists' => 'Id категории должен быть в базе данных',
    		'tag_ids.exists' => 'Id тега должен быть в базе данных',
    		'tag_ids.integer' => 'Данные должны соответствовать числовому типу'


    	];

    }
}
