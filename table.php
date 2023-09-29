<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            position: relative;
            margin-left: 120px;
        }
        table tr td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <fieldset>
        <legend>Biodata</legend>
    <?php
        echo "<h1><b>BIODATA</b></h1>";
        echo "<table border='1'>";
        echo "<tr><td>Nama</td><td>:</td><td>Muhammad Yusril Fauzi</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>:</td><td>Ciamis</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>:</td><td>04 Desember 2003</td></tr>";
        echo "<tr><td>Hobi</td><td>:</td><td>Nonton Film, Main game, Traveling</td></tr>";
        echo "<tr><td>Jurusan</td><td>:</td><td>Informatika</td></tr>";
        echo "</table>";
    ?>
    </fieldset>
    </div>
</body>
</html>