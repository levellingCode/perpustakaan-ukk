<h1 class="mt-4">Anggota</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
                $id = $_GET['id'];
                if(isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $no_telepon = $_POST['no_telepon'];
                    $query = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password', email='$email', alamat='$alamat', no_telepon='$no_telepon' WHERE id_user=$id");

                    if ($query) {
                        echo '<script>alert("Ubah Data Berhasil.");</script>';
                    }else {
                        echo '<script>alert("Ubah Data Gagal.");</script>';
                    }
                }
                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user=$id");
                $data = mysqli_fetch_array($query);
            ?>
            
            <div class="row mb-4">
                <div class="col-md-2">Nama</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['nama'];?>" class="form-control" name="nama"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Email</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['email'];?>" class="form-control" name="email"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">No telepon</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['no_telepon'];?>" class="form-control" name="no_telepon"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Alamat</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['alamat'];?>" class="form-control" name="alamat"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Username</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['username'];?>" class="form-control" name="username"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Password</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['password'];?>" class="form-control" name="password"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                    <!-- <button type="reset" class="btn btn-secondary" >Reset</button> -->
                    <a href="?page=anggota" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
    </div>
</div>