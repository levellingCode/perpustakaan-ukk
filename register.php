<?php
session_start();
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Perppustaakan Digital</title>
    <link rel="stylesheet" href="stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcy
    VLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <?php
            if(isset($_POST['register'])) {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $no_telepon = $_POST['no_telepon'];
                $username = $_POST['username'];
                $level = $_POST['level'];
                $password = md5($_POST['password']);

                $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES ('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");
            
                if ($insert) {
                    echo '<script>alert("Selamat, registrasi berhasil silahkan login"); location.href="login.php"</script>';
                }else {
                    echo '<script>alert("Registrasi gagal, Silahkan registrasi ulang");</script>';
                }
               
            }
        ?>
        <form method="post">
            <h1>Pembuatan Akun</h1>
            <div class="input-box">
                <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Masukan Email" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="text" name="no_telepon" placeholder="Masukan No. Telepon" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input name="alamat" placeholder="Masukan Alamat" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="username" name="username" placeholder="Masukan Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input id="inputPassword" name="password" type="password" placeholder="Masukan Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="select-box">
                <label>Siapakah kamu?pilih lah opsi berikut</label>
                <select class="select-box" name="level" required>
                    <option value="">pilih</option>
                    <option value="peminjam" placeholder="peminjam">Peminjam</option>
                </select> 
            </div>
            
            <!-- <div class="remember-forgot">
                <label><input type="checkbox"> Remember me
            </label>
            </div> -->
            <div>
                <button type="submit" name="register" value="register" class="btn">Registrasi</button>
            </div>
            <div class="register-link">
                <p>Sudah punya akun silahkan login <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>