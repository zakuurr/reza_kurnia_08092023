<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
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
            'pegawai_nama' => 'required|max:50',
            'pegawai_jabatan' => 'required|max:20',
            'pegawai_umur' => 'required',
            'pegawai_alamat' => 'required',
        ];
    }
}
