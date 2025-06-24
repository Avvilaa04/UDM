<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Galeria</title>
    <style>
        body{
            background-color: rgb(206, 209, 47);
            margin: 0;
            padding: 0;
            text-align: justify;
        }
        h1{
            font-family: 'Quicksand';
            font-size: 50px;
            font-weight: bold;
            text-align: center;
        }

        img{
            border: 3px solid blue;
            border-radius: 15px;
            margin: 5px;
        }

        div{
            text-align: center;
        }

        .top {
            height: 40px;
            list-style-type: none;
            background: rgb(0, 0, 0);
            width: 100%;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }   

        li {
            font-family: monospace;
            font-weight: 400;
            letter-spacing: 3px;
            line-height: 1.5;
            font-style: normal;
            color: #fff;
            font-size: 25px;
            text-transform: uppercase;
            margin-left: 10px;
        }

        .navi{
            text-align: center;
        }
        
        .atras{
            border: none;
            margin: 0;
        }

        .menu{
            border: none;
            margin: 0;
        }

        .sig{
            border: none;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php
        $nombre=$_GET['nombre'];
        echo "<img src=".$nombre.">";
    ?>
</body>
</html>

