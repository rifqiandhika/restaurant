<?php
include "koneksi.php";
?>

<div class="container">
    <div class="mt-3">
        <h2 class="text-center">Data Transaksi Restaurant</h2>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Transaksi Restaurant
            </div>

            <div class="card-body">
                <table class="table table-bordered tabel-striped tabel-hover">
                    <tr class="text-center">
                        <td>No</td>
                        <td>Nama</td>
                        <td>qty</td>
                        <td>Harga</td>
                        <td>Jumlah</td>
                        <td>Aksi</td>
                    </tr>
                    <?php
                    $i= 1;
                    $total = 0;
                    $query = mysqli_query($koneksi, "SELECT menus.nama,transaksis.qty,menus.harga from menus,transaksis where menus.id=transaksis.id_menu and transaksis.status = 0");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr align="center">
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['qty'] ?></td>
                            <td><?php echo $data['harga'] ?></td>
                            <td><?php echo $data['harga']*$data['qty']  ?></td>
                            <td> <button class="btn btn-danger btn-sm"><a style="color:white; text decoration:none;" href="?page=menus/hapus&id=<?php echo $data['id'] ?>">Hapus</a></button></td>
                        </tr>
            </div>
        </div>
    <?php
    $total = $data['qty']*$data['harga']+$total;
                   }
    ?>
    <tr align="center">
        <td colspan="4">Total</td>
        <td><?php echo $total ?></td>
    </tr>
</table>
<form action="" method="post">
<button class="btn btn-primary" name="selesai" >Selesai</button>
</form>
<?php
if(isset($_POST['selesai'])){ echo "proses selesai";
    $id_users = $_SESSION['id_users'];
        $query = mysqli_query($koneksi, "update transaksis set id_users = '$id_users', status = '1' where status = '0'");
        echo "<script>window.location = '?page=menus/transaksis';</script>";
}
?>