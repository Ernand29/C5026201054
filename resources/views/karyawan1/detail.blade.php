@extends('layout.bahagia')

@section('title', 'Mengedit Data Karyawan')
@section('judulhalaman', 'Mengedit Data Karyawan')

@section('konten')


	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}

        NIP     :  {{ $k->NIP }} <br/>
		Nama    : {{ $k->Nama }} <br/>
		Pangkat : {{ $k->Pangkat }} <br/>
		Gaji    : {{ $k->Gaji }} <br/>

	</form>
	@endforeach


@endsection
