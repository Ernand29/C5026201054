<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
	border-radius: 1px;
    border: 1px solid black;
    width: 625px;
            background: #FFEFD5;
            border: 1px solid;
}
body {
	margin:7% auto;
	font-family: sans-serif;
    position: relative;
}

.text-center {
	color: #333;
	font-size: 35px;
	margin-bottom: 40px;
}

.btn{
    width: 200px;
    padding: 5px;
}

.btn-success {
    color: #000;
    font-weight: bolder;
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
  }

  select {
    width: 112px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid black;
    margin: 10px 0;
}


    </style>
</head>

<body>
    <div class="container p-3">
        <form action="https://zedemy.com/">
            <p>Ernando Taufiq Nur Hidayat</p>
            <p>Nando</p>
            <p>5026201054</p>
            <h2 class="text-center">Form Input Peserta Vaksinasi</h2>
            <div class="form-group row">
                <label class="col-sm-3" for="Name">Nama Peserta<span style="display: inline-block;
                    margin-left: 42px;"></span>:</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" id="nama" placeholder="Ernando Taufiq" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3" for="NIK">NIK<span style="display: inline-block;
                    margin-left: 115px;"></span>:</label>
                <div class="col-sm-9">
                    <input type="number" name="NIK" id="NIK" placeholder="NIK 16 digit" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3" for="jenis">Jenis Vaksin<span style="display: inline-block;
                    margin-left: 54px;"></span>:</label>
                <div class="col-sm-9">
                    <select name="jenis" id="jenis" class="form-control">
                        <option value="0">Pilih Vaksin</option>
                        <option value="1">AZ</option>
                        <option value="2">Sinovac</option>
                        <option value="3">Moderna</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3" for="nobatch">No Batch<span style="display: inline-block;
                    margin-left: 72px;"></span>:</label>
                <div class="col-sm-9">
                    <input type="text" name="nobatch" id="nobatch" placeholder="Masukkan No Batch anda" class="form-control">
                </div>
            </div>
            <div class="mt-3 text-center">
                <button type="submit" class="btn btn-primary col-5" onClick="validasi()">Simpan</button>
                <button type="reset" class="btn btn-success col-5">Reset</button>
            </div>
        </form>
    </div>

    <script>
        function Alphabet(nilai, pesan) {
            var alphaExp = /^([a-zA-Z][a-zA-Z\s]{10,})+$/;
            if (nilai.value.match(alphaExp)) {
                return true;
            }
            else {
                alert(pesan);
                nilai.focus();
                return false;
            }
        }
        function NIK(nilai, pesan) {
            var nikcode = /^([0-9]{16})+$/;
            if (nilai.value.match(nikcode)) {
                return true;
            }
            else {
                alert(pesan);
                nilai.focus();
                return false;
            }
        }

        function Jenis(nilai, pesan) {
                var jenis = document.getElementById("jenis");
                var value_jenis = jenis.options[jenis.selectedIndex].value;
                if (value_jenis !=0){
                    return true;
                }
                else{
                    alert(pesan);
                    nilai.focus();
                    return false;
                }
            }

        function Nobatch(nilai, pesan) {
            var batch = /^([a-zA-Z0-9])+$/;
            if (nilai.value.match(batch)) {
                return true;
            }
            else {
                alert(pesan);
                nilai.focus();
                return false;
            }
        }
        function validasi() {
            Alphabet(document.getElementById('nama'), 'Nama harus Alphabet semua dan minimal 10 karakter !!');
            NIK(document.getElementById('NIK'), 'NIK hanya berisi Angka dan maksimal 16 digit!!');
            Jenis(document.getElementById('jenis'), 'Silahkan pilih Jenis Vaksin Anda');
            Nobatch(document.getElementById('nobatch'), 'No Batch tidak boleh ada tanda baca!!');
        }
    </script>
</body>

</html>
