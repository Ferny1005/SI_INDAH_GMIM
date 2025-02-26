<?php
include ('../koneksi.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>INDAH GMIM</title>

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
    if($_SESSION['level']!=="Admin"){
        header("location:../?pesan=gagal");
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
                    <a href="../admin/">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                 <li>
                    <a href="?p=peng">
                        <i class="pe-7s-look"></i>
                        <p>Daftar User</p>
                    </a>
                </li>
                 <li>
                    <a href="?p=inventaris">
                        <i class="pe-7s-science"></i>
                        <p>Inventaris Barang</p>
                    </a>
                </li>
                 <li>
                    <a href="?p=inven_tanah">
                        <i class="pe-7s-science"></i>
                        <p>Inventaris Tanah & Bangunan</p>
                    </a>
                </li>
                 <li>
                    <a href="?p=table">
                        <i class="pe-7s-user"></i>
                        <p>Data BPMJ</p>
                    </a>
                </li>
                <li>
                    <a href="?p=t_bank">
                        <i class="pe-7s-note2"></i>
                        <p>Buku Bank</p>

                    </a>
                </li>
                 <li>
                    <a href="?p=ma">
                        <i class="pe-7s-note2"></i>
                        <p>Mata Anggaran</p>

                    </a>
                </li>
                
               
               
				
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
                    <a class="navbar-brand" href="#">Admin | <?php echo $_SESSION['nama']; ?></a>
                </div>
                <div class="collapse navbar-collapse">
                  
                    <ul class="nav navbar-nav navbar-right">
                       <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Data BKU
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="?p=bku_m">Bukti Penerimaan</a></li>
                                <li><a href="?p=bku_k">Bukti Pengeluaran</a></li>
                                <li class="divider"></li>
                                <li><a href="../pendapatan_jemaat">Pendapatan Jemaat</a></li>
                                <li><a href="../anggaran_belanja">Anggaran Belanja</a></li>
                              </ul>
                        </li>
                       <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Cetak Laporan
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="../nota_permintaan">Nota Permintaan</a></li>
                                <li><a href="../setoran_kolom">Setoran Kolom</a></li>
                                 <li><a href="../bukti_penerimaan">Bukti Penerimaan</a></li>
                                  <li><a href="../bukti_pembayaran">Bukti Pembayaran</a></li>
                                  <li class="divider"></li>
                                  <li><a href="data_bku">Buku Kas Umum</a></li>
                                  <li><a href="data_bank">Buku Bank</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="../logout">
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
                                <h4 class="title">INDAH - INFORMASI PERBENDAHARAAN</h4>
                                    <p class="category">GEREJA MASEHI INJILI di MINAHASA</p>
                            </div>

     <?php
    error_reporting(0);
    switch ($_GET['p']) 
    {
        default :
        include ('awal_halaman.php');
        break;

        case 'table';
          include ('data_pelsus.php');
            break;
        
         case 'tm_pl';
          include ('tambah_pelsus.php');
            break;

        case 'peng';
          include ('pengguna.php');
            break;

             case 'tm_peng';
          include ('tambah_pengguna.php');
            break;

            case 'inventaris';
          include ('inventaris.php');
            break;

            case 'inven';
          include ('tambah_inven.php');
            break;

            case 'tm_tanah';
          include ('tambah_inven_tanah.php');
            break;

            case 'inven_tanah';
          include ('inven_tanah.php');
            break;

            case 'bku_m';
          include ('tambah_penerimaan.php');
            break;

            case 'bku_k';
          include ('tambah_pengeluaran.php');
            break;

            case 'ma';
          include ('ma_masuk.php');
            break;
             case 'tam_ma_dap';
          include ('tambah_ma_pendapatan.php');
            break;
             case 'tam_ma_bel';
          include ('tambah_ma_belanja.php');
            break;
             case 't_bank';
          include ('tambah_bank.php');
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
