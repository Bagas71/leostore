<?php 
require '../backend/functions.php';
 session_start();

 if(!isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
  }


$hasilInputan = query("SELECT tabel_checkout.id, tabel_checkout.nama_pembeli, tabel_checkout.email, 
                    tabel_checkout.alamat, tabel_checkout.kode_pos, tabel_checkout.telpon, tabel_checkout.catatan, 
                    tabel_checkout.nama_barang, tabel_checkout.harga_barang, tabel_jenis_barang.jenis_barang, tabel_checkout.tanggal_pembelian
                    FROM tabel_checkout
                    JOIN tabel_jenis_barang
                    ON tabel_jenis_barang.id = tabel_checkout.jenis_barang ORDER BY tabel_checkout.id DESC");


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Hasil Input Fashion & Beuty-LoeStore</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--responsive table-->
    <link href="css/table-responsive.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        <img src="images/loes.png" alt="" width="146" height="50">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

     
<!-- bagian untuk menampilkan user -->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png" width="33" height="33">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="registration.php"><i class="fa fa-key"></i> Tambah Admin</a></li>  
                <li><a href="logoutweb.php"><i class="fa fa-key"></i> Log Out Web</a></li>
            </ul>
           
        </li>
        <!-- user login dropdown end -->
        <!-- akhir dari sintax untuk menampilkan user -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

        <!-- bagian dari data inputan pria/wanita -->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Inputan Data Barang </span>
                    </a>
                    <ul class="sub">
                         <li><a href="data_input_barang/datainput_barang.php">Inputan Data Barang</a></li>
                    </ul>
                </li>
         <!-- akhir dari data inputan pria/wanita --> 

         <!-- bagian dari data scin care -->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Inputan Jenis Barang</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_jenis_barang.php">Input Data</a></li>
                    </ul>
                </li>
         <!-- akhir dari data inputan scin care -->

          <!-- bagian dari data hasil inputan pria/wanita -->
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-list-alt"></i>
                        <span>Hasil Inputan Barang</span>
                    </a>
                    <ul class="sub">
                    <li>
                        <a href="hasil_input_barang/hasil_input_barang.php">Hasil Inputan Barang</a>
                    </li>
                    </ul>
                </li>
         <!-- akhir dari hasil data inputan pria/wanita -->
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
           <section class="panel panel-primary">
                    <header class="panel-heading">
                        Hasil Inputan
                       
                    </header>
                    <div class="panel-body">
                        <section id="no-more-tables">
                            <table action="" method="post" class="table table-bordered table-striped table-condensed cf">
                                <thead class="cf">
                            <tr>
                                <th> No. </th>
                                <th> Nama Pembeli </th>
                                <th> Email </th>
                                <th> Alamat </th> 
                                <th> Kode Pos </th>
                                <th> No. Hp </th> 
                                <th> Keterangan </th>
                                <th> Nama Barang </th>
                                <th> Harga Barang </th>
                                <th> Jenis Barang </th>
                                <th> Tanggal Pembelian</th>
                                <th> Aksi</th>
                            </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($hasilInputan as $hasil) :?>
                             <tr>
                                <td data-title="No."><?= $i;  ?></td>
                                <td data-title="Nama Pembeli"><?= $hasil["nama_pembeli"] ; ?></td>
                                <td data-title="Email"><?= $hasil["email"] ; ?></td>
                                <td data-title="Alamat"><?= $hasil["alamat"]; ?></td>
                                <td data-title="Kode Pos"><?= $hasil["kode_pos"]; ?></td>
                                <td data-title="No. Hp"><?= $hasil["telpon"]; ?></td>
                                <td data-title="Keterangan"><?= $hasil["catatan"]; ?></td>
                                <td data-title="Nama Barang"><?= $hasil["nama_barang"]; ?></td>
                                <td data-title="Harga Barang"><?= $hasil["harga_barang"]; ?></td>
                                <td data-title="Jenis Barang"><?= $hasil["jenis_barang"]; ?></td>
                                <td data-title="Tanggal Pembelian"><?= $hasil["tanggal_pembelian"]; ?></td>
                                <td data-title="Aksi">
                                    <a href="../backend/hapus_checkout.php?id=<?=$hasil["id"];?>" onclick="return confirm('apakah anda yakin.?')" class="btn btn-danger" >Hapus</a>
                                </td>
                            </tr>
                             <?php $i++; ?>
                            <?php endforeach; ?>
                               
                                </tbody>
                            </table>
                        </section>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>


<!--common script init for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
