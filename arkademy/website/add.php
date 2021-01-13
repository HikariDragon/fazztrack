<html>
    <head>
        <title>Fazztrack | add</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <h1>Fazztrack</h1>
        <hr>
        <br>
        <p>Tambah Produk</p>
        <br>
        <form action="insert.php" method="POST">
            <div>
                <label for="np">Nama Produk</label>
                <input type="text" id="np" name="nama_produk">
            </div>
            <div>
                <label for="ket">Keterangan</label>
                <input type="text" id="ket" name="keterangan">
            </div>
            <div>
                <label for="hrg">Harga</label>
                <input type="text" id="hrg" name="harga">
            </div>
            <div>
                <label for="jml">Jumlah</label>
                <input type="number" id="jml" name="jumlah">
            </div>
            <div>
                <input type="submit" name="add" value="Add">
            </div>
        </form>
    </body>
</html>