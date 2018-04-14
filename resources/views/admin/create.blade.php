{{-- this view will show form to create new ukm --}}

@extends('template')

@section('title', 'Tambah Admin')

@section('content')
    {{-- Content of page --}}

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form  action="/admin" method="post">
                        @csrf

                        {{-- Input Username --}}
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
                            @if($errors->has('username'))
                                <small id="helpId" class="text-danger">{{ $errors->first('username') }}</small>
                            @endif
                        </div>

                        {{-- Input Password --}}
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            @if($errors->has('password'))
                                <small id="helpId" class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>

                        {{-- Input Konfirmasi Password --}}
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password">
                            @if($errors->has('password_confirmation'))
                                <small id="helpId" class="text-danger">{{ $errors->first('password_confirmation') }}</small>
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