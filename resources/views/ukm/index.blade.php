{{-- this view will show all ukm data --}}

@extends('template')

@section('title', 'Halaman UKM')

@section('content')
    {{-- Content of page --}}

    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ url('ukm/create')  }}">Tambah UKM</a>

            <table class="table table-striped table-hover" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama UKM</th>
                    <th>Singkatan</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ukm as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->singkatan }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->telepon }}</td>
                        <td>
                            <form action="/ukm/{{ $value->id_ukm }}" method="post" id="{{ $value->id_ukm }}">
                                @csrf
                                @method('delete')
                            </form>

                            <div class="btn-group">
                                <a href="/ukm/{{ $value->id_ukm }}" class="btn btn-info">Detail</a>
                                <button type="submit" class="btn btn-danger" form="{{ $value->id_ukm }}">Hapus</button>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection