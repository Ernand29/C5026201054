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
		<div class="input-group mb-3">
            <label for="Tanggal">Tanggal :</label>
            <div class='input-group' id='datetimepicker1' data-td-target-input='nearest' data-td-target-toggle='nearest'>
                <input id='Tanggal' type='text' class='form-control' name="Tanggal" data-td-target='#datetimepicker1' required/>
                <span class='input-group-text' data-td-target='#datetimepicker1' data-td-toggle='datetimepicker'>
                    <span class='fas fa-calendar'></span>
                </span>
            </div>
            <script>
                new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'), {
                    hooks: {
                        inputFormat: (context, date) => {
                        return moment(date).format('YYYY-MM-DD hh:mm:ss')
                        }
                    }
                });
            </script>
        </div>
        NamaTugas <input type="text" name="NamaTugas" required="required"> <br/>
        Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
