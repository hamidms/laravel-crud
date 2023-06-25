@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Input
              </h3>
            </div>
            <div class="panel-body">
              <form action="/student/{{$student->id}}/update" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="mb-3">
                  <label for="inputFirstName" class="form-label">Nama Depan</label>
                  <input type="text" name="nama_depan" class="form-control" id="inputFirstName" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$student->nama_depan}}">
                </div>
                <div class="mb-3">
                  <label for="inputLastName" class="form-label">Nama Belakang</label>
                  <input type="text" name="nama_belakang" class="form-control" id="inputLastName" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$student->nama_belakang}}">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                    <option selected>Pilih Jenis Kelamin</option>
                  <option value="L" @if ($student->jenis_kelamin == 'L') selected @endif>Laki - Laki</option>
                  <option value="P" @if ($student->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="inputReligion" class="form-label">Agama</label>
                  <input type="text" name="agama" class="form-control" id="inputReligion" aria-describedby="emailHelp" placeholder="Agama" value="{{$student->agama}}">
                </div>
                <div class="form-floating">
                  <label for="floatingTextarea2">Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea2" style="height: 100px">{{$student->alamat}}</textarea>
                </div>
                <div class="mb-3">
                  <label for="inputAvatar" class="form-label">Avatar</label>
                  <input type="file" name="avatar" class="form-control" id="inputAvatar" aria-describedby="emailHelp" placeholder="Avatar" value="{{$student->avatar}}">
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                <a href="/student" class="btn btn-secondary">Kembali</a>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('content1')


{{-- <form action="/student/create" method="POST">
  {{csrf_field()}}
  <div class="mb-3">
    <label for="inputFirstName" class="form-label">Nama Depan</label>
    <input type="text" name="nama_depan" class="form-control" id="inputFirstName" aria-describedby="emailHelp" placeholder="Nama Depan">
  </div>
  <div class="mb-3">
    <label for="inputLastName" class="form-label">Nama Belakang</label>
    <input type="text" name="nama_belakang" class="form-control" id="inputLastName" aria-describedby="emailHelp" placeholder="Nama Belakang">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
      <option selected>Pilih Jenis Kelamin</option>
      <option value="L">Laki - Laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="inputReligion" class="form-label">Agama</label>
    <input type="text" name="agama" class="form-control" id="inputReligion" aria-describedby="emailHelp" placeholder="Agama">
  </div>
  <div class="form-floating">
    <label for="floatingTextarea2">Alamat</label>
    <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea2" style="height: 100px"></textarea>
  </div>
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}

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
