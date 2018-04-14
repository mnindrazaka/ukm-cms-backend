{{-- this view will show form to create new ukm --}}

@extends('template')

@section('title', 'Tambah UKM')

@section('content')
    {{-- Content of page --}}

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form  action="/ukm" method="post">
                        @csrf

                        {{-- Input Nama --}}
                        <div class="form-group">
                            <label for="nama">Nama UKM</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama UKM" value="{{ old('nama') }}">
                            @if($errors->has('nama'))
                                <small id="helpId" class="text-danger">{{ $errors->first('nama') }}</small>
                            @endif
                        </div>

                        {{-- Input Singkatan --}}
                        <div class="form-group">
                            <label for="Singkatan">Singkatan UKM</label>
                            <input type="text" name="singkatan" id="singkatan" class="form-control" placeholder="singkatan ukm" value="{{ old('singkatan') }}">
                            @if($errors->has('singkatan'))
                                <small id="helpId" class="text-danger">{{ $errors->first('singkatan') }}</small>
                            @endif
                        </div>

                        {{-- Input Submit --}}
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-danger" href="{{ url('/ukm') }}">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection