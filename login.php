<?php
    session_start();
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ke Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <?php
            if(isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                $data = mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password'");
                $cek = mysqli_num_rows($data);
                if($cek > 0){
                    $data = mysqli_fetch_assoc($data);
                    if($data['level']=="admin"){
                 
                        $_SESSION['username'] = $username;
                        $_SESSION['id_user'] = $data['id_user'];
                        $_SESSION['level'] = "admin";
                        header("location:admin/index.php");
                 
                    }else if($data['level']=="petugas"){
                
                        $_SESSION['username'] = $username;
                        $_SESSION['id_user'] = $data['id_user'];
                        $_SESSION['level'] = "petugas";
                
                        header("location:petugas/index.php");

                    }else if($data['level']=="peminjam"){

                        $_SESSION['username'] = $username;
                        $_SESSION['id_user'] = $data['id_user'];
                        $_SESSION['level'] = "peminjam";
                
                        header("location:peminjam/index.php");
                    }else{
                
                        header("location:index.php?pesan=gagal");
                    }	
                }else{
                    header("location:index.php?pesan=gagal");
                }
            }
                 
        ?> 
        <form method="post" action="    ">
            <h1>Login</h1>
            <div class="input-box">
                <input id="inputEmailAddress" type="text" name="username" placeholder="Username"
                required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input id="inputPassword" type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <!-- <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
            </div> -->

            <button type="submit" name="login" value="login" class="btn">Login</button>

            <div class="register-link">
                <p>buatlah akun terlebih dahulu <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>