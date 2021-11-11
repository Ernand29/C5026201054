<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    body {
	font-family: sans-serif;
	background-image: url(bg.jpg);
	background-repeat: no-repeat;
    position: relative;
}

.container {
	width: 650px;
	margin:7% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #333;
	color: #333;
	font-size: 25px;

}

.text-center {
	text-align: center;
	padding-top: 45px;
}

.text-center {
	color: #333;
	font-size: 45px;
	margin-bottom: 40px;
}




</style>

</head>

<body>
    <div class="container p-3">

        <form action="https://zedemy.com/">
            <h2 class="text-center">Form Validation</h2>
            <div class="form-group">
                <label for="Name">Name:</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Email">Email Address:</label>
                    <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Pw">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Telp">Telephone:</label>
                    <input type="number" name="telp" id="telp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="course">Select Your Course:</label>
                    <select name="course" id="course" class="form-control">
                        <option value="0" selected></option>
                        <option value="1">BTECH</option>
                        <option value="2">BBA</option>
                        <option value="3">BCA</option>
                        <option value="4">B COM</option>
                        <option value="5">GEEKFORGEEKS</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="Zip">Zip Code:</label>
                    <input type="number" name="zip" id="zip" class="form-control" required>
            </div>
            <div class="form-group">
                    <button type="submit" onClick="validasi()" class="btn btn-primary">Submit</button>
                    <button type="reset"  class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function Alphabet(nilai, pesan) {
            var alphaExp = /^[a-zA-Z]+$/;
            if (nilai.value.match(alphaExp)) {
                return true;
            }
            else {
                alert(pesan);
                nilai.focus();
                return false;
            }
        }
        function cekEmail(nilai, pesan) {
            var email = /^([a-zA-Z0-9])+@(([a-zA-Z0-9]))+$/;
            if (nilai.value.match(email)) {
                return true;
            }
            else {
                alert(pesan);
                nilai.focus();
                return false;
            }
        }

        function cekpassword(nilai, pesan) {
            var password = /^([a-zzA-Z0-9]{8,16})+$/;
            if (nilai.value.match(password)) {
                return true;
            }
            else {
                alert(pesan);
                nilai.focus();
                return false;
            }
        }

        function Telp(nilai, pesan) {
                var numberExp = /^([0-9]{6,})+$/;
                if(nilai.value.match(numberExp)) {
                    return true;
                }
                else {
                    alert(pesan);
                    nilai.focus();
                    return false;
                }
            }

            function Zip(nilai, pesan) {
                var zipcode = /^([0-9]{6})+$/;
                if(nilai.value.match(zipcode)) {
                    return true;
                }
                else {
                    alert(pesan);
                    nilai.focus();
                    return false;
                }
            }

            function Course(nilai, pesan) {
                var course = document.getElementById("course");
                var value_course = course.options[course.selectedIndex].value;
                if (value_course !=0){
                    return true;
                }
                else{
                    alert(pesan);
                    nilai.focus();
                    return false;
                }
            }

        function validasi() {
            Alphabet(document.getElementById('nama'), 'Nama harus Huruf semua!!');
            cekEmail(document.getElementById('email'), 'Email tidak benar!!');
            cekpassword(document.getElementById('password'), 'Password harus antara 8-16 digit!!');
            Telp(document.getElementById('telp'), 'No Telp. hanya ber isi Angka dan minimal 7 digit!!');
            Course(document.getElementById('course'), 'Jangan pilih course yang kosong');
            Zip(document.getElementById('zip'), 'Zip Code hanya berisi Angka dan maksimal 6 digit!!');
        }
    </script>

</body>

</html>
