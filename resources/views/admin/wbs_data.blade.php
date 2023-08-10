@extends('admin')
@section('title', 'Data WBS')
@section('content')

<div class="table-responsive">

    @if (session('error'))
    <div class="alert my-3 alert-danger">{{ session('error') }}</div>
    @endif
    @if (session('success'))
    <div class="alert my-3 alert-success">{{ session('success') }}</div>
    @endif

    <table id="wbs-data" class="table table-bordered table-striped table-hover" style="width:100%">
        <thead class="bg-base text-light">
            <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tgl. masuk</th>
                <th>Asal</th>
                <th>Domisili</th>
                <th>Alamat</th>
                <th>Klasifikasi</th>
                <th>Hasil Jangkauan</th>
                <th>Lokasi</th>
                <th>Sumber</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>

            @foreach( $data as $d )
            @php
            
            $default =  ENV('ASSET_URL')."/assets/compro/img/user.png";
            $foto = 'https://drive.google.com/uc?export=view&id='. $d->foto;
            $foto = ( $d->foto == '' ? $default : $foto  );
            @endphp
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    <img src="{{ $foto }}" alt="Foto {{ $d->nama }} )" style="width:50px; height:60px">
                </td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->umur }}</td>
                <td>{{ $d->tanggal_masuk }}</td>
                <td>{{ $d->asal }}</td>
                <td>{{ $d->domisili }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->klasifikasi }}</td>
                <td>{{ $d->hasil_jangkauan }}</td>
                <td>{{ $d->lokasi }}</td>
                <td>{{ $d->sumber }}</td>
                <td>{{ $d->status }}</td>
                <td>
                    <a href="#" type="button" class="btn btn-sm btn-warning mx-1" title="Ubah"><i class="bi bi-pencil"></i> </a>
                    <a href="#" type="button" class="btn btn-sm btn-danger mx-1" title="Hapus"><i class="bi bi-trash"></i> </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="btn-add" class="d-none">
    <button class="btn btn-sm btn-primary bg-base btn-adds" type="button"><i class="bi bi-plus"></i> Tambah Data</button>

    <button class="btn btn-sm btn-primary bg-base" data-toggle="modal" data-target="#importModal"><i class="bi bi-upload"></i> Import Data</button>

    <a href="{{ asset('assets') }}/template.xlsx" class="btn btn-sm btn-primary bg-base"><i class="bi bi-download"></i> Download Template</a>
</div>


<!-- Modal -->
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('wbs_data.import') }}" enctype="multipart/form-data" method="POST" id="formImport"> @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Data WBS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Masukan file harus berformat csv,xls,xlsx</label>
                    <input type="file" class="form-control" required name="importData" id="importData">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    new DataTable('#wbs-data', {
        fixedHeader: true,
        paging: false,
        scrollCollapse: true,
        scrollX: true,
        scrollY: 350,
        bLengthChange: true,
        bInfo: false,
        "initComplete": function(settings, json) {
            $('#wbs-data_wrapper').children().children().first().append($('#btn-add').html())
            $('#wbs-data_wrapper').find('#btn-add').removeClass('d-none')
            $('#wbs-data_wrapper').children().children().children().attr('id', 'btn-tambah')
        }
    });
</script>
@endsection