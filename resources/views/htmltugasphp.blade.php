<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
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

    p{
        color: #333;
        font-size: 20px;
        margin-bottom: 40px;
    }

      </style>
</head>

<body>
    <div class="container p-3">
        <form action="resultTugasphp" method="POST" >
            @csrf
            <h2 class="text-center">Form Input</h2>
            <div class="form-group row">
                <label class="col-sm-3" for="Name">Nama Anda<span style="display: inline-block;
                    margin-left: 17px;"></span>:</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" id="nama" placeholder="Ernando Taufiq" class="form-control" required>
                </div>
            </div>
            <div class="mt-3 text-center">
                <button type="submit" class="btn btn-primary col-5">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
