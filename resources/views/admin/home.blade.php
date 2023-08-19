@extends('admin')
@section('title', 'Home')
@section('content')
<div class="row">
    @php
    $defaultFoto = ENV('ASSET_URL') . "/assets/compro/img/slide.png";
    $default = "";
    @endphp
    @foreach( $data as $d )
    @php
    $default = ($d->slide == '' ? $defaultFoto : ENV('ASSET_URL') . "/uploads/slider/" . $d->slide);
    @endphp
    <div class="col-md-4 px-0 mb-3">
        <div class="content">
            <span class="bg-base text-light" style="position: absolute;  padding:4px 8px;">{{ $d->idx }}</span>
            <span class="bg-base text-light" style="position: absolute; right:0px; padding:3px 20px;">{{ $d->status }}</span>
            <div class="content-overlay"></div>
            <img class="content-image" src="{{ $default }}" alt="Img Slider" style="width: 325px;height:126px;">
            <div class="content-details fadeIn-bottom">
                <a href="javascript:void();" data-id="{{ $d->home_id }}" data-toggle="modal" data-target="#addSlider{{ $d->home_id }}">
                    <h5 class="content-title"><i class="bi bi-pencil"></i> Ubah Data</h5>
                </a>
                <a href="{{ route('home.delete', $d->home_id ) }}">
                    <h5 class="content-title"><i class="bi bi-trash"></i> Hapus Data</h5>
                </a>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addSlider{{ $d->home_id }}" tabindex="-1" role="dialog" aria-labelledby="addSliderLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('home.post', $d->home_id ) }}" enctype="multipart/form-data" method="POST" id="formAddSlider"> @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSliderLabel">Form Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="">Masukan file harus berformat jpg,jpeg,png Max Size( 4 mb )</label>
                        <input type="file" class="form-control d-none" name="imgFile" id="imgFile" onchange="readURL(this)">
                        <div id="preview" class="text-center">
                            <img id="viewImg" src="{{ $default }}" alt="Upload Preview" onclick="openFormFile()" style="width: 325px;height:126px;">
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Masukan urutan</label>
                                <input type="text" class="form-control" required name="idx" id="idx" value="{{ $d->idx ?? '' }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">Masukan status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="Draft" {{ (($d->status ?? '') == 'Draft' ? 'selected' : '') }}>Draft</option>
                                    <option value="Publish" {{ (($d->status ?? '') == 'Publish' ? 'selected' : '') }}>Publish</option>
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


    @endforeach
    <div class="col-md-4">
        <a href="javascript:void();" class="hover-simple" data-toggle="modal" data-target="#addSlider">
            <img src="{{ $defaultFoto }}" alt="Add Slider" class="rounded-t" style="width: 325px;height:126px;">
        </a>
    </div>
</div>

<!-- SOSIAL MEDIA -->
<div class="row mt-3">
    @foreach( $dataSosmed as $ds )
    <div class="col-md-6 col-12">
        <label for="">{{ $ds->data_name }} {{ ($ds->data_name == 'Whatsapp' ? ($ds->data_id == '000003' ? 'Kedoya' : 'Cengkareng') : '' ) }} </label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-{{ strtolower($ds->data_name) }}"></i>
            </span>
            <input type="text" class="form-control" placeholder="{{ $ds->data_name }} Link" aria-label="{{ $ds->data_name }} Link" name="{{ strtolower($ds->data_name) }}_link" id="{{ strtolower($ds->data_name) }}_link" data-name="{{ strtolower($ds->data_name) }}" data-id="{{ $ds->data_id }}" value="{{ $ds->note ?? '' }}" onchange="saveLink(this)" onclick="saveLink(this)" onkeyup="saveLink(this)">
        </div>
    </div>
    @endforeach
</div>

<div class="modal fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="addSliderLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('home.post',0) }}" enctype="multipart/form-data" method="POST" id="formAddSlider"> @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addSliderLabel">Form Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Masukan file harus berformat jpg,jpeg,png Max Size( 4 mb )</label>
                    <input type="file" class="form-control d-none" required name="imgFile" id="imgFile" onchange="readURL(this)">
                    <div id="preview" class="text-center">
                        <img id="viewImg" src="{{ $defaultFoto }}" alt="Upload Preview" onclick="openFormFile()" style="width: 325px;height:126px;">
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

    function saveLink(e) {
        var id = $(e).attr('data-id')
        var name = $(e).attr('data-name')
        var link = $(e).val()

        var data = {
            _token: '{{ csrf_token() }}',
            id: id,
            name: name,
            link: link
        }
        var formData = JSON.stringify(data);
        $.ajax({
            type: 'POST',
            url: "{{  route('home_social_media.post') }}",
            contentType: "application/json",
            processData: false,
            data: formData,
            success: function(response) {
                console.log(response)
                if (response.code == 200) {

                    console.log(row)
                }
            }
        });

    }
</script>
@endsection