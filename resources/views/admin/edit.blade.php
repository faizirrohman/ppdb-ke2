@extends('layouts.admin', ['title' => 'PPDB | Edit Data Pendaftaran'])

@section('content')

<div class="container-fluid">

      <br>
      <div class="row">
            <div class="col-md-12">
                  <div class="main-card mb-3 card card-body">
                        <h3>Edit Data Pendaftar</h3>
                        <form action="{{ route('admin.update', $siswa->id) }}" method="POST">
                              @csrf
                              @method('PUT')
                              <div class="body">
                                    <div class="row">
                                          <div class="mb-3 col-md-6">
                                                <label for="nis" class="form-label">NIS</label>
                                                <input type="text" class="form-control" name="nis" id="nis" value="{{ $siswa->nis }}" required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" value="{{ $siswa->nama }}" required>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="mb-3 col-md-6">
                                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                                <select name="jk" class="form-select" id="jk" required>
                                                      <option>{{ $siswa->jk }}</option>
                                                      <option value="Laki-laki">Laki-laki</option>
                                                      <option value="Perempuan">Perempuan</option>
                                                </select>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}" required>
                                          </div>
                                    </div>

                                    <div class="row">
                                          <div class="mb-3 col-md-6">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $siswa->alamat }}" required>
                                          </div>
                                    </div>

                                    <div class="row">
                                          <div class="mb-3 col-md-6">
                                                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                                <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" value="{{ $siswa->asal_sekolah }}" required>
                                          </div>
                                          <div class="mb-3 col-md-6">
                                                <label for="kelas" class="form-label">Kelas</label>
                                                <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $siswa->kelas }}" required>
                                          </div>
                                    </div>

                                    <div class="row">
                                          <div class="mb-3 col-md-12">
                                                <label for="jurusan" class="form-label">Jurusan</label>
                                                <select name="jurusan" class="form-select" id="jurusan" required>
                                                      <option>{{ $siswa->jurusan }}</option>
                                                      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                                      <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                                      <option value="Multimedia">Multimedia</option>
                                                      <option value="Otomotisasi Tata Kelola Perkantoran">Otomotisasi Tata Kelola Perkantoran</option>
                                                      <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                                                      <option value="Perhotelan">Perhotelan</option>
                                                      <option value="Tata Boga">Tata Boga</option>
                                                </select>
                                          </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>
<br>

@endsection