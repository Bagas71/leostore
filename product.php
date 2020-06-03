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



?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>LeoStore</title>

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
						<li><a href="tentang.php"><i class="fa fa-user-o"></i>Tentang Kami</a></li>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="store.php">Store</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- section title -->
		<center>
			<div class="section-title">
				<h3 class="title">Detail Produk</h3>
			</div>
		</center>
		<!-- /section title -->
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product">
							<div class="product-preview">
								<img src="admin/frontend/data_input_barang/images/<?= $view['gambar']; ?>" alt=""  height="350">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?= $view['nama_barang']; ?></h2>
							<div>
								<h3 class="product-price" class="product-rating">Rp. <?= number_format($view['harga_barang']);?>
							</div>
							<ul class="product-btns">
								<li>Keterangan : </li>
							</ul>
							<p style="font-size: 18px;"><?= $view['keterangan'] ?></p>

	
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-arrow-circle-right"></i><a href="checkout.php?id=<?= $view['id']; ?>"> Checkout</a>
								</button>
							</div>

							<ul class="product-btns">
								<li>Stock : </li>
								<li><?= $view['stock_barang']; ?></li>
							</ul>
								<ul class="product-btns">
								<li>Gender :</li>
								<li><?= $view['gender']; ?></a></li>
							</ul>
							<ul class="product-btns">
								<li>Category :</li>
								<li><?= $view['jenis_barang']; ?></a></li>
							</ul>

							<ul class="product-btns">
								<li>Status :</li>
								<li><?= $view['staus_barang']; ?></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->
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
