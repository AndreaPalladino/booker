<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required|max:100',
            'author'=>'required|max:50',
            'plot'=>'required|max:800',
            'img'=>'required',
            'pdf'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'The Title is mandatory',
            'title.max'=>'The Title must not exceed 100 characters',
            'author.required'=>'The Author\'s name is mandatory, put at least his/her surname',
            'author.max'=>'The Author\'s input must not exceed 100 characters',
            'img.required'=>'You don\'t judge a book by its cover but c\'mon, at least it\'s pleasing',
            'pdf.required'=>'The e-Book file must be uploaded otherwise why are you uploading a book?',
            'plot.required'=>'Give us some info on what this book is about by adding some plot...'
        ];
    }
}
