<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bukti Penerimaan</title>
</head>
<link href="Admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 30%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "times new roman";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 200mm;
        padding: 20mm;
        margin: 1mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 140mm;
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 147mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<body>
<div class="book">
    <div class="page">
<form method="POST" action="cetak_bukti_pembayaran"> <button class="btn btn-info btn-fill pull-right">Cetak !</button>
      <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px" ></td>
          <td align="center">
            <h5>GEREJA MASEHI INJILI di MINAHASA</h5>
            <h5>JEMAAT GMIM BETHESDA WILAYAH TATELU</h5>
           
            <h5><u><b>BUKTI PEMBAYARAN</b></u></h5>
</td>
        </tr>
            </table>
<p>Diterima dari :<input type="text" name="dari"></p>
<p>Uang sebesar Rp. <input type="number" name="uang"></p>
<br>
<p>Untuk :</p></select></td><td><select name="untuk">
  <?php
    $sql="select * from ma_belanja";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['no_ma'];?> | <?php echo $data['ma']; ?> </option>
  <?php 
    }
  ?>
</select>&nbsp;<input type="number" name="doi1"><br><br>
<select name="untuk1">
    <option value=""></option>
  <?php
    $sql="select * from ma_belanja";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['no_ma'];?> | <?php echo $data['ma']; ?> </option>
  <?php 
    }
  ?>
</select>&nbsp;<input type="number" name="doi2">
<br>
<br>
<select name="untuk2">
    <option value=""></option>
  <?php
    $sql="select * from ma_belanja";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['no_ma'];?> | <?php echo $data['ma']; ?> </option>
  <?php 
    }
  ?>
</select>&nbsp;<input type="number" name="doi3">
<br>
<br>
<select name="untuk3">
    <option value=""></option>
  <?php
    $sql="select * from ma_belanja";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['no_ma'];?> | <?php echo $data['ma']; ?> </option>
  <?php 
    }
  ?>
</select>&nbsp;<input type="number" name="doi4">
<br>
<br>
<select name="untuk4">
    <option value=""></option>
  <?php
    $sql="select * from ma_belanja";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['no_ma'];?> | <?php echo $data['ma']; ?> </option>
  <?php 
    }
  ?>
</select>&nbsp;<input type="number" name="doi5">
<br>
<br>
<br>
<table align="center" width="100%">
    <tr>
        <td></td>
        <td align="center"><input type="date" name="tgl"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
  <tr>  
    <td><center>Dibayar,</center></td>
    <td><center></center></td>
</tr>
<tr>  
    <td><center><b>Bendahara BPMJ</b></center></td>
    <td><center>Yang Menerima,</center></td>
</tr>
<tr>
    <br>
</tr>
<tr>
    <td><br></td>
</tr>
<tr>
    <td><br></td>
</tr>
<tr>
    <td><br></td>
</tr>
<tr>
    <td><br></td>
</tr>
<tr>
    <td align="center"><select name="diaken">
  <?php
    $sql="select * from pelsus";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['nama'];?></option>
  <?php 
    }
  ?>
</select></td><td align="center"><select name="pena">
  <?php
    $sql="select * from pelsus";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['nama'];?></option>
  <?php 
    }
  ?>
</select></td>
</tr>
</table>

</form>
</div>
</div>
</body>
</html>