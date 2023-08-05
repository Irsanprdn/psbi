@extends('admin')
@section('title', 'Data WBS')
@section('content')

<div class="row">
    <input type="text" class="form-control col-md mx-2" name="find" id="find">
    <select class="form-control col-md-2 mx-2">
        <option selected="">January</option>
        <option value="1">February</option>
        <option value="2">March</option>
        <option value="3">April</option>
    </select>
    <div class="col-md text-right">
        <button class="btn btn-primary bg-base"><i class="bi bi-download"></i> Import Data</button>

        <button class="btn btn-primary bg-base"><i class="bi bi-plus"></i> Tambah Data</button>
    </div>
</div>


<div class="table-responsive mt-5">
    <table class="table stylish-table no-wrap table-hover table-striped">
        <thead class="bg-base text-light"> 
            <tr>
                <th class="border-top-0 font-weight-bold">Nama</th>
                <th class="border-top-0 font-weight-bold">Umur</th>
                <th class="border-top-0 font-weight-bold">Tgl. masuk</th>
                <th class="border-top-0 font-weight-bold">Asal</th>
                <th class="border-top-0 font-weight-bold">Alamat</th>
                <th class="border-top-0 font-weight-bold">Klasifikasi</th>
                <th class="border-top-0 font-weight-bold">Hasil Jangkauan</th>
                <th class="border-top-0 font-weight-bold">Lokasi</th>
                <th class="border-top-0 font-weight-bold">Status</th>
                <th class="border-top-0 font-weight-bold">Photo</th>
                <th class="border-top-0 font-weight-bold">Aksi</th>
            </tr>
        </thead>
        <tbody style="height: 5vh;overflow: scroll;">
            <tr class="active">
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Umur</td>
                <td>Tgl. masuk</td>
                <td>Asal</td>
                <td>Alamat</td>
                <td>Klasifikasi</td>
                <td>Hasil Jangkauan</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td>Photo</td>
                <td>Aksi</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection