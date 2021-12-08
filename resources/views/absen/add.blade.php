
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        IDPegawai <select name="idpegawai" >
    @foreach($pegawai as $p)
     <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
    @endforeach
</select>
<br>
<div class="input-group mb-3">
    <label for="datetimepicker1">Tanggal :</label>
    <div class='input-group' id='datetimepicker1' data-td-target-input='nearest' data-td-target-toggle='nearest'>
        <input id='datetimepicker1Input' type='text' class='form-control' name="tanggal" data-td-target='#datetimepicker1' required/>
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

        Status <br />
        <input type="radio" id="html" name="status" value="I">
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S" checked="checked">
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A">
        <label for="javascript">Alpha</label>

        <p><input type="submit" value="Simpan Data"></p>
    </form>
    <p> <a href="/absen"> Kembali</a></p>
@endsection
