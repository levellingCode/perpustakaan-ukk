<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
?>
<script>
    alert ('Hapus Data User Berhasil');
    location.href = "index.php?page=buku";
</script>