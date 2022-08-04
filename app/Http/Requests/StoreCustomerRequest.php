<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'object'=>'required|integer|unique:customers,object',
            'name'=>'required|string|max:255',
            'aadress'=>'required|string|max:255',
            'contract'=>'nullable|string|max:255',
            'notes'=>'nullable|string|max:1255',
            'keychain'=>'nullable|string|max:15',
            'gate'=>'nullable|string|max:15',
            'pict1'=>'nullable|image:jpg, jpeg, png, bmp, gif|max:20000',
            'pict2'=>'nullable|image:jpg, jpeg, png, bmp, gif|max:20000',
            'pict3'=>'nullable|image:jpg, jpeg, png, bmp, gif|max:20000',
            'longitude'=>'nullable|string|max:255',
            'latitude'=>'nullable|string|max:255',
            'paid'=>'nullable|boolean',
            'district_id'=>'required|integer',
            'city_id'=>'required|integer',
            'category_id'=>'required|integer',
            'floor'=>'nullable|string|max:55',
            'color'=>'nullable|string|max:255',
            'entrance'=>'nullable|string|max:55',
            'door'=>'nullable|string|max:255',
            'windows'=>'nullable|string|max:55',
            'balcony'=>'nullable|string|max:55',
            'utility'=>'nullable|string|max:55',
            'code'=>'nullable|string|max:255',
            'fence'=>'nullable|boolean',
            'dog'=>'nullable|boolean',
            'scheme1'=>'nullable|image:jpg, jpeg, png, bmp, gif|max:20000',
            'scheme2'=>'nullable|image:jpg, jpeg, png, bmp, gif|max:20000',
            'scheme3'=>'nullable|image:jpg, jpeg, png, bmp, gif|max:20000',
            'document'=>'nullable|mimes:xlsx,docx,pdf',
            'active'=>'nullable|boolean',
        ];
    }
}
