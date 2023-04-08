<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class WisataPackageRequest extends FormRequest
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
            'judul' => 'required|max:255',
            'lokasi' => 'required|max:255', 'deskripsi' => 'required', 'makanan_khas' => 'required|max:255',
            'durasi' => 'required|max:255', 'type' => 'required|max:255', 'harga_masuk' => 'required|integer'
        ];
    }
}
