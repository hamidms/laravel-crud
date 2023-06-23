@extends('layouts.master')

@section('content')
    
<h1>Edit Data Siswa</h1>
@if (session('sukses'))
<div class="alert alert-success" role="alert">
  Data berhasil diinput
</div>
@endif
<div class="row">
  <div class="col-lg-12">
    <form action="/student/{{$student->id}}/update" method="POST">
        {{csrf_field()}}
        <div class="mb-3">
          <label for="inputFirstName" class="form-label">Nama Depan</label>
          <input type="text" name="nama_depan" class="form-control" id="inputFirstName" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$student->nama_depan}}">
        </div>
        <div class="mb-3">
          <label for="inputLastName" class="form-label">Nama Belakang</label>
          <input type="text" name="nama_belakang" class="form-control" id="inputLastName" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$student->nama_belakang}}">
        </div>
        <select class="form-select" name="jenis_kelamin" aria-label="Pilih Jenis Kelamin">
          <option selected>Pilih Jenis Kelamin</option>
          <option value="L" @if ($student->jenis_kelamin == 'L') selected @endif>Laki - Laki</option>
          <option value="P" @if ($student->jenis_kelamin == 'P') selected @endif>Perempuan</option>
        </select>
        <div class="mb-3">
          <label for="inputReligion" class="form-label">Agama</label>
          <input type="text" name="agama" class="form-control" id="inputReligion" aria-describedby="emailHelp" placeholder="Agama" value="{{$student->agama}}">
        </div>
        <div class="form-floating">
          <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea2" style="height: 100px">{{$student->alamat}}</textarea>
          <label for="floatingTextarea2">Alamat</label>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/student" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
