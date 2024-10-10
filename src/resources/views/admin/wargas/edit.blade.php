@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.data_warga.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.wargas.update", [$warga->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">

                        <label for="alamat">{{ trans('cruds.data_warga.fields.alamat') }}</label>
                <input class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" type="text" name="alamat" id="alamat" value="{{ old('alamat', $warga->alamat) }}">
                @if($errors->has('alamat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.alamat_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">{{ trans('cruds.data_warga.fields.tanggal_lahir') }}</label>
                <input class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $warga->tanggal_lahir) }}">
                @if($errors->has('tanggal_lahir'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tanggal_lahir') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.tanggal_lahir_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">{{ trans('cruds.data_warga.fields.jenis_kelamin') }}</label>
                <select class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">{{ trans('global.pleaseSelect') }}</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @if($errors->has('jenis_kelamin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_kelamin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.jenis_kelamin_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="status_perkawinan">{{ trans('cruds.data_warga.fields.status_perkawinan') }}</label>
                <select class="form-control {{ $errors->has('status_perkawinan') ? 'is-invalid' : '' }}" name="status_perkawinan" id="status_perkawinan">
                    <option value="">{{ trans('global.pleaseSelect') }}</option>
                    <option value="Belum Menikah" {{ old('status_perkawinan', $warga->status_perkawinan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                    <option value="Menikah" {{ old('status_perkawinan', $warga->status_perkawinan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                    <option value="Cerai" {{ old('status_perkawinan', $warga->status_perkawinan) == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                </select>
                @if($errors->has('status_perkawinan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status_perkawinan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.status_perkawinan_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="agama">{{ trans('cruds.data_warga.fields.agama') }}</label>
                <input class="form-control {{ $errors->has('agama') ? 'is-invalid' : '' }}" type="text" name="agama" id="agama" value="{{ old('agama', $warga->agama) }}">
                @if($errors->has('agama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.agama_helper') }}</span>
            </div>

                <label for="image">{{ trans('cruds.data_warga.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nama_warga">{{ trans('cruds.data_warga.fields.nama_warga') }}</label>
                <input class="form-control {{ $errors->has('nama_warga') ? 'is-invalid' : '' }}" type="text" name="nama_warga" id="nama_warga" value="{{ old('nama_warga', $warga->nama_warga) }}">
                @if($errors->has('nama_warga'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_warga') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.nama_warga_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nik">{{ trans('cruds.data_warga.fields.nik') }}</label>
                <input class="form-control {{ $errors->has('nik') ? 'is-invalid' : '' }}" type="text" name="nik" id="nik" value="{{ old('nik', $warga->nik) }}">
                @if($errors->has('nik'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nik') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.nik_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="umur">{{ trans('cruds.data_warga.fields.umur') }}</label>
                <input class="form-control {{ $errors->has('umur') ? 'is-invalid' : '' }}" type="number" name="umur" id="umur" value="{{ old('umur', $warga->umur) }}" step="0.01">
                @if($errors->has('umur'))
                    <div class="invalid-feedback">
                        {{ $errors->first('umur') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.umur_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pekerjaan">{{ trans('cruds.data_warga.fields.pekerjaan') }}</label>
                <select class="form-control {{ $errors->has('pekerjaan') ? 'is-invalid' : '' }}" name="pekerjaan" id="pekerjaan">
                    @foreach($jurusans as $id => $nama_jurusan)
                        <option value="{{ $id }}" {{ old('pekerjaan', $warga->pekerjaan) == $id ? 'selected' : '' }}>{{ $nama_jurusan }}</option>
                    @endforeach
                </select>
                @if($errors->has('pekerjaan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pekerjaan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.pekerjaan_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.data_warga.fields.status_kewarganegaraan') }}</label>
                <select class="form-control {{ $errors->has('status_kewarganegaraan') ? 'is-invalid' : '' }}" name="status_kewarganegaraan" id="status_kewarganegaraan">
                    <option value disabled {{ old('status_kewarganegaraan', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Warga::STATUS as $key => $label)
                        <option value="{{ $key }}" {{ old('status_kewarganegaraan', $warga->status_kewarganegaraan) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status_kewarganegaraan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status_kewarganegaraan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.data_warga.fields.status_kewarganegaraan_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.wargas.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($warga) && $warga->image)
      var file = {!! json_encode($warga->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection
