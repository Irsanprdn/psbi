@extends('admin')
@section('title', 'Data WBS')
@section('content')

<div class="table-responsive">

    @if (session('error'))
    <div class="alert my-3 alert-danger">{{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (session('success'))
    <div class="alert my-3 alert-success">{{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <table id="wbs-data" class="table table-bordered table-striped table-hover" style="width:100%">
        <thead class="bg-base text-light">
            <tr>
                <th class="text-capitalize"> no </th>
                <th class="text-capitalize"> foto </th>
                <th class="text-capitalize"> nama </th>
                <th class="text-capitalize"> jenis kelamin </th>
                <th class="text-capitalize"> umur </th>
                <th class="text-capitalize"> status </th>
                <th class="text-capitalize"> pendidikan </th>
                <th class="text-capitalize"> agama </th>
                <th class="text-capitalize"> tanggal masuk </th>
                <th class="text-capitalize"> asal </th>
                <th class="text-capitalize"> domisili </th>
                <th class="text-capitalize"> alamat </th>
                <th class="text-capitalize"> hasil jangkauan </th>
                <th class="text-capitalize"> status pernikahan </th>
                <th class="text-capitalize"> klasifikasi </th>
                <th class="text-capitalize"> lokasi </th>
                <th class="text-capitalize"> sumber </th>
                <th class="text-capitalize"> updated by </th>
                <th class="text-capitalize"> updated date </th>
                <th class="text-capitalize"> aksi </th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            ?>
            @foreach ($data as $d)
            <?php
                $default = ENV('ASSET_URL') . "/assets/compro/img/user.png";
            $foto = "";
            if ($d->sumber == 'Input') {
                $foto = ENV('ASSET_URL') . "/uploads/foto_WBS/" .  ($d->foto ?? '');
                $foto = ( ($d->foto ?? '') == '' ? $default : $foto);
            } else {
                $foto = 'https://drive.google.com/uc?export=view&id=' .  ($d->foto ?? '');
                $foto = ( ($d->foto ?? '') == '' ? $default : $foto);
            }
            ?>
            <tr>
                <td>{{ $no++ }}</td>
                <td align="center">
                    <img src="{{ $foto }}" alt="Foto {{ $d->nama }}" style="width: 70%;">
                </td>
                <td> {{$d->nama}} </td>
                <td> {{$d->jkNm}} </td>
                <td> {{$d->umur}} </td>
                <td> {{$d->statusNm}} </td>
                <td> {{$d->pendidikanNm}} </td>
                <td> {{$d->agamaNm}} </td>
                <td> {{$d->tanggal_masuk}} </td>
                <td> {{$d->asalNm}} </td>
                <td> {{$d->domisiliNm}} </td>
                <td> {{$d->alamat}} </td>
                <td> {{$d->hjNm}} </td>
                <td> {{$d->spNm}} </td>
                <td> {{$d->klasifikasi}} </td>
                <td> {{$d->lokasi}} </td>
                <td> {{$d->sumber}} </td>
                <td> {{$d->updated_by}} </td>
                <td> {{$d->updated_date}} </td>
                <td>
                    <a href="{{ route('wbs_data.input', $d->nomor_panti) }}" type="button" class="btn btn-sm btn-warning mx-1" title="Ubah"><i class="bi bi-pencil"></i> </a>
                    <a href="{{ route('wbs_data.delete', $d->nomor_panti) }}" type="button" class="btn btn-sm btn-danger mx-1" title="Hapus"><i class="bi bi-trash"></i> </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="btn-add" class="d-none">
    <a href="{{ route('wbs_data.input', 0) }}" class="btn btn-sm btn-primary bg-base btn-adds" type="button"><i class="bi bi-plus"></i> Tambah Data</a>

    <button class="btn btn-sm btn-primary bg-base" data-toggle="modal" data-target="#importModal"><i class="bi bi-upload"></i> Import Data</button>

    <a href="{{ asset('assets') }}/templet.xlsx" class="btn btn-sm btn-primary bg-base"><i class="bi bi-download"></i> Download Template</a>
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
    var height = $('#getHeight').height()
    new DataTable('#wbs-data', {
        fixedHeader: true,
        paging: false,
        scrollCollapse: true,
        scrollX: true,
        scrollY: height - 125,
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