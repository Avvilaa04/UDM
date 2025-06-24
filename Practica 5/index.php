<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            font-size: 34px;
            background-color: #0d1117;
        }

        .error-message {
            color: red;
            font-weight: bold;
            text-align: center;
            animation: blink 1s step-start infinite;
        }

        .success-message {
            color: green;
            font-weight: bold;
            text-align: center;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <?php
    $user = $_POST['name'];
    $pass = $_POST['password'];

    if ($user == 'admin' && $pass == 'admin') {
        echo '<p class="success-message">Welcome!</p>';
    } else {
        echo '<p class="error-message">Invalid username or password</p>';
    }
    ?>
</body>
</html>
