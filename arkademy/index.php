<?php

include("config.php");
$show = mysqli_query($connect, "SELECT * FROM produk");

?>

<html>
    <head>
        <title>Fazztrack |Hikari Aufa Rafiqi</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Fazztrack</h1>
        <hr>
        <br>
        <p><a href="website/add.php">Tambah</a></p>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
            <?php
            
            while($data = mysqli_fetch_array($show)) {
                echo "<tr>";
                echo "<td>".$data['id']."</td>";
                echo "<td>".$data['nama_produk']."</td>";
                echo "<td>".$data['keterangan']."</td>";
                echo "<td>".$data['harga']."</td>";
                echo "<td>".$data['jumlah']."</td>";
                echo "<td><a href='website/edit.php?id=".$data['id']."'>Edit</a> | <a href='website/delete.php?id=".$data['id']."'>Delete</a></td>";
                echo "</tr>";
            }
            
            ?>
        </table>
    </body>
</html>