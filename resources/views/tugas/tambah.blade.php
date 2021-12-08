@extends('layout.bahagia')

@section('title', 'Menambah Data Tugas Pegawai')
@section('judulhalaman', 'Menambah Data Tugas Pegawai')

@section('konten')


	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime" name="Tanggal" required="required"> <br/>
        NamaTugas <input type="text" name="NamaTugas" required="required"> <br/>
        Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
