@extends('admin')
@section('title', 'Master Data')
@section('content')


<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <form action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

        </form>
    </div>
</div>
<div class="table-responsive">
    <table id="master-data" class="table table-striped table-hover" style="width:100%">
        <thead class="bg-base text-light">
            <tr>
                <th>Kelompok Data</th>
                <th>ID Data </th>
                <th>Nama Data</th>
                <th>Catatan</th>
                <th>Di Ubah Oleh</th>
                <th>Di Ubah Kapan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $data as $d )
            <tr>
                <td>{{ $d->group_name ?? ''}}</td>
                <td>{{ $d->data_id ?? ''}}</td>
                <td>{{ $d->data_name ?? ''}}</td>
                <td>{{ $d->note ?? ''}}</td>
                <td>{{ $d->updated_by ?? ''}}</td>
                <td>{{ $d->updated_date ?? '' }}</td>
                <td>
                    <button type="button" class="btn btn-warning" title="Ubah"><i class="bi bi-pencil"></i> </button>
                    <button type="button" class="btn btn-danger" title="Hapus"><i class="bi bi-trash"></i> </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="btn-add" class="d-none">
    <button class="btn btn-primary bg-base" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" type="button"><i class="bi bi-plus"></i> Tambah Data</button>
</div>
@endsection
@section('js')
<script>
    new DataTable('#master-data', {
        fixedHeader: true,
        paging: false,
        scrollCollapse: true,
        scrollX: true,
        scrollY: 350,
        bLengthChange: true,
        bInfo: false,
        "initComplete": function(settings, json) {
            $('#master-data_wrapper').children().children().first().append($('#btn-add').html())
            $('#master-data_wrapper').find('#btn-add').removeClass('d-none')
        }
    });
</script>
@endsection