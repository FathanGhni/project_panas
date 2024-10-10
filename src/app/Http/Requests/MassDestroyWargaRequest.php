<?php

namespace App\Http\Requests;

use App\Models\Warga;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWargaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('warga_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:wargas,id', // Memastikan setiap ID ada dalam tabel warga
        ];
    }
}
