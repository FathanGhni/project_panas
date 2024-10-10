@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.data_warga.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.wargas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.id') }}
                        </th>
                        <td>
                            {{ $warga->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.image') }}
                        </th>
                        <td>
                            @if($warga->image)
                                <a href="{{ $warga->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $warga->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.nama_warga') }}
                        </th>
                        <td>
                            {{ $warga->nama_warga }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.nik') }}
                        </th>
                        <td>
                            {{ $warga->nik }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.alamat') }}
                        </th>
                        <td>
                            {{ $warga->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.tanggal_lahir') }}
                        </th>
                        <td>
                            {{ $warga->tanggal_lahir }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.umur') }}
                        </th>
                        <td>
                            {{ $warga->umur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.pekerjaan') }}
                        </th>
                        <td>
                            {{ $warga->pekerjaan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.jenis_kelamin') }}
                        </th>
                        <td>
                            {{ $warga->jenis_kelamin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.status_perkawinan') }}
                        </th>
                        <td>
                            {{ $warga->status_perkawinan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.agama') }}
                        </th>
                        <td>
                            {{ $warga->agama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.status_kewarganegaraan') }}
                        </th>
                        <td>
                            {{ $warga->status_kewarganegaraan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.data_warga.fields.created_at') }}
                        </th>
                        <td>
                            {{ $warga->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.wargas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
