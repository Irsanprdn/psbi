@extends('admin')
@section('title', 'Home')
@section('content')
<div class="row">
    @php
    $default = ENV('ASSET_URL') . "/assets/compro/img/slide.png";
    @endphp
    @foreach( $data as $d )
    @php
    $default = ($d->slide == '' ? $default : ENV('ASSET_URL') . "/uploads/sliders/" . $d->slide);
    @endphp
    <div class="col-md-4 px-0 mb-3">
        <div class="content">
            <div>
                <span class="bg-base text-light" style="position: absolute;  padding:4px 8px;">{{ $d->idx }}</span>
                <span class="bg-base text-light" style="position: absolute; right:0px; padding:3px 20px;">{{ $d->status }}</span>
                <div class="content-overlay"></div>
                <img class="content-image" src="{{ asset('assets') }}/uplods/sliders/{{ $d->slide }}" alt="">
                <div class="content-details fadeIn-bottom">
                    <a href="javascript:void();" data-id="{{ $d->home_id }}">
                        <h5 class="content-title"><i class="bi bi-pencil"></i> Ubah Data</h5>
                    </a>
                    <a href="javascript:void();" data-id="{{ $d->home_id }}">
                        <h5 class="content-title"><i class="bi bi-trash"></i> Hapus Data</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- <div class="col-md-4 px-0 mb-3">
        <div class="content">
            <div>
                <span class="bg-base text-light" style="position: absolute;  padding:4px 8px;">2</span>
                <span class="bg-light text-dark" style="position: absolute; right:0px; padding:3px 20px;">Draft</span>
                <div class="content-overlay"></div>
                <img class="content-image" src="{{ asset('assets') }}/compro/img/slider/slider1.jpg" alt="">
                <div class="content-details fadeIn-bottom">
                    <a href="#123">
                        <h5 class="content-title"><i class="bi bi-pencil"></i> Ubah Data</h5>
                    </a>
                    <a href="#1234">
                        <h5 class="content-title"><i class="bi bi-trash"></i> Hapus Data</h5>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-md-1 px-0">
        <div class="content">
            <div class="align-middle-content">
                <a href="javascript:void();" class="raise fill" data-toggle="modal" data-target="#addSlider">
                    <h1>
                        <i class="bi bi-plus-circle text-secondary"></i>
                    </h1>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="addSliderLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('home.post') }}" enctype="multipart/form-data" method="POST" id="formAddSlider"> @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addSliderLabel">Form Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Masukan file harus berformat jpg,jpeg,png</label>
                    <input type="file" class="form-control d-none" required name="imgFile" id="imgFile" onchange="readURL(this)">
                    <div id="preview" class="text-center">
                        <img id="viewImg" src="{{ $default }}" alt="Upload Preview" onclick="openFormFile()" style="width: 90%;">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Masukan urutan</label>
                            <input type="text" class="form-control" required name="idx" id="idx">
                        </div>
                        <div class="col-md-6">
                            <label for="">Masukan status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Draft">Draft</option>
                                <option value="Publish">Publish</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
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

    function openFormFile() {
        $('#imgFile').click();
    }
</script>
@endsection