@extends('layout.bahagia')

@section('title', 'Mengedit Data karyawan')
@section('judulhalaman', 'Mengedit Data Karyawan')

@section('konten')


	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $k->NIP }}">
        NIP     : <input type="number" required="required" name="NIP" value="{{ $k->NIP }}"> <br/>
		Nama    : <input type="text" required="required" name="Nama" value="{{ $k->Nama }}"> <br/>
		Pangkat : <input type="text" required="required" name="Pangkat" value="{{ $k->Pangkat }}"> <br/>
        Gaji    : <input type="number" required="required" name="Gaji" value="{{ $k->Gaji }}"> <br/>
                <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach


@endsection
