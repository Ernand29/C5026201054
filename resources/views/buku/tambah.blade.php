@extends('layout.bahagia')

@section('title', 'Menambah Data Buku')
@section('judulhalaman', 'Menambah Data Buku')

@section('konten')


	<a href="/buku"> Kembali</a>

	<br/>
	<br/>


	<form action="/buku/store" method="post">
		{{ csrf_field() }}
        Kode Buku <input type="number" required="required" name="kode"> <br/>
		Merk Buku <input type="text" required="required" name="merk" > <br/>
		Stock Buku <input type="number" required="required" name="stock" > <br/>
        Tersedia <br />
        <input type="radio" id="html" name="tersedia" value="Y">
        <label for="html">Yes</label><br>
        <input type="radio" id="css" name="tersedia" value="N" checked="checked">
        <label for="css">No</label><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
