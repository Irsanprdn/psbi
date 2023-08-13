@extends('admin')
@section('title', 'Tambah Data WBS')
@section('content')
<form action="{{ route('wbs_data.post',$id) }}" method="POST" enctype="multipart/form-data" id="formPost">
    @csrf
    <h5 class="font-weight-bold"> <u>Informasi Pribadi</u> </h5>
    <div class="card card-body">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama"><span class="text-danger">*</span> Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="umur"><span class="text-danger">*</span> Umur</label>
                            <input type="text" name="umur" id="umur" class="form-control" placeholder="Masukan Umur" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Status Pernikahan">Status Pernikahan</label>
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control">
                                <option value="" class="text-secondary">Pilih Status Pernikahan</option>
                                @foreach( $dataSP as $dsp)
                                <option value="{{ $dsp->data_id }}" class="text-dark">{{ $dsp->data_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Jenis Kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="" class="text-secondary">Pilih Jenis Kelamin</option>
                                @foreach( $dataJK as $djk)
                                <option value="{{ $djk->data_id }}" class="text-dark">{{ $djk->data_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Agama">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="" class="text-secondary">Pilih Agama</option>
                                @foreach( $dataAgama as $da)
                                <option value="{{ $da->data_id }}" class="text-dark">{{ $da->data_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Tanggal Masuk"><span class="text-danger">*</span> Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" required>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="Pendidikan">Pendidikan</label>
                    <select name="pendidikan" id="pendidikan" class="form-control">
                        <option value="" class="text-secondary">Pilih Pendidikan</option>
                        @foreach( $dataPendidikan as $dp)
                        <option value="{{ $dp->data_id }}" class="text-dark">{{ $dp->data_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Asal"><span class="text-danger">*</span> Asal</label><br>
                    <select name="asal" id="asal" class="select-search form-control" required>
                        <option value="" class="text-secondary">Pilih Asal</option>
                        @foreach( $dataKota as $dk)
                        <option value="{{ $dk->id }}" class="text-dark">{{ $dk->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Domisili"><span class="text-danger">*</span> Domisili</label>
                    <select name="domisili" id="domisili" class="select-search form-control" required>
                        <option value="" class="text-secondary">Pilih Domisili</option>
                        @foreach( $dataKota as $dk)
                        <option value="{{ $dk->id }}" class="text-dark">{{ $dk->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Alamat Domisili"><span class="text-danger">*</span> Alamat Domisili</label><br>
                    <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                </div>
            </div>
        </div>
    </div>

    <h5 class="font-weight-bold"> <u>Informasi Detail</u> </h5>
    <div class="card card-body">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama"><span class="text-danger">*</span> Lokasi</label>
                    <select name="lokasi" id="lokasi" class="form-control" required>
                        <option value="">Pilih Lokasi</option>
                        <option value="Kedoya">PSBI Bangun Daya 1 Kedoya</option>
                        <option value="Cengkareng">PSBI Bangun Daya 1 Cengkareng</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama"><span class="text-danger">*</span> Klasifikasi</label>
                    <select name="klasifikasi" id="klasifikasi" class="form-control" required>
                        <option value="">Pilih Klasifikasi</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Status"><span class="text-danger">*</span> Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="" class="text-secondary">Pilih Status</option>
                        @foreach( $dataStatus as $ds)
                        <option value="{{ $ds->data_id }}" class="text-dark">{{ $ds->data_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Photo"><span class="text-danger">*</span> Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo" required>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="Operator">Operator</label>
                    <input type="text" class="form-control" id="operator" name="operator">
                </div>

                <div class="form-group">
                    <label for="Link Berkas">Link Berkas</label>
                    <input type="text" class="form-control" id="link_berkas" name="link_berkas">
                </div>
               
                <div class="form-group">
                    <label for="Keterangan"><span class="text-danger">*</span> Keterangan</label><br>
                    <textarea name="keterangan" id="keterangan" class="form-control" rows="4"></textarea>
                </div>
                <p class="text-right mt-3 pb-0 mb-0">
                    <a href="{{ route('wbs_data') }}" class="btn btn-sm btn-secondary" type="button" ><i class="bi bi-arrow-left"></i> Kembali</a>
                    <button class="btn btn-sm btn-success" type="submit"><i class="bi bi-save"></i> Simpan Data</button>
                </p>
            </div>
        </div>
    </div>

</form>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('.select-search').select2();
    });
</script>
@endsection