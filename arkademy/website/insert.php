<?php

include("../config.php");
$id = $_POST['id'];
$np = $_POST['nama_produk'];
$ket = $_POST['keterangan'];
$hrg = $_POST['harga'];
$jml = $_POST['jumlah'];

$query = mysqli_query($connect, "INSERT INTO produk VALUES('$id', '$np', '$ket', '$hrg', '$jml')");
if ($query){
    ?>

    <script lang="javascript">
        alert('Data Successfully Added');
        document.location = "../index.php";
    </script>

<?php

}else {
    echo "Data Upload Failed";
}

?>