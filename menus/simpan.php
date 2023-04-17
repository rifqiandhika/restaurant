<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?page=menus/index alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO menus VALUES(NULL,'$nama','$harga','$xx')");
		header("location:index.php?page=menus/index");
	}else{
		header("location:index.php?page=menus/index alert=gagak_ukuran");
	}
}