<?php

namespace App\Http\Requests;

use App\Models\Warga;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

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
                'max:255',
            ],
            'nik' => [
                'required',
                'string',
                'max:16',
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
                'required',
                'string',
                'max:255',
            ],
            'jenis_kelamin' => [
                'required',
                'string',
                'max:10',
            ],
            'status_perkawinan' => [
                'required',
                'string',
                'max:255',
            ],
            'agama' => [
                'required',
                'string',
                'max:50',
            ],
            'status_kewarganegaraan' => [
                'required',
                'string',
                'max:10',
            ],
        ];
    }
}
