@extends('layouts.admin', ['title' => 'PPDB | List Pendaftar'])

@section('content')

<div class="container-fluid">
      <br>
      
      @if ($message = Session::get('success'))
            <br>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>{{ $message }}!</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
      @endif

      <br>

      <div class="row">
            <div class="col-md-12">
                  <div class="main-card mb-3 card card-body">
                        <h3>List Pendaftar</h3>
                        <a style="width: 170px;" href="{{ route('admin.printSemua') }}" target="blank" class="btn btn-success btn-xs">
                              Cetak Semua Data
                        </a>
                        <br>
                        <div class="table-responsive">
                              <table class="table table-bordered">
                                    <thead>
                                          <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Asal Sekolah</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Aksi</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($siswa as $items)
                                          <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $items->nis }}</td>
                                                <td>{{ $items->nama }}</td>
                                                <td>{{ $items->jk }}</td>
                                                <td>{{ $items->tempat_lahir }}</td>
                                                <td>{{ $items->tanggal_lahir }}</td>
                                                <td>{{ $items->alamat }}</td>
                                                <td>{{ $items->asal_sekolah }}</td>
                                                <td>{{ $items->kelas }}</td>
                                                <td>{{ $items->jurusan }}</td>
                                                <td>
                                                      <form action="{{ route('admin.destroy', $items->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-xs">
                                                                  Hapus
                                                            </button>
                                                            <a href="{{ route('admin.edit', $items->id) }}" class="btn btn-primary btn-xs">
                                                                  Edit
                                                            </a>
                                                            <a href="{{ route('admin.print', $items->id) }}" target="blank" class="btn btn-success btn-xs">
                                                                  Cetak
                                                            </a>
                                                      </form>
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

@endsection