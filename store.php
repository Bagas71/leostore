<?php 
require 'admin/backend/functions.php';

	// konfigurasi pagination
$jumlahDataPerhalaman = 9;
$jumlahData = count(query("SELECT tabel_barang.id, tabel_barang.nama_barang, 
                        tabel_barang.jumlah_barang, tabel_barang.harga_barang,
                        tabel_barang.stock_barang, tabel_barang.staus_barang,
                        tabel_jenis_barang.jenis_barang, tabel_barang.gender,
                        tabel_barang.keterangan, tabel_barang.gambar FROM tabel_barang
                        JOIN tabel_jenis_barang ON tabel_jenis_barang.id = tabel_barang.jenis_barang") );
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$hasilStore = query("SELECT tabel_barang.id, tabel_barang.nama_barang, 
                        tabel_barang.jumlah_barang, tabel_barang.harga_barang,
                        tabel_barang.stock_barang, tabel_barang.staus_barang,
                        tabel_jenis_barang.jenis_barang, tabel_barang.gender,
                        tabel_barang.keterangan, tabel_barang.gambar FROM tabel_barang
                        JOIN tabel_jenis_barang ON tabel_jenis_barang.id = tabel_barang.jenis_barang LIMIT $awalData , $jumlahDataPerhalaman");

	//tombol cari
if (isset($_POST['cari']) ) {
	$hasilStore = cari($_POST["keyword"]);
}


 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Store-LoeStore</title>

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

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="" method="post">
									<input class="input" type="text" name="keyword" autocomplete="off" placeholder="Search here">
									<button class="search-btn" name="cari"  type="submit">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
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
						<li class="active"><a href="store.html">Store</a></li>
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
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<!-- tab -->
				<!-- awal slider -->
				<div id="tab3" class="tab-pane fade in active">
					<div class="products-slick" data-nav="#slick-nav-3">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/Fashion.png" alt="" height="177" >
							</div>
							<div class="shop-body">
								<h3>Fashion<br>Collection</h3>
								<a href="fashion.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/beauty.png" alt="" height="177" >
							</div>
							<div class="shop-body">
								<h3>Beauty<br>Collection</h3>
								<a href="beauty.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/gift.png" alt="" height="177" >
							</div>
							<div class="shop-body">
								<h3>Gift<br>Collection</h3>
								<a href="gift.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
							<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/snack.png" alt="" height="177" >
							</div>
							<div class="shop-body">
								<h3>Snack<br>Collection</h3>
								<a href="gift.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
							
				</div>
				<!-- /row -->
				<div id="slick-nav-3" class="products-slick-nav"></div>
			</div>
			<!-- akhir dari slider -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
	

		<!-- SECTION -->
		<div class="section">
			<!-- section title -->
		<center>
			<div class="section-title">
				<h3 class="title">Semua Produk</h3>
			</div>
		</center>
		<!-- /section title -->
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
						<!-- store products -->
						<div class="row">
							 <?php foreach ($hasilStore as $store) :?>
								<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="admin/frontend/data_input_barang/images/<?= $store["gambar"]; ?>" alt="" height="250">
									</div>
									<div class="product-body">
									
										<h3 class="product-name">	<p class="product-category"><?=$store['nama_barang']; ?></p></h3>
										<p class="product-available"><?=$store['staus_barang']; ?></p>
												<h3 class="product-name"><a href="#"><?=$store['jenis_barang']; ?></a></h3>
												<p class="product-available"><?=$store['gender']; ?></p>
												<h4 class="product-price">Rp. <?= number_format($store['harga_barang']);?> </h4>
										<div class="product-btns">
											<button class="quick-view"><a href="product.php?id=<?= $store['id']; ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">Lihat Produk</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-arrow-circle-right"></i><a href="checkout.php?id=<?= $store['id']; ?>"> Checkout</a>
										</button>
									</div>		
								</div>
							</div>
							<!-- /product -->
						<?php endforeach; ?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<!-- halaman atau pagination -->
						<div class="store-filter clearfix">
					
							<ul class="store-pagination">
								<?php if ( $halamanAktif > 1) : ?>
									<li><a href="?halaman=<?= $halamanAktif - 1; ?>"><i class="fa fa-angle-left"></i></a></li>
								<?php endif; ?>


								<?php for ( $i = 1 ; $i <= $jumlahHalaman; $i++) : ?>
									<?php if( $i == $halamanAktif) : ?>
										<li class="active"><a href="?halaman=<?= $i ; ?>"><?= $i ;  ?></a></li>
									<?php else : ?>
										<li ><a href="?halaman=<?= $i ; ?>"><?= $i ;  ?></a></li>
									<?php endif; ?>
								<?php endfor; ?>


								<?php if ( $halamanAktif < $jumlahHalaman) : ?>
									<li><a href="?halaman=<?= $halamanAktif + 1; ?>"><i class="fa fa-angle-right"></i></a></li>
								<?php endif; ?>
							</ul>
						
						</div>
						<!-- /halaman atau pagination -->
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
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
