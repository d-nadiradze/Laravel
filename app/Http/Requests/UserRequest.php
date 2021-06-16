<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

                'name' => 'required|min:5',
                'country' => 'required',
                'dateofbirth' => 'required|date|before:2003-11-1'

        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'სახელის ველის შევსება აუცილებელია',
            'name.min'=>'სახელის ველში მინიმალური სიმბოლოების რაოდენობაა 5',
            'country.required' =>'ქალაქის ველის შევსება აუცილებელია',
            'dateofbirth.required'=>'თარიღის ველის შევსება აუცილებელია',
            'dateofbirth.before'=>'თქვენი ასაკი არ შეესაბამება მინიმალურ მოთხოვნებს'
        ];
    }
}
