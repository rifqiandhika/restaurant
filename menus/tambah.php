<title>Tambah Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<div class="container">
		<h2 style="text-align: center;">Tambah Menu</h2>
		<form action="?page=menus/simpan" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group">
				<label>Harga :</label>
				<input type="number" class="form-control" placeholder="Masukkan Harga" name="harga" required="required">
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="simpan" class="btn btn-primary">
		</form>
	</div>