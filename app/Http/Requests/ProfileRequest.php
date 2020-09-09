<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class ProfileRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];

            case 'POST':
                $dateNow = Carbon::today();
                return [
                    'profile_name'         => 'required|min:4|max:32',
                    'profile_email'        => 'required|email|max:255|unique:users,email, '. auth()->user()->id . ',id',
                    'address'              => 'required',
                    'phone'                => 'required|numeric|digits_between:10,15',
                    'birth_day'            => 'bail|required|date|before:' . $dateNow,
                ];

            case 'PUT':
                return [
                    'profile_name'         => 'required|min:4|max:32 , '. auth()->user()->id . ',id',
                    'profile_email'        => 'required|min:4|max:50',
                    'phone'                => 'required|numeric|digits_between:10,15',
                    'address'              => 'required',
                    'avatar'               => 'image',
                    'birth_day'            => 'bail|required|date',
                ];

            case 'PATCH':
                return [];

            default:
                break;
        }
    }
}
