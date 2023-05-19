<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'thumb' => 'required|url|max:255',
            'title' => 'required|max:50',
            'type' => 'required|max:20',
            'series' => 'required|max:30',
            'sale_date' => 'required',
            'price' => 'required|decimal:2',
            'description' => 'nullable|max:2000'
        ];
    }
    public function messages()
    {
        return [
            'thumb.required' => 'URL dell\'immagine richiesto',
            'thumb.url' => 'URL non valido, esermpio http://www.ilmiosito.it',
            'thumb.max' => 'l\'URL deve contenere al massimo 255 caratteri',

            'title.required' => 'titolo richiesto',
            'title.max' => 'Il campo titolo deve contenere al massimo 50 caratteri',

            'type.required' => 'type richiesto',
            'type.max' => 'Il campo type deve contenere al massimo 20 caratteri',

            'series.require' => 'il campo series è richiiesto',
            'series.max' => 'Il campo type deve contenere al massimo 30 caratteri',

            'sale_date.required' => 'data richiesta',

            'price.required' => 'price richiesto',
            'price.decimal' => 'Il campo price richiede al massimo 2 valori decimali',

            'description.max' => 'Il campo description deve avere al massimo 2000 caratteri',
        ];
    }
}
