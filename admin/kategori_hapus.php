<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");
?>
<script>
    alert ('Hapus Data Kategori Berhasil');
    location.href = "index.php?page=kategori";
</script>