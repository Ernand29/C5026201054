@extends('layout.bahagia')

@section('title', 'Mengedit Data Buku')
@section('judulhalaman', 'Mengedit Data Buku')

@section('konten')


	<a href="/buku"> Kembali</a>

	<br/>
	<br/>

	@foreach($buku as $b)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}

        Kode buku {{ $b->kodebuku }} <br/>
		Merk buku {{ $b->merkbuku }} <br/>
		Stock Buku {{ $b->stockbuku }} <br/>
		Tersedia {{ $b->tersedia }} <br/>

	</form>
	@endforeach


@endsection
