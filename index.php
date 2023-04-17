<?php
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:aliceblue; text-decoration:none;" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:aliceblue; text-decoration:none;" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:aliceblue; text-decoration:none;" href="?page=menus/index">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:aliceblue; text-decoration:none;" href="?page=menus/transaksis">transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:darkorange; text-decoration:none;" href="logout.php">LogOut</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
  $nama = $_SESSION['nama'];
  echo "$nama";
?>
<div class="container">
    <?php include "isi.php" ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>