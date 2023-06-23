@extends('layouts.master')

@section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Siswa</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>NAMA DEPAN</th>
                        <th>NAMA BELAKANG</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($students as $student)
                      <tr>
                        <td>{{$student->nama_depan}}</td>
                        <td>{{$student->nama_belakang}}</td>
                        <td>{{$student->jenis_kelamin}}</td>
                        <td>{{$student->agama}}</td>
                        <td>{{$student->alamat}}</td>
                        <td>
                          <a href="/student/{{ $student->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/student/{{ $student->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                        </td>
                      </tr>
                      @endforeach
										</tbody>
									</table>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('content1')
    
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
      <td>
        <a href="/student/{{ $student->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
        <a href="/student/{{ $student->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection