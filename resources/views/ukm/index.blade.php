{{-- this view will show all ukm data --}}

@extends('template')

@section('title', 'Halaman UKM')

@section('content')
    {{-- Content of page --}}

    <div class="card">
      <div class="card-body">
          <a class="btn btn-primary mb-3" href="{{ url('ukm/create')  }}">Tambah UKM</a>

          <table class="table table-striped table-hover">
              <thead>
              <tr>
                  <th>No</th>
                  <th>Nama UKM</th>
                  <th>Singkatan</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th colspan="2">Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach($ukm as $key => $value)
                  <tr align="left">
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->nama }}</td>
                      <td>{{ $value->singkatan }}</td>
                      <td>{{ $value->email }}</td>
                      <td>{{ $value->telepon }}</td>

                      <td><a href="/ukm/{{ $value->id_ukm }}" class="btn btn-info">Detail</a></td>
                      <td>
                          <form action="/ukm/{{ $value->id_ukm }}" method="post">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
    </div>

@endsection