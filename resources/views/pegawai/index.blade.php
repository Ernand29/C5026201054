@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>


    <br />
    <br />


    <div class="row">
        <div class="col-sm-7">
            <form action="/pegawai/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
        </div>
        <div class="col-sm-4">
            <input type="submit" class="btn btn-primary" value="CARI">
        </div>
        </form>
    </div>

    <br />
    <br />

    <table class="table table-bordered border-white mb-5 pb-5 table-dark">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pegawai->links() }}

@endsection
