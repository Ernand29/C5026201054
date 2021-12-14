@extends('layout.bahagia')

@section('title', 'Data Buku')
@section('judulhalaman', 'Data Buku')

@section('konten')

    <a href="/buku/tambah"> + Tambah Pegawai Baru</a>


    <br />
    <br />

    <div class="container" align="center">
        <form action="/buku/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari buku "
                value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary" value="CARI">
        </form>
    </div>

    <table class="table table-success">
        <tr>
            <th>Kode Buku</th>
            <th>Merk Buku</th>
            <th>Stock buku</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($buku as $b)
            <tr>
                <td>{{ $b->kodebuku }}</td>
                <td>{{ $b->merkbuku }}</td>
                <td>{{ $b->stockbuku }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>
                    <a href="/buku/view/{{ $b->kodebuku }}">View Detail</a>
                    |
                    <a href="/buku/edit/{{ $b->kodebuku }}">Edit</a>
                    |
                    <a href="/buku/hapus/{{ $b->kodebuku }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $buku->links() }}

@endsection
