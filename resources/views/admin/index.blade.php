{{-- this view will show all ukm data --}}

@extends('template')

@section('title', 'Halaman Admin')

@section('content')
    {{-- Content of page --}}

    <div class="card">
      <div class="card-body">
          <a class="btn btn-primary mb-3" href="{{ url('admin/create')  }}">Tambah Admin</a>

          <table class="table table-striped table-hover" id="myTable">
              <thead>
              <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach($admin as $key => $value)
                  <tr align="left">
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->username }}</td>
                      <td>
                          <form action="/admin/{{ $value->id_admin }}" method="post">
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