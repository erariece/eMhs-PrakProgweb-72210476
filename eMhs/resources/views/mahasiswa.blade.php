@extends('layouts.main')
@section('title','Mahasiswa')
@section('content')
@include('alert')
    <!-- <h1>Mahasiswa</h1> -->
    <div>
</div>
    <div class="card mt-4">
        <div class="card-header">
            <a href="/mahasiswa/formtambah" class="btn btn-primary" role="button">
            <i class="bi bi-plus-square-fill"></i>  Mahasiswa</a>
            <form action="/mahasiswa/cari" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q"  class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">GENDER</th>
      <th scope="col">PROGRAM STUDI</th>
      <th scope="col">MINAT</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    @php
        $no = 1;
    @endphp
    @foreach ($mhs as $idx => $m)
        <tr>
            <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
            <td>{{ $m->nim}}</td>
            <td>{{ $m->nama}}</td>
            <td>{{ $m->gender}}</td>
            <td>{{ $m->prodi}}</td>
            <td>{{ $m->minat}}</td>
            <td>
                  <a href="/mahasiswa/formedit/{{ $m->id }}" class="btn btn-warning" role="button">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <!-- <a onclick="return confirm('Lanjut untuk Menghapus?')" href="mahasiswa/delete/{{$m->id}}" class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                  </a> -->
                  <a onclick="return confirm('Lanjut untuk Menghapus?')" href="/mahasiswa/delete/{{$m->id}}" 
                  class="btn btn-danger" role="button"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
    @endforeach 
    
  </tbody>
</table>

<p>Total Semua Data : {{ $mhs->total() }}</p>
<p>Banyak Data Pada Halaman Ini : {{ $mhs->count() }}</p><br>
<h4>Hal. {{ $mhs->currentpage() }}</h4>

    <Span class="float-right">
        {{ $mhs->links() }}
    </Span>
        </div>
    </div>
@endsection