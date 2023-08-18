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
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" required value="{{ $data->nama ?? '' }}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="umur"><span class="text-danger">*</span> Umur</label>
                            <input type="text" name="umur" id="umur" class="form-control" placeholder="Masukan Umur" required value="{{ $data->umur ?? '' }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Status Pernikahan">Status Pernikahan</label>
                            <select name="status_pernikahan" id="status_pernikahan" class="form-control">
                                <option value="" class="text-secondary">Pilih Status Pernikahan</option>
                                @foreach( $dataSP as $dsp)
                                <option value="{{ $dsp->data_id }}" {{ ( ($data->status_pernikahan ?? '') == $dsp->data_id ? 'selected' : ''  ) }} class="text-dark">{{ $dsp->data_name }}</option>
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
                                <option value="{{ $djk->data_id }}" {{ ( ($data->jenis_kelamin ?? '') == $djk->data_id ? 'selected' : ''  ) }} class="text-dark">{{ $djk->data_name }}</option>
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
                                <option value="{{ $da->data_id }}" {{ ( ($data->agama ?? '') == $da->data_id ? 'selected' : ''  ) }} class="text-dark">{{ $da->data_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Tanggal Masuk"><span class="text-danger">*</span> Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" required value="{{ $data->tanggal_masuk ?? '' }}">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="Pendidikan">Pendidikan</label>
                    <select name="pendidikan" id="pendidikan" class="form-control">
                        <option value="" class="text-secondary">Pilih Pendidikan</option>
                        @foreach( $dataPendidikan as $dp)
                        <option value="{{ $dp->data_id }}" {{ ( ($data->pendidikan ?? '') == $dp->data_id ? 'selected' : ''  ) }} class="text-dark">{{ $dp->data_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Asal"><span class="text-danger">*</span> Asal</label><br>
                    <select name="asal" id="asal" class="select-search form-control" required>
                        <option value="" class="text-secondary">Pilih Asal</option>
                        @foreach( $dataKota as $dk)
                        <option value="{{ $dk->id }}" {{ ( ($data->asal ?? '') == $dk->id ? 'selected' : ''  ) }} class="text-dark">{{ $dk->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Domisili"><span class="text-danger">*</span> Domisili</label>
                    <select name="domisili" id="domisili" class="select-search form-control" required>
                        <option value="" class="text-secondary">Pilih Domisili</option>
                        @foreach( $dataKota as $dk)
                        <option value="{{ $dk->id }}" {{ ( ($data->domisili ?? '') == $dk->id ? 'selected' : ''  ) }} class="text-dark">{{ $dk->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Alamat Domisili"><span class="text-danger">*</span> Alamat Domisili</label><br>
                    <textarea name="alamat" id="alamat" class="form-control" required>{{ $data->alamat ?? '' }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <?php
    $selectedKedoya = (str_replace("Admin ", "", auth()->user()->fullname) == "Kedoya" ? "selected" : "");
    $selectedCengkareng = ((str_replace("Admin ", "", auth()->user()->fullname)) == "Cengkareng" ? "selected" : "");
    $defaultFoto = ENV('ASSET_URL') . "/assets/compro/img/user.png";
    $default = "";
    $default = (($data->foto ?? '') == '' ? $defaultFoto : $default);
    if ($data) {
        $default = ($data->sumber == 'Input' ? ENV('ASSET_URL') . "/uploads/foto_WBS/" .  ($data->foto ?? '') : 'https://drive.google.com/uc?export=view&id=' .  ($data->foto ?? ''));
    }
    ?>
    <h5 class="font-weight-bold"> <u>Informasi Detail</u> </h5>
    <div class="card card-body">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="nama"><span class="text-danger">*</span> Lokasi</label>
                    <select name="lokasi" id="lokasi" class="form-control" required>
                        <option value="">Pilih Lokasi</option>
                        <option value="Kedoya" {{ $selectedKedoya }}>PSBI Bangun Daya 1 Kedoya</option>
                        <option value="Cengkareng" {{ $selectedCengkareng }}>PSBI Bangun Daya 1 Cengkareng</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="nama"><span class="text-danger">*</span> Klasifikasi</label>
                    <select name="grup_klasifikasi" id="grup_klasifikasi" class="form-control" required>
                        <option value="">Pilih Klasifikasi</option>
                        <option value=""></option>
                    </select>
                </div> -->

                <div class="form-group">
                    <label for="Klasifikasi"><span class="text-danger">*</span>Klasifikasi</label>
                    <input type="text" class="form-control" value="{{ $data->klasifikasi ?? '' }}" id="klasifikasi" name="klasifikasi" required>
                </div>

                <div class="form-group">
                    <label for="Hasil Jangkauan"><span class="text-danger">*</span> Hasil Jangkauan</label>
                    <select name="hasil_jangkauan" id="hasil_jangkauan" class="form-control" required>
                        <option value="" class="text-secondary">Pilih Hasil Jangkauan</option>
                        @foreach( $dataHJ as $dhj)
                        <option value="{{ $dhj->data_id }}" {{ ( ($data->hasil_jangkauan ?? '') == $dhj->data_id ? 'selected' : ''  ) }} class="text-dark">{{ $dhj->data_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Status"><span class="text-danger">*</span> Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="" class="text-secondary">Pilih Status</option>
                        @foreach( $dataStatus as $ds)
                        <option value="{{ $ds->data_id }}" {{ ( ($data->status ?? '') == $ds->data_id ? 'selected' : ''  ) }} class="text-dark">{{ $ds->data_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Photo">{!! ($id == 0 ? '<span class="text-danger">*</span>' : '') !!} Photo</label>
                    <input type="file" class="form-control" name="imgFile" id="imgFile" {{ ($id == 0 ? 'required' : '') }} onchange="readURL(this)">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="Operator">Operator</label>
                    <input type="text" class="form-control" id="updated_by" name="updated_by" value="{{ auth()->user()->fullname }}" readonly>
                </div>

                <div class="form-group">
                    <label for="Link Berkas">Link Berkas</label>
                    <input type="text" class="form-control" value="{{ $data->link_berkas ?? '' }}" id="link_berkas" name="link_berkas">
                </div>

                <div class="form-group">
                    <label for="Keterangan"><span class="text-danger">*</span> Keterangan</label><br>
                    <textarea name="keterangan" id="keterangan" class="form-control" rows="5">{{ $data->keterangan ?? '' }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div id="preview">
                            <img id="viewImg" src="{{ $default }}" alt="Upload Preview" style="width: 97.5px; height:130px;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-right mt-3 pb-0 mb-0">
                            <a href="{{ route('wbs_data') }}" class="btn btn-sm btn-secondary" type="button"><i class="bi bi-arrow-left"></i> Kembali</a>
                            <button class="btn btn-sm btn-success" type="submit"><i class="bi bi-save"></i> Simpan Data</button>
                        </p>
                    </div>
                </div>

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

    function readURL(input) {
        var defaults = "{{ $default }}";
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#viewImg')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            $('#viewImg').attr('src', defaults);
        }
    }
</script>
@endsection