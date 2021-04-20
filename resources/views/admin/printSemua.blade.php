<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Semua Data Peserta Didik Baru</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body style="font-family: sans-serif" onload="window.print()">
      <br>
      <br>
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-12">
                        <h3 style="text-align: center;">Daftar Peserta Didik Baru</h3>
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
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($siswa as $item)
                                                <tr>
                                                      <td>{{ $loop->iteration }}</td>
                                                      <td>{{ $item->nis }}</td>
                                                      <td>{{ $item->nama }}</td>
                                                      <td>{{ $item->jk }}</td>
                                                      <td>{{ $item->tempat_lahir }}</td>
                                                      <td>{{ $item->tanggal_lahir }}</td>
                                                      <td>{{ $item->alamat }}</td>
                                                      <td>{{ $item->asal_sekolah }}</td>
                                                      <td>{{ $item->kelas }}</td>
                                                      <td>{{ $item->jurusan }}</td>
                                                </tr>
                                          @endforeach
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</body>
</html>