<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'=>'فیلد خالی را پرکنید',
            'name.max'=>'فیلد نام باید حداکثر 20 کاراکتر باشد',
            'email.required'=>'فیلد خالی را پرکنید',
            'email.email'=>'فیلد ایمیل غیرمجاز میباشد',
            'passowrd.required'=>'فیلد خالی را پرکنید',
            'passowrd.min'=>'فیلد کلمه رمز حداقل باید 16 کاراکتر باشد',
        ];
    }

    public function rules()
    {
        return [
            'name'=>'required|max:20',
            'email'=>'required|email',
            'password'=>'required|min:16',
        ];
    }

}
