<?php

namespace App\Http\Requests;

use Gate;
use App\Models\Warga;
use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;

class StoreWargaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('warga_create');
    }

    public function rules()
    {
        return [
            'nama_warga' => [
                'required',
                'string',
            ],
            'nik' => [
                'required',
                'string',
            ],
            'alamat' => [
                'required',
                'string',
            ],
            'tanggal_lahir' => [
                'required',
                'date',
            ],
            'umur' => [
                'required',
                'integer',
            ],
            'pekerjaan' => [
                'nullable',
                'string',
            ],
            'jenis_kelamin' => [
                'required',
                'string',
            ],
            'status_perkawinan' => [
                'nullable',
                'string',
            ],
            'agama' => [
                'nullable',
                'string',
            ],
            'status_kewarganegaraan' => [
                'nullable',
                'string',
            ],

        ];
    }
}
