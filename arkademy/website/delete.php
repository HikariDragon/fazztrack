<?php

include("../config.php");
$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM produk WHERE id='$id'");

if ($query) {
    ?>

    <script lang="javascript">
        alert('Data Successfully Deleted');
        document.location = "../index.php";
    </script>

<?php

}else {
    echo "Data Delete Failed";
}

?>