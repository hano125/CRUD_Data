<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
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
            'post_name'=>'required|max:50|unique:posts,name',
            'post_no'=>'numeric',
            'post_content'=>'required'
        ];
    }
    public function messages()
    {
        return $messages=[
            'post_name.required'=>__('messages.post name required'),
            'post_name.unique'=>__('messages.post name unique'),
            'post_no.numeric'=>__('messages.post no numeric')
        ];
    }
}
