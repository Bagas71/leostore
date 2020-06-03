<?php    
require 'admin/backend/functions.php';
global $conn;
 
 
  $hasilView = mysqli_query($conn, "SELECT tabel_barang.id, tabel_barang.nama_barang, 
                        tabel_barang.jumlah_barang, tabel_barang.harga_barang,
                        tabel_barang.stock_barang, tabel_barang.staus_barang,
                        tabel_jenis_barang.jenis_barang, tabel_barang.gender,
                        tabel_barang.keterangan, tabel_barang.gambar FROM tabel_barang
                        JOIN tabel_jenis_barang ON tabel_jenis_barang.id = tabel_barang.jenis_barang WHERE tabel_barang.id = '$_GET[id]'");
  $view  = mysqli_fetch_array($hasilView);


//apakah tombol submit/tambah sudah di tekan
if (isset($_POST["kirim"])) {
 
 
    if (kirim($_POST) > 0) {
        // data berhasil ditambahkan
        echo "
            <script>
               alert('Permintaan Telah Dikirim!')
                document.location.href = 'informasi.php';
               die;
            </script>

        ";
    }else{
        // data gagal di tambahkan
        echo "
            <script>
                alert('data gagal dikirim!');
            </script>
            ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Checkout - LoeStore</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a><i class="fa fa-phone"></i> 0852-4283-2590 </a></li>
						<li><a><i class="fa fa-map-marker"></i> Jl. Perintis Kemerdekaan KM. 10 (Kampus 1 PNUP)</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="tentang.php"><i class="fa fa-user-o"></i> Tentang Kami </a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/loes.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->	

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="store.php">Store</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Masukkan Alamat Anda</h3>
							</div>
							<div class="section-title">
								<h5>Harap isi form dibawah ini dengan lengkap dan benar sesuai idenditas anda!</h5>
							</div>
							<form action="" method="post">
							<div class="form-group">
								<input class="input" type="text" required name="nama" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
								<input class="input" type="email" required name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" required name="alamat" placeholder="Alamat">
							</div>
							<div class="form-group">
								<input class="input" type="text" required name="kode" placeholder="Kode Pos">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telpon">
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" required name="catatan" placeholder="Keterangan"></textarea>
						</div>
						<!-- /Order notes -->
					
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div><?= $view['nama_barang']; ?></div>
									<div>Rp. <?= number_format($view['harga_barang']);?></div>
								</div>
							</div>
							<div class="order-col">
								<div>Categori</div>
								<div><strong><?= $view['jenis_barang']; ?></strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">Rp. <?= number_format($view['harga_barang']);?></strong></div>
							</div>
						</div>
						<center>
						<button name="kirim" class="primary-btn order-submit">Place order</button>
						</center>
							</form>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

	

		<!-- FOOTER -->
		<footer id="footer">
			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;AB<script>document.write(new Date().getFullYear());</script> UKM WIRAUSAHA PNUP
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>


	</body>
</html>
