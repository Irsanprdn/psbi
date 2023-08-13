@extends('admin')
@section('title', 'Tambah Data WBS')
@section('content')
<form action="{{ route('wbs_data.post',$id) }}" method="POST" id="formPost">
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
                    <label for="Asal"><span class="text-danger">*</span> Asal</label>
                    <select name="asal" id="asal" class="form-control" required>
                        <option value="" class="text-secondary">Pilih Asal</option>
                        @foreach( $dataKota as $dk)
                        <option value="{{ $dk->id }}" class="text-dark">{{ $dk->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Domisili"><span class="text-danger">*</span> Domisili</label>
                    <select name="domisili" id="domisili" class="form-control" required>
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
                    <label for="Asal"><span class="text-danger">*</span> Asal</label>
                    <select name="asal" id="asal" class="form-control" required>
                        <option value="" class="text-secondary">Pilih Asal</option>
                        @foreach( $dataKota as $dk)
                        <option value="{{ $dk->id }}" class="text-dark">{{ $dk->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Domisili"><span class="text-danger">*</span> Domisili</label>
                    <select name="domisili" id="domisili" class="form-control" required>
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
                <p class="text-right mt-3 pb-0 mb-0">
                    <button class="btn btn-sm btn-secondary" type="button" onclick="resetForm()"><i class="bi bi-arrow-left"></i> Kembali</button>
                    <button class="btn btn-sm btn-success" type="submit"><i class="bi bi-save"></i> Simpan Data</button>
                </p>
            </div>
        </div>
    </div>

</form>
@endsection
@section('js')

@endsection