<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM koleksi WHERE id_koleksi=$id");
?>
<script>
    alert('Hapus data berhasil');
    location.href = "koleksi.php";
</script>