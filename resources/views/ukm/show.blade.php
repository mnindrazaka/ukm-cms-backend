{{-- this view will show one detailed information of ukm data --}}

@extends('template')

@section('title', 'UKM')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h5 class="card-title mb-0 float-left">{{ $ukm->nama }}</h5>
                        <span class="text-muted float-right">{{ $ukm->id_ukm }}</span>
                    </div>
                    <h6 class="mb-2 text-muted">{{ $ukm->singkatan }}</h6>
                    <hr>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <i class="fa fa-envelope-o"></i>
                            <b>Email</b>
                            <p class="text-muted">{{ $ukm->email }}</p>
                        </div>

                        <div class="col-md-6">
                            <i class="fa fa-phone"></i>
                            <b>Telepon</b>
                            <p class="text-muted">{{ $ukm->telepon }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <b>Informasi UKM</b>
                            <p class="text-muted">{{ $ukm->detail }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <b>Visi dan Misi</b>
                            <p class="text-muted">{{ $ukm->visi_misi }}</p>
                        </div>
                    </div>
                    <hr>
                    <a class="btn btn-danger" href="{{ url('/ukm') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection