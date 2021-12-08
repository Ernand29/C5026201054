@extends('layout.bahagia')

@section('title', 'Mengedit Tugas Pegawai')
@section('judulhalaman', 'Mengedit Tugas Pegawai')

@section('konten')


	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="Tanggal" value="{{ $t->Tanggal }}"> <br/>
		NamaTugas <input type="text" required="required" name="NamaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" required="required" name="Status" value="{{$t->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
@endsection
