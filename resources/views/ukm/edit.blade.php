{{-- this view will show form to edit ukm --}}

@extends('template')

@section('title', 'UKM')

@section('content')
    {{-- Content of page --}}
     <form action="/ukm/{{ $ukm->id_ukm }}" method="post">
	     	@csrf
	        @method('put')

        {{-- Input Nama --}}
        <div class="form-group">
            <label for="nama">Nama UKM</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama UKM" value="{{ old('nama', $ukm->nama) }}">
            @if($errors->has('nama'))
                <small id="helpId" class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>



                 	{{-- Input email --}}
    	   	<div class="form-group">
            <label for="nama">Emaill</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email' , $ukm->email) }}">
            @if($errors->has('email'))
                <small id="helpId" class="text-danger">{{ $errors->first('email') }}</small>
            @endif
            </div>


            	{{-- Input Telepon --}}
    	   <div class="form-group">
            <label for="nama">Nomor Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Nomor Telepon" value="{{ old('telepon', $ukm->telepon) }}">
            @if($errors->has('telepon'))
                <small id="helpId" class="text-danger">{{ $errors->first('telepon') }}</small>
            @endif
            </div>



            {{-- Input Visi misi --}}
    	   <div class="form-group">
            <label for="visi_misi">Visi Misi</label>
          
            <textarea class="form-control" rows="5" id="visi_misi" placeholder="Visi Misi" value="{{ old('visi_misi', $ukm->visi_misi) }}" >
            </textarea>

            @if($errors->has('visi_misi'))
                <small id="helpId" class="text-danger">{{ $errors->first('visi_misi') }}</small>
            @endif

            </div>

            {{-- Input Informasi Detail  --}}
    	   <div class="form-group">
            <label for="detail">Informasi Detail</label>
          
            <textarea class="form-control" rows="5" id="detail" placeholder="Informasi Detail" value="{{ old('detail', $ukm->detail) }}" >
            </textarea>

            @if($errors->has('detail'))
                <small id="helpId" class="text-danger">{{ $errors->first('detail') }}</small>
            @endif

            </div>


       
            
            {{-- Input Submit --}}
       			 <button type="submit" class="btn btn-success">Simpan</button>
       			  <button type="button" class="btn btn-danger" onclick="window.history.back();" >Kembali</button>
     

     </form>

@endsection