<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
              <select class="form-select" name="jenis_kelamin" aria-label="Pilih Jenis Kelamin">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
              </select>
              <div class="mb-3">
                <label for="inputReligion" class="form-label">Agama</label>
                <input type="text" name="agama" class="form-control" id="inputReligion" aria-describedby="emailHelp" placeholder="Agama">
              </div>
              <div class="form-floating">
                <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Alamat</label>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>