<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLessonRequests extends FormRequest
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
            'title' => 'required|max:100',
            'details' => 'required|max:2000',
            'media' => 'file|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts',


        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'يجب ادخال العنوان',
            'details.required' => 'يجب ادخال الملخص',
            'media.required' => 'يجب ادخال فيديو',
            'media.mimes' => 'يجب ان يكون الملف من نوع (mp4 , mkv , mov , flv)',

        ];
    }


}
