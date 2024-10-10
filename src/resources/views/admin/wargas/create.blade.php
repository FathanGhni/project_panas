@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.warga.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.wargas.store") }}">
            @csrf

            <!-- Kolom Nama Warga -->
            <div class="form-group">
                <label for="nama_warga">{{ trans('Nama Warga') }}</label>
                <input class="form-control {{ $errors->has('nama_warga') ? 'is-invalid' : '' }}" type="text" name="nama_warga" id="nama_warga" value="{{ old('nama_warga', '') }}">
                @if($errors->has('nama_warga'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_warga') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom NIK -->
            <div class="form-group">
                <label for="nik">{{ trans('Nik') }}</label>
                <input class="form-control {{ $errors->has('nik') ? 'is-invalid' : '' }}" type="text" name="nik" id="nik" value="{{ old('nik', '') }}">
                @if($errors->has('nik'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nik') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Alamat -->
            <div class="form-group">
                <label for="alamat">{{ trans('Alamat') }}</label>
                <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat" id="alamat">{{ old('alamat', '') }}</textarea>
                @if($errors->has('alamat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Tanggal Lahir -->
            <div class="form-group">
                <label for="tanggal_lahir">{{ trans('Tanggal Lahir') }}</label>
                <input class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', '') }}">
                @if($errors->has('tanggal_lahir'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tanggal_lahir') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Umur -->
            <div class="form-group">
                <label for="umur">{{ trans('Umur') }}</label>
                <input class="form-control {{ $errors->has('umur') ? 'is-invalid' : '' }}" type="number" name="umur" id="umur" value="{{ old('umur', '') }}">
                @if($errors->has('umur'))
                    <div class="invalid-feedback">
                        {{ $errors->first('umur') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Pekerjaan -->
            <div class="form-group">
                <label for="pekerjaan">{{ trans('Pekerjaan') }}</label>
                <input class="form-control {{ $errors->has('pekerjaan') ? 'is-invalid' : '' }}" type="text" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan', '') }}">
                @if($errors->has('pekerjaan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pekerjaan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Jenis Kelamin -->
            <div class="form-group">
                <label for="jenis_kelamin">{{ trans('Jenis Kelamin') }}</label>
                <select class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="" disabled selected>{{ trans('global.pleaseSelect') }}</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @if($errors->has('jenis_kelamin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_kelamin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Status Perkawinan -->
            <div class="form-group">
                <label for="status_perkawinan">{{ trans('Status Perkawinan') }}</label>
                <select class="form-control {{ $errors->has('status_perkawinan') ? 'is-invalid' : '' }}" name="status_perkawinan" id="status_perkawinan">
                    <option value="" disabled selected>{{ trans('global.pleaseSelect') }}</option>
                    <option value="Belum Menikah" {{ old('status_perkawinan') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                    <option value="Menikah" {{ old('status_perkawinan') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                    <option value="Duda" {{ old('status_perkawinan') == 'Duda' ? 'selected' : '' }}>Duda</option>
                    <option value="Janda" {{ old('status_perkawinan') == 'Janda' ? 'selected' : '' }}>Janda</option>
                </select>
                @if($errors->has('status_perkawinan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status_perkawinan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Agama -->
            <div class="form-group">
                <label for="agama">{{ trans('Agama') }}</label>
                <input class="form-control {{ $errors->has('agama') ? 'is-invalid' : '' }}" type="text" name="agama" id="agama" value="{{ old('agama', '') }}">
                @if($errors->has('agama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <!-- Kolom Status Kewarganegaraan -->
            <div class="form-group">
                <label for="status_kewarganegaraan">{{ trans('Status Kewarganegaraan') }}</label>
                <select class="form-control {{ $errors->has('status_kewarganegaraan') ? 'is-invalid' : '' }}" name="status_kewarganegaraan" id="status_kewarganegaraan">
                    <option value="" disabled selected>{{ trans('global.pleaseSelect') }}</option>
                    <option value="WNI" {{ old('status_kewarganegaraan') == 'WNI' ? 'selected' : '' }}>WNI</option>
                    <option value="WNA" {{ old('status_kewarganegaraan') == 'WNA' ? 'selected' : '' }}>WNA</option>
                </select>
                @if($errors->has('status_kewarganegaraan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status_kewarganegaraan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
