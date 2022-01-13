<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //dd($this->brand);
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $id = (is_object($this->brand)? $this->brand->id: $this->brand) ?? null;

        return [
            'name' => [
                'required',
                'min:3',
                'max:150',
                Rule::unique('brands', 'name')->ignore($id)
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Новое сообщение об ошибке',
            'name.email' => 'Некорректный е-майл',
            'name.unique' => 'Такое имя уже занято'
        ];
    }
}
