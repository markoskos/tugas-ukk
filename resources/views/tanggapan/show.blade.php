@extends('master')

@section('content')
{{-- <div class="col-md-12">
  <div class="row 6">
  <div class="card card-secondary">
    <div class="card-header">
      <h1 class="card-title">PENGADUAN MASYARAKAT</h1>
    </div>
    <!-- /.card-header -->
      <div class="card-body">
        <div class="form-group">
          <label for="">Nama Pelapor</label>
          <input type="text" name="tanggal" id="tanggal" value="{{ $pengaduans->users_id }}" disabled>
        </div>
        <div class="form-group">
          <label for="">Tanggal Pengaduan</label>
          <input type="text" name="tanggal" id="tanggal" value="{{ $pengaduans->tgl_pengaduan }}" disabled>
        </div>
          <div class="form-group">
            <label for="Alamat">Isi Laporan</label>
            <textarea 
            disabled
              class="form-control" 
              name="isi_laporan" rows="5" 
              id="isi_laporan" placeholder="isi_laporan">{{ $pengaduans->isi_laporan }}</textarea>
          </div>
          <div class="form-group" >
            <label for="formFile" class="form-label">Foto</label>
            <img src="{{ url('storage/' . $pengaduans->foto) }}" alt="" srcset="">
          </div>  
      </p>
    </div>
    <div class="card-footer">
      <a href="/pengaduan" class="btn btn-secondary ml-3" style="float:left;">Back</a>
    </div>
    
  </div>
  </div>
</div> --}}

<div class="post">
  <div class="user-block">
    <span class="username">
      <a href="#">{{ $pengaduans->user->id }}</a>
    </span>
    <span class="description">{{ 'Tanggal Pengaduan ' . $pengaduans->tgl_pengaduan }}</span>
  </div>
  <!-- /.user-block -->
  <div class="row mb-3">
    <div class="col-sm-6">
      <img class="img-fluid" src="{{ url('storage/' . $pengaduans->foto) }}" alt="Photo">
    </div>
    <!-- /.col -->
    <div class="col-sm-6">
      <div class="card card-cyan">
        <div class="card-header">
          <h1 class="card-title">PENGADUAN MASYARAKAT</h1>
        </div>
        <!-- /.card-header -->
    
          <div class="card-body">
            <div class="form-group">
                <label for="Alamat">Isi Laporan</label>
                <textarea 
                disabled
                  class="form-control" 
                  name="isi_laporan" rows="3" 
                  id="isi_laporan" placeholder="isi_laporan">{{ $pengaduans->isi_laporan }}</textarea>
              </div> 
              <div class="card-body">
                <div class="form-group">
                    <label for="tanggapan">Tanggapan</label>
                    <textarea 
                      class="form-control" 
                      name="Tanggapan" rows="1" 
                      id="Tanggapan" placeholder="Tanggapan">{{ $pengaduans->isi_laporan }}</textarea>
                  </div> 
                  <div class="card-body">
                    <div class="form-group">
                        <label for="status">Status Pengaduan</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" selected disabled>---Pilih Proses---</option>
                            <option value="diproses">Di Proses</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        <div class="card-footer">
                          <input type="submit" class="btn btn-outline-primary ml-3" style="float:right;" value="Submit">
                          <a href="/pengaduan" class="btn btn-secondary ml-3" style="float:left;">Back</a>
                        </div>
        </div>
</div>
  @endsection