
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_buku = $_GET['id_buku'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from buku where id_buku='$id_buku'");
?>
<script>
    alert ('Hapus Data buku Berhasil');
    location.href = "index.php?page=buku";
</script>
 
