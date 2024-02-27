<h1 class="mt-1">Tambah Anggota</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
                if(isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $no_telepon = $_POST['no_telepon'];
                    $username = $_POST['username'];
                    $level = $_POST['level'];
                    $password = md5($_POST['password']);
                    
                    $query = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES ('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                    if ($query) {
                        echo '<script>alert("Tambah Data Berhasil.");</script>';
                    }else {
                        echo '<script>alert("Tambah Data Gagal.");</script>';
                    }
                }
            ?>
            <div class="row mb-4">
                <div class="col-md-2">Nama Lengkap</div>
                <div class="col-md-8"><input type="text" class="form-control" name="nama"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Email</div>
                <div class="col-md-8"><input type="text" class="form-control" name="email"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Alamat</div>
                <div class="col-md-8"><input type="text" class="form-control" name="alamat"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">No_telepon</div>
                <div class="col-md-8"><input type="text" class="form-control" name="no_telepon"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Username</div>
                <div class="col-md-8"><input type="text" class="form-control" name="username"></div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Password</div>
                <div class="col-md-8"><input type="text" class="form-control" name="password"></div>
            </div>
            <div class="row mb-4" >
                <div class="col-md-2">Level</div>
                <div class="col-md-8">
                <select name="level" required class="form-control">
                    <option value="">Select An Option</option>
                    <option value="peminjam" placeholder="peminjam">Peminjam</option>
                    <option value="admin" placeholder="Admin">Admin</option>
                </select>
                </div>
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