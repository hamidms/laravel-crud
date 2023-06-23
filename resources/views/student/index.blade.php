@extends('layouts.master')

@section('content')
    
@if (session('sukses'))
<div class="alert alert-success" role="alert">
  Data berhasil diinput
</div>
@endif
<div class="row">
  <div class="col-6">
    <h1>Data Siswa</h1>
  </div>
  <div class="col-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Data Siswa
    </button>
    
  </div>
  <table class="table table-hover">
    <tr>
      <th>NAMA DEPAN</th>
      <th>NAMA BELAKANG</th>
      <th>JENIS KELAMIN</th>
      <th>AGAMA</th>
      <th>ALAMAT</th>
      <th>Action</th>
    </tr>
    @foreach ($students as $student)
    <tr>
      <td>{{$student->nama_depan}}</td>
      <td>{{$student->nama_belakang}}</td>
      <td>{{$student->jenis_kelamin}}</td>
      <td>{{$student->agama}}</td>
      <td>{{$student->alamat}}</td>
      <td><a href="/student/{{ $student->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
    </tr>
    @endforeach
  </table>
</div>
@endsection