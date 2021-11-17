<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
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
    <?php
    function name()
    {
        $name = $_POST["nama"];
        $parts = explode(" ", $name);
        if (count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        } else {
            $firstname = $name;
            $lastname = " ";
        }

        echo "Lastname: $lastname";
        echo "<br>";
        echo "Firstname: $firstname";
        echo "<br>";
        echo "$lastname[0].$firstname";
    }

    ?>
</head>
<body>
<div class="container">
    <h2 class="text-center">Hasil</h2>
    <p><?php name(); ?></p>
    <a href="showTugasphp">Back To HTML</a>
</div>
</body>
</html>
