<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-7 col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3 class="mb-5 mt-3 text-center text-primary">L O G I N</h3>

                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda!">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda!">
                            </div>
                            <div class="d-grid gap-2 text-center">
                                <button name="login" class="btn btn-primary">L O G I N</button>
                                <button name="register" type="button" class="btn btn-success mb-2"><a style="color: white; text-decoration:none;" href="tambah.php">R E G I S T E R</a></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>

<?php
if(isset($_POST['login'])) {
    //echo "proses";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($koneksi,"select * from users where username='$username' AND password='$password'");
    $cek=mysqli_num_rows($query);
    //echo $cek;
    if($cek>0){
        //berhasil login
        $data = mysqli_fetch_array($query);
        session_start();
        $_SESSION['status']="sukses";
        $_SESSION['id_users']=$data['id_users'];
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['nama']=$data['nama'];
        header('location:index.php');
    }
}
?>