@extends('layout.bahagia')

@section('title', 'Menambah Data Buku')
@section('judulhalaman', 'Menambah Data Buku')

@section('konten')


	<a href="/buku"> Kembali</a>

	<br/>
	<br/>

    @foreach($buku as $b)
	<form action="/buku/store" method="post">
		{{ csrf_field() }}
        Kode Buku <input type="number" required="required" name="kode" value="{{ $b->kodebuku }}"> <br/>
		Merk Buku <input type="text" required="required" name="merk" value="{{ $b->merkbuku }}"> <br/>
		Stock Buku <input type="number" required="required" name="stock" value="{{ $b->stockbuku }}"> <br/>
		Tersedia <input required="required" name="tersedia" value="{{ $b->tersedia }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach

@endsection
