<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'course_name'   => 'required|min:4|max:32',
            'description'   => 'required|max:255',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'price'         => 'required|numeric|digits_between:1,10',
            'tag'           => 'required'
        ];
    }
}
