<?php

    $conn = mysqli_connect('localhost', 'root', '', 'mhs') or die(mysqli_errno($conn));
    $query = mysqli_query($conn, "SELECT * FROM data_mhs");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabel{
            border: none;
            width: 100%;
            text-align: center;
        }
        .tr{
            background-color: #CFD2CF;
            color: black;
            font-family: sans-serif;
            font-size: 13px;
            height: 25px;
        }
        .tr:hover{
            background-color: #B2B8B2;
            color: white;
        }
        .card_div{
            margin-left:25em;
            height: auto;
            width: 500px;
            padding: 10px;
            border: 1px solid #1C1C1C;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; font-family:sans-serif;">Data Mahasiswa UNUSA</h1>
    <div class="card_div">
        <table class="tabel">
            <tr class="tr">
                <td>NIM</td>
                <td>Nama</td>
                <td>Prodi</td>
                <td>Kota</td>
                <td>Jenis Kelamin</td>
            </tr>
            <?php while($row = mysqli_fetch_assoc($query)){ ?>
            <tr class="">
                <td><?php echo $row['nim'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['prodi'] ?></td>
                <td><?php echo $row['kota'] ?></td>
                <td><?php echo $row['jk'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>