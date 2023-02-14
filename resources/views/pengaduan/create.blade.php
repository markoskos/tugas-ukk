@extends('master')

@section('content')

<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h1 class="card-title">PENGADUAN MASYARAKAT</h1>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('pengaduan.store')}}" method="POST">
        @csrf
      <div class="card-body">
          <div class="form-group">
            <label for="Nama">Tanggal Pengaduan</label>
            <input type="date" name="tgl_pengaduan" class="form-control" id="tgl_pengaduan" placeholder="tanggal_pengaduan">
          </div>
        <div class="form-group">
            <label for="Alamat">Isi Laporan</label>
            <textarea class="form-control" name="isi_laporan" rows="3" id="isi_laporan" placeholder="isi_laporan"></textarea>
          </div>
          
          <div class="form-group" >
          <label for="formFile" class="form-label">Pilih File</label>

          <input class="form-control" type="file" id="formFile">
          </div>
        </div>
        <a href="/pengaduan" class="btn btn-primary mr-3" style="float:right;">Submit</button>
        <a href="/pengaduan" class="btn btn-primary ml-3" style="float:left;">Back</a>
        </p>
      </div>
    </form>
  </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
  </body>
  </html>

  @endsection