<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'        => 'required|max:50',
            'body'         => 'required|max:500',
            'worklocation' => 'required|max:20',
            'deliverydate' => 'date|after:' . date('Y-m-d'),
        ];
    }

    public function attributes()
    {
        return [
            'title'        => 'タイトル',
            'body'         => '本文',
            'worklocation' => '作業場所',
            'deliverydate' => '納品日',
        ];
    }
}
