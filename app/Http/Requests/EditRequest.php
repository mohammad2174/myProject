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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'=>'فیلد نام را پرکنید',
            'name.max'=>'فیلد نام باید حداکثر 20 کاراکتر باشد',
            'email.required'=>'فیلد ایمیل را پرکنید',
            'email.email'=>'فیلد ایمیل غیرمجاز میباشد',
            'password.required'=>'فیلد کلمه عبور را پرکنید',
            'password.min'=>'فیلد کلمه عبور حداقل باید 12 کاراکتر باشد',
        ];
    }

    public function rules()
    {
        return [
            'name'=>'required|max:20',
            'email'=>'required|email',
            'password'=>'required|min:12',
        ];
    }

}
