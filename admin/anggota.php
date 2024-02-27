<h1 class="mt-4">Daftar Anggota</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3" >
                <a href="?page=anggota_tambah" class="btn btn-primary" >+ Tambah Data Anggota</a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM user ");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['no_telepon']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['password']; ?></td>
                                <td>
                                    <a href="?page=anggota_ubah&&id=<?php echo $data['id_user']; ?>"class="btn btn-warning">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="?page=anggota_hapus&&id=<?php echo $data['id_user']; ?>"class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>