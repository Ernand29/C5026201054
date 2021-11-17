<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>JS NANDO</title>
    <link rel="stylesheet"
        href="https://use.edgefonts.net/c/7f48e7/1w;source-sans-pro,1,2cm9PD:W:i2,2cm9PG:W:i3,2cm9PJ:W:i4,2cm9PL:W:i6,2cm9PN:W:i7,2cm9PQ:W:i9,2cm9PC:W:n2,2cm9PF:W:n3,2cm9PH:W:n4,2cm9PK:W:n6,2cm9PM:W:n7,2cm9PP:W:n9/l"
        media="all">
    <script src="//use.edgefonts.net/source-sans-pro:n2,i2,n3,i3,n4,i4,n6,i6,n7,i7,n9,i9:all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        body {
            background-color: #2ecc71;
            font-family: source-sans-pro, sans-serif;
        }

        h1 {
            margin-left: auto;
            margin-top: 50px;
            text-align: center;
            font-weight: 100;
            font-size: 2.8em;
            color: #ffffff;
        }

        div {
            width: 500px;
            margin: auto;
        }

        .formStyle {
            background-color: #2ecc71;
            padding: 20px;
            width: 400px;
            margin-bottom: 20px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: #ecf0f1;
            border-top-style: none;
            border-right-style: none;
            border-left-style: none;
            font-size: 1em;
            font-weight: 100;
            color: #ffffff;
        }

        .formButton {
            float: right;
            background-color: #ffffff;
            color: #2ecc71;
            font-size: 28px;
            font-weight: 500;
            padding: 6px 24px;
            margin-top: 15px;
            margin-right: 60px;
            text-decoration: none;
        }

        .formButton:hover {
            background-color: #27ae60;
            color: #ffffff;
        }

        .formButton:active {
            position: relative;
            top: 3px;
        }

        /*To remove the outline that appears on clicking the input textbox*/
        input:focus {
            outline: none;
        }

        /* To format the placeholder text color */
        ::-webkit-input-placeholder {
            color: #ecf0f1;
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: #ecf0f1;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: #ecf0f1;
        }

        :-ms-input-placeholder {
            color: #ecf0f1;
        }
    </style>



    <script>
        function Name() {
            var fullName = document.getElementById("fullname").value;
            var sName = fullName.split(" ");
            var firstName = sName[0];
            var lastName = sName[sName.length - 1];
            alert("my name is " + lastName + "," + firstName.charAt(0));

        }

    </script>

</head>

<body>
    <h1>
        Siapa Nama Anda?
    </h1>

    <div>
        <form action="">
            <input type="text" name="name" class="formStyle" id="fullname" placeholder="Name (required)" required="">
            <a href="#" class="formButton" id="submit" onclick="Name();">Submit</a>
        </form>
    </div>

</body>

</html>
