<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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
            'name' => "required|regex:/^([A-ZĐ]([a-záàảãạâấầẩẫậăắằẳẵặéèẻẽẹêếềểễệíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹỵ])+(\s)?)+$/",
            'age' => "required|date_format:Y/m/d"
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Bạn cần phải điền đầy đủ họ tên!',
            'name.regex' => "Tên phải có định dạng 'Abc Def'",
            'age.required' => 'Bạn cần phải điền tuổi !',
            'age.date_format' => 'Tuổi phải có định dạng yy/mm/dd'
        ];

        return $messages;
    }
}
