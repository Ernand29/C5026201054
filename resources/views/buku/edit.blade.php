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
        <input type="hidden" name="id" value="{{ $b->kodebuku }}">
        Kode Buku <input type="number" required="required" name="kode" value="{{ $b->kodebuku }}"> <br/>
		Merk Buku <input type="text" required="required" name="merk" value="{{ $b->merkbuku }}"> <br/>
		Stock Buku <input type="number" required="required" name="stock" value="{{ $b->stockbuku }}"> <br/>
        Tersedia <br />
                <input type="radio" id="html" name="tersedia" value="Y" @if ($b->tersedia === "Y" ) checked="checked" @endif>
                <label for="html">Yes</label><br>
                <input type="radio" id="css" name="tersedia" value="N"  @if ($b->tersedia === "N" ) checked="checked" @endif>
                <label for="css">No</label><br>
                <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach


@endsection
