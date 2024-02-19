<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #3498db;
        }

        p {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $name = isset($_POST["name"]) ? $_POST["name"] : '';
            $email = isset($_POST["email"]) ? $_POST["email"] : '';
            $NIM = isset($_POST["NIM"]) ? $_POST["NIM"] : '';

            echo "<h2>Halo $name</h2>";
            echo "<p>Email Anda: $email</p>";
            echo "<p>NIM Anda: $NIM</p>";
        }
        ?>
    </div>
</body>
</html>