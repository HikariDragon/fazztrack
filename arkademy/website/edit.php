<?php

include("../config.php");
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM produk WHERE id=$id");
while ($data = mysqli_fetch_array($query)) {
    $np = $data['nama_produk'];
    $ket = $data['keterangan'];
    $hrg = $data['harga'];
    $jml = $data['jumlah'];

?>

<html>
    <head>
        <title>Fazztrack | Edit</title>
        <link rel="stylesheet" href="style.css">
       
    </head>
    <body>
        <h1>Edit Produk</h1>
        <hr>
        <br>
        <form action="update.php?id=<?=$id?>" method="POST">
            <div>
                <label for="np">Nama Produk</label>
                <input type="text" id="np" name="nama_produk" value="<?php echo $np?>">
            </div>
            <div>
                <label for="ket">Keterangan</label>
                <input type="text" id="ket" name="keterangan" value="<?php echo $ket?>">
            </div>
            <div>
                <label for="hrg">Harga</label>
                <input type="text" id="hrg" name="harga" value="<?php echo $hrg?>">
            </div>
            <div>
                <label for="jml">Jumlah</label>
                <input type="number" id="jml" name="jumlah" value="<?php echo $jml?>">
            </div>
            <div>
                <input type="submit" name="edit" value="Edit">
            </div>
        </form>
    </body>
</html>

<?php

}
