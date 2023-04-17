<?php
include "koneksi.php";
?>
<div class="container">
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-6 mt-3">Selamat Datang di Restaurant Rifqi</h1>
        <p class="lead">Silahkan Pilih Menu</p>
    </div>
</div>
<div class="row">
<?php
	$data = mysqli_query($koneksi,"select * from menus");
	while($d = mysqli_fetch_array($data)){
?>

  <div class="col-sm-2">
  <form action="" method="POST">
    <div class="card">
        <img src="gambar/<?php echo $d['foto'] ?>" width="165" height="155">    
            <div class="card-body">
                <?php 
                    echo $d['nama'];
                    echo "<br>";
                    echo $d['harga']."<br>"; 
                 ?>
                 <input type="hidden" name="id" value="<?= $d['id'] ?>">
                 QTY: <input type="text" name="qty">
            </div>
    </div>
        <button class="btn btn-primary" name="beli" >Beli</button>
    </form>
  </div>
  <?php
    }
    ?>
</div>

<?php
if(isset($_POST['beli'])){
    $id_menu = $_POST['id'];
    $qty = $_POST['qty'];
    $id_users =1;
    $query = mysqli_query($koneksi, "insert into transaksis (id_menu,qty,id_users) 
    values ('$id_menu','$qty','$id_users')");
}
?>