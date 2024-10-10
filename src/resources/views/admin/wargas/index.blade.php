@extends('layouts.admin')
@section('content')
@can('warga_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.wargas.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.warga.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.warga.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Product">
                <thead>
                    <tr>
                        <th width="10"></th>                
                        <th>{{ trans('ID') }}</th>
                        <th>{{ trans('Nama') }}</th>
                        <th>{{ trans('Nik') }}</th>
                        <th>{{ trans('Alamat') }}</th>                    
                        <th>{{ trans('Tanggal Lahir') }}</th>
                        <th>{{ trans('Umur') }}</th>
                        <th>{{ trans('Pekerjaan') }}</th>                        
                        <th>{{ trans('Jenis Kelamin') }}</th>
                        <th>{{ trans('Status Perkawinan') }}</th>
                        <th>{{ trans('Agama') }}</th>
                        <th>{{ trans('Status Kewarganegaraan') }}</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wargas as $key => $warga)
                        <tr data-entry-id="{{ $warga->id }}">
                            <td></td>
                            <td>{{ $warga->id ?? '' }}</td>
                            <td>{{ $warga->nama_warga ?? '' }}</td>
                            <td>{{ $warga->nik ?? '' }}</td>
                            <td>{{ $warga->alamat ?? '' }}</td>
                            <td>{{ \Carbon\Carbon::parse($warga->tanggal_lahir)->format('d-m-Y') ?? '' }}</td>
                            <td>{{ $warga->umur ?? '' }}</td>
                            <td>{{ $warga->pekerjaan ?? '' }}</td>
                            <td>{{ $warga->jenis_kelamin ?? '' }}</td>
                            <td>{{ $warga->status_perkawinan ?? '' }}</td>
                            <td>{{ $warga->agama ?? '' }}</td>
                            <td>{{ $warga->status_kewarganegaraan ?? '' }}</td>
                            <td>
                                @can('warga_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.wargas.show', $warga->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('warga_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.wargas.edit', $warga->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('warga_delete')
                                    <button class="btn btn-xs btn-danger delete-button" data-id="{{ $warga->id }}">
                                        {{ trans('global.delete') }}
                                    </button>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@parent
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Add SweetAlert2 -->
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('warga_delete')
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.wargas.massDestroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}')
                    return
                }

                if (confirm('{{ trans('global.areYouSure') }}')) {
                    $.ajax({
                        headers: {'x-csrf-token': _token},
                        method: 'POST',
                        url: config.url,
                        data: { ids: ids, _method: 'DELETE' }
                    })
                    .done(function () { location.reload() })
                }
            }
        }
        dtButtons.push(deleteButton)
        @endcan

        // SweetAlert for individual delete buttons
        $('.delete-button').on('click', function (event) {
            event.preventDefault();
            const id = $(this).data('id');

            Swal.fire({
                title: 'yakinnnnn????',
                text: 'apakah yakin pengen ngentod',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ trans('global.yesDelete') }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Create a form and submit it
                    const form = $('<form>', {
                        action: "{{ route('admin.wargas.destroy', '') }}/" + id,
                        method: 'POST',
                    });
                    const csrfToken = '{{ csrf_token() }}';
                    form.append($('<input>', { type: 'hidden', name: '_method', value: 'DELETE' }));
                    form.append($('<input>', { type: 'hidden', name: '_token', value: csrfToken }));
                    $('body').append(form);
                    form.submit(); // Submit the form for deletion
                }
            });
        });

        $.extend(true, $.fn.dataTable.defaults, {
            orderCellsTop: true,
            order: [[ 1, 'desc' ]],
            pageLength: 100,
        });
        let table = $('.datatable-Product:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })
</script>
@endsection

