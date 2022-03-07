<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500;800&display=swap" rel="stylesheet">
    <title>FORM BELANJA ONLINE</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kanit:wght@100;500;800&display=swap");
:root {
  --main-color: #76b900;
}
html,
body,
* {
  font-family: "Kanit", sans-serif;
}
.my-nav {
  background-color: 		#8B0000;
  min-height: 60px;
  font-size: 10px;
}
.navbar-brand {
  font-size: 2.5em;
  font-weight: 800;
  letter-spacing: 3px;
}
    </style>
</head>
<body>

<!-- Navigation Bar Start -->
<nav class="navbar navbar-expand-lg navbar-dark my-nav sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">FORM BELANJA ONLINE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>
<!-- Navigation Bar End -->

<!-- Form Start -->
<br><br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container-fluid">
    <h1> Belanja Online</h1>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
                <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi"> 
        <label for="produk_0" class="custom-control-label">Televisi</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
				</div>
				<div class="col-md-4">
					<table class="table table-sm table-striped">
						<thead>
							<h4>Daftar Harga</h4>
						</thead>
						<tbody>
							<tr>
								<td>
									Televisi
								</td>
								<td>
									:
								</td>
								<td>
									Rp.4.200.000
								</td>
							</tr>
							<tr class="table-active">
								<td>
									Kulkas
								</td>
								<td>
									:
								</td>
								<td>
									Rp.3.100.000
								</td>
							</tr>
							<tr class="table-success">
								<td>
									Mesin Cuci
								</td>
								<td>
									:
								</td>
								<td>
									Rp.3.800.000
								</td>
							</tr>
						</tbody>
					</table>
                    <h5>Harga Dapat berubah setiap saat</h5>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Form End -->

<?php 
error_reporting(0);
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$kirim = $_POST['kirim'];

if ($produk == 'Televisi') {
	$total = $jumlah * 4200000;
}
elseif ($produk == 'Kulkas') {
	$total = $jumlah * 3100000;
}
elseif ($produk == 'Mesin Cuci') {
	$total = $jumlah * 3800000;
}


  echo 'Nama Customer : '.$customer;
  echo '<br/> Produk Pilihan : '.$produk;
  echo '</br> Jumlah Beli : '.$jumlah;
  echo '</br> Total Belanja : '.$total;

?>
</body>
</html>