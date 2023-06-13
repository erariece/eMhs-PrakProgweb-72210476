@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')

<div class="card-mt-4">
            <div class="header"></div>
            <div class="body">
                @php 
                    $minat = explode(',', $mhs->minat);
                @endphp
            <form action="/mahasiswa/update/{{ $mhs->id}}" method="POST">
                @csrf
                @method('PUT')
  <div class="form-group w-25">
    <label for="exampleInputEmail1">NIM</label>
    <input type="number" name="nim" class="form-control" value="{{$mhs->nim}}">
    </div>  

  <div class="form-group ">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" value="{{$mhs->nama}}">
    </div>  

    <label>Gender</label>
  <div class="form-check">
    <input type="radio" name='gender' value="Pria" class="form-check-input" {{ ($mhs->gender == 'Pria') ? 'checked':''}}>
    <label>Pria</label>
    </div>  
  <div class="form-check">
    <input type="radio" name='gender' value="Wanita" class="form-check-input" {{ ($mhs->gender == 'Wanita') ? 'checked':''}}>
    <label>Wanita</label>
    </div>  

  <div class="form-group">
    <label>Program Studi</label>
   <select name="prodi" class="form-control">
        <option value="0">Program Studi</option>
        <option value="Sistem Informasi" {{ ($mhs->prodi == 'Sistem Informasi') ? 'Selected':''}}>Sistem Informasi</option>
        <option value="Informatika" {{ ($mhs->prodi == 'Informatika') ? 'Selected':''}}>Informatika</option>
        <option value="Arsitektur" {{ ($mhs->prodi == 'Arsitektur') ? 'Selected':''}}>Arsitektur</option>
        <option value="Desain Produk" {{ ($mhs->prodi == 'Desain Produk') ? 'Selected':''}}>Desain Produk</option>
   </select>
    </div>
    
    <label>Minat</label>
  <div class="form-check">
    <input type="checkbox" name="minat[]" value='AI' class="form-check-input" {{ in_array('AI', $minat) ? 'checked':'' }}>
    <label>AI</label>
    </div>  
  <div class="form-check">
    <input type="checkbox" name="minat[]" value='UI/UX' class="form-check-input" {{ in_array('UI/UX', $minat) ? 'checked':'' }}>
    <label>UI/UX</label>
    </div> 
  <div class="form-check">
    <input type="checkbox" name="minat[]" value='web' class="form-check-input" {{ in_array('web', $minat) ? 'checked':'' }}>
    <label>Web</label>
    </div> 

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
            </div>
        </div>

        @endsection