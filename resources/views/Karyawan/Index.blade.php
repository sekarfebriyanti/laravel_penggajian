@extends('Layout.main')

@section('container')
    <div>
        <h4>DATA KARYAWAN</h4> <br>
    </div>
    <div class="col-12 ps-1">
        <table class="table table-bordered border-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Id Jabatan</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Handphone</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jumlah Anak</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">01</th>
                    <td>manage01</td>
                    <td>Sekar Febriyanti</td>
                    <td>Bogor</td>
                    <td>0895396938170</td>
                    <td>Jakarta</td>
                    <td>18 Februari 2005</td>
                    <td>Perempuan</td>
                    <td>Menikah</td>
                    <td>3</td>
                    <td>
      					<a href="#" class="btn btn-warning btn-sm">Edit</a>
      					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Hapus</a>
      				</td>
                </tr>
            </tbody>
        </table>
    </div>

    @endsection
    