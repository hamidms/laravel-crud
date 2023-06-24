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
                  <!-- Button trigger modal -->
                  <div class="right">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
                      Tambah Data Siswa
                      <i class="lnr lnr-plus-circle"></i>
                    </button>
                  </div>

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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/student/create" method="POST">
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

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@stop