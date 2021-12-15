@extends('layout.bahagia')

@section('title', 'Data Karyawan ')
@section('judulhalaman', 'Data Karyawan ')

@section('konten')


    <br />
    <br />



    <br />
    <br />

    <table class="table table-bordered border-white mb-5 pb-5 table-dark">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan1 as $k)
            <tr>
                <td>{{ $k->NIP }}</td>
                <td>{{ $k->Nama }}</td>
                <td>{{ $k->Pangkat }}</td>
                <td>{{ number_format($k->Gaji, 0, ',', '.')  }}</td>
                <td>
                    <a href="/karyawan1/view/{{ $k->NIP }}">View Detail</a>
                    |
                    <a href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $karyawan1->links() }}


@endsection
