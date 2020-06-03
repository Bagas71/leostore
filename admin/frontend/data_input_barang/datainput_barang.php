<?php
require '../../backend/functions.php';

//apakah tombol submit/tambah sudah di tekan
if (isset($_POST["tambahBarang"])) {
 
 
    if (tambahbarang($_POST) > 0) {
        // data berhasil ditambahkan
        echo "
            <script>
               alert('data berhasil ditambahkan!')
                document.location.href = '../hasil_input_barang/hasil_input_barang.php';
            </script>

        ";
    }else{
        // data gagal di tambahkan
        echo "
            <script>
                alert('data gagal ditambahkan!')
                document.location.href = '../data_input_barang/datainput_barang.php';
            </script>
            ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Inputan Data Barang-LoeStore</title>

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

    <a href="../index.php" class="logo">
        <img src="images/loes.png" alt="" width="146" height="50">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    
    <!--  notification end -->
</div>
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
                <li><a href="../registration.php"><i class="fa fa-key"></i> Tambah Admin</a></li>  
                <li><a href="../logoutweb.php"><i class="fa fa-key"></i> Log Out Web</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->           
         <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="../index.php">
                    <i class="fa fa-sign-out"></i>
                    <span>Kembali</span>
                </a>
            </li>
    
         
         </div>        
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

       <div class="col-lg-12">
                <section class="panel panel-success">
                    <header class="panel-heading">
                        Input Data 
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <center><h1>Masukan Data Baru</h1></center>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                                
                            <div class="form-group">
                                <label for="nama" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Nama Barang  </label>
                                <div class="col-lg-10">
                                    <input type="text" name="nama" required class="form-control" id="nama" placeholder="Masukkan Nama Barang Baru...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Jumlah Barang  </label>
                                <div class="col-lg-10">
                                    <input type="text" name="jumlah" required class="form-control" id="jumlah" placeholder="Masukkan Jumlah Barang Baru...">
                                </div>
                            </div>
                                 <div class="form-group">
                                <label for="harga" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Harga Barang  </label>
                                <div class="col-lg-10">
                                    <input type="text" name="harga" required class="form-control" id="harga" placeholder="Masukkan Harga Barang Baru...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stock" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Stock Barang  </label>
                                <div class="col-lg-10">
                                    <input type="text" name="stock" required class="form-control" id="stock" placeholder="Masukkan Jumlah Stock Barang Baru...">
                                </div>
                            </div>
                         
                              <div class="form-group">
                                <label for="keterangan" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Keterangan</label>
                                <div class="col-lg-10">
                                    <input type="text" name="keterangan" required class="form-control" id="keterangan" placeholder="Masukkan Keterangan Baru...">
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="status" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Status Barang</label>
                                 <div class="col-lg-10">
                                    <select id="status" required class="form-control m-bot15" name="status">
                                    <option></option>
                                    <option>  Ready </option>
                                    <option>  Pre Order </option>   
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Jenis Barang</label>
                                 <div class="col-lg-10">
                                    <select id="jenis" required class="form-control m-bot15" name="jenis">
                                    <option></option>
                                     <?php 
                                        $sqljenis = mysqli_query($conn, "SELECT*FROM tabel_jenis_barang") or die (mysqli_error($conn));
                                            while ($jenisbarang = mysqli_fetch_array($sqljenis)) {
                                        echo '<option value = "'.$jenisbarang['id'].'">'.$jenisbarang['jenis_barang'].'</option>';
                                    } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Gender</label>
                                 <div class="col-lg-10">
                                    <select id="gender" required class="form-control m-bot15" name="gender">
                                    <option> </option>
                                    <option> - </option>
                                    <option>  Pria </option>
                                    <option>  Wanita </option>   
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="gambar" class="col-lg-2 col-sm-2 control-label" style="text-align: justify;">Gambar</label>
                                <div class="col-lg-10">
                                    <input type="file" name="gambar" width="50" height="50" class="form-control" id="gambar" >
                                </div>
                            </div>


            
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" name="tambahBarang"  class="btn btn-success btn-sm">Simpan</button> 
                                     <button type="reset" name="reset" value="reset form"  class="btn btn-danger">Reset</button> 
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    <!--main content end-->




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
<!-- <script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script> -->


<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
