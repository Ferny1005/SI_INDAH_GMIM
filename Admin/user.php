<?php
include ('../koneksi.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>GMIM</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']!=="User"){
        header("location:../index.php?pesan=gagal");
    }
 
    ?>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sinode.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <img src="../images/Logo-GMIM.png" width="80px">
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="user.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li><!--
                 <li>
                    <a href="user.php?p=inventaris">
                        <i class="pe-7s-science"></i>
                        <p>Inventaris Barang</p>
                    </a>
                </li>
                <li>
                    <a href="user.php?p=inven_tanah">
                        <i class="pe-7s-science"></i>
                        <p>Inventaris Tanah & Bangunan</p>
                    </a>
                </li>
                 <li>
                    <a href="user.php?p=table">
                        <i class="pe-7s-user"></i>
                        <p>Data BPMJ</p>
                    </a>
                </li>-->
            </ul>
    	</div>
    </div>

   

    <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User | <?php echo $_SESSION['nama']; ?></a>
                </div>
                <div class="collapse navbar-collapse">
                  
                    <ul class="nav navbar-nav navbar-right">
                       
                       <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Cetak Laporan
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="../nota_permintaan.php">Nota Permintaan</a></li>
                                <li><a href="../setoran_kolom.php">Setoran Kolom</a></li>
                                 <li><a href="../bukti_penerimaan.php">Bukti Penerimaan</a></li>
                                  <li><a href="../bukti_pembayaran.php">Bukti Pembayaran</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="../logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>



<div>
     <div class="card">
                            <div class="header">
                                <h4 class="title">SISTEM INFORMASI KAS</h4>
                                    <p class="category">GEREJA MASEHI INJILI di MINAHASA</p>
                            </div>

 
</div>
     <?php
    error_reporting(0);
    switch ($_GET['p']) 
    {
        default :
        echo "<br><h2><center>Selamat datang ";
        echo $_SESSION['nama'];
        echo " !</center></h2>";
        break;

        case 'table';
          include ('s_pelsus.php');
            break;

        case 'inventaris';
          include ('s_inven.php');
            break;
            
            case 'inven_tanah';
          include ('s_tanah.php');
            break;

            case 'bku_m';
          include ('tambah_penerimaan.php');
            break;
            case 'bku_k';
          include ('tambah_pengeluaran.php');
            break;
    }
    ?>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
