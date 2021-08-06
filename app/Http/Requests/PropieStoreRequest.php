<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropieStoreRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'document' => 'required|numeric',
            'fName' => 'required|max:200',
            'sName' => 'required|max:200',
            'lNames' => 'required|max:400',
            'dir' => 'required', 
            'phone' => 'required|numeric|min:7', 
            'city' => 'required', 
        ];
    }

    public function messages() {
        return [
            'document.required' => 'El campo ' . __('formPropeConduc.doc.label') . ' es requerido.',
            'document.numeric' => 'El campo ' . __('formPropeConduc.doc.label') . ' debe ser solo valores numericos.',
            'fName.required' => 'El campo ' . __('formPropeConduc.firstName.label') . ' es requerido.',
            'fName.max' => 'El campo ' . __('formPropeConduc.firstName.label') . ' pasa del máximo caracteres permitidos.',
            'sName.required' => 'El campo ' . __('formPropeConduc.secondName.label') . ' es requerido.',
            'sName.max' => 'El campo ' . __('formPropeConduc.secondName.label') . ' pasa del máximo caracteres permitidos.',
            'lNames.required' => 'El campo ' . __('formPropeConduc.lastNames.label') . ' es requerido.',
            'lNames.max' => 'El campo ' . __('formPropeConduc.lastNames.label') . ' pasa del máximo caracteres permitidos.',
            'dir.required' => 'El campo ' . __('formPropeConduc.dir.label') . ' es requerido.',
            'phone.required' => 'El campo ' . __('formPropeConduc.phone.label') . ' es requerido.',
            'phone.numeric' => 'El campo ' . __('formPropeConduc.phone.label') . ' debe ser solo valores numericos.',
            'phone.max' => 'El campo ' . __('formPropeConduc.phone.label') . ' tiene que tener un minimo de 7 numeros.',
            'city.required' => 'El campo ' . __('formPropeConduc.city.label') . ' es requerido.',
        ];
    }

    public function attributes() {
        return [
                //
        ];
    }

}
