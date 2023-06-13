@extends('layouts.main')
@section('title','Mahasiswa')
@section('content')
        <div class="card-mt-4">
            <div class="header"></div>
            <div class="body">
            <form action="/mahasiswa/simpan" method="POST">
                @csrf
  <div class="form-group w-25">
    <label for="exampleInputEmail1">NIM</label>
    <input type="number" name="nim" class="form-control" placeholder="NIM">
    </div>  

  <div class="form-group ">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
    </div>  

    <label>Gender</label>
  <div class="form-check">
    <input type="radio" name='gender' value="Pria" class="form-check-input" >
    <label>Pria</label>
    </div>  
  <div class="form-check">
    <input type="radio" name='gender' value="Wanita" class="form-check-input" >
    <label>Wanita</label>
    </div>  

  <div class="form-group">
    <label>Program Studi</label>
   <select name="prodi" class="form-control">
        <option value="0">Program Studi</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Informatika">Informatika</option>
        <option value="Arsitektur">Arsitektur</option>
        <option value="Desain Produk">Desain Produk</option>
   </select>
    </div>
    
    <label>Minat</label>
  <div class="form-check">
    <input type="checkbox" name="minat[]" value='AI' class="form-check-input" >
    <label>AI</label>
    </div>  
  <div class="form-check">
    <input type="checkbox" name="minat[]" value='UI/UX' class="form-check-input" >
    <label>UI/UX</label>
    </div> 
  <div class="form-check">
    <input type="checkbox" name="minat[]" value='web' class="form-check-input" >
    <label>Web</label>
    </div> 

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
            </div>
        </div>
@endsection
