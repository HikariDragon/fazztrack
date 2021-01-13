<?php

include("../config.php");
$id = $_GET['id'];
$np = $_POST['nama_produk'];
$ket = $_POST['keterangan'];
$hrg = $_POST['harga'];
$jml = $_POST['jumlah'];

$query = mysqli_query($connect, "UPDATE produk SET nama_produk='$np', keterangan='$ket', harga='$hrg', jumlah='$jml' WHERE id=$id");
if ($query) {
    ?>

    <script lang="javascript">
        alert('Data Successfully Edited');
        document.location = "../index.php";
    </script>

<?php

}else {
    echo "Data Delete Failed";
}

?>