@extends('admin')
@section('title', 'Home')
@section('content')
<div class="row">
    <div class="col-md-4 px-0 mb-3">
        <div class="content">
            <div>
                <span class="bg-base text-light" style="position: absolute;  padding:4px 8px;">1</span>
                <span class="bg-base text-light" style="position: absolute; right:0px; padding:3px 20px;">Publish</span>
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
    </div>
    <div class="col-md-4 px-0 mb-3">
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
    </div>
    <div class="col-md-1 px-0">
        <div class="content">
            <div class="align-middle-content">
                <a href="#" class="raise fill">
                    <h1>
                        <i class="bi bi-plus-circle text-secondary"></i>
                    </h1>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection