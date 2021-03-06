<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTopicRequest extends FormRequest
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
            'name' => 'required',
            'preview' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('adminMess.validation_topicname'),
            'preview.required' => trans('adminMess.validation_preview'),
        ];
    }
}
