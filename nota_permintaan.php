<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nota Permintaan</title>
</head>
<link href="Admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
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
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
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
<form method="POST" action="cetak_nota_permintaan"> <button class="btn btn-info btn-fill pull-right">Cetak !</button>
         <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px"></td>
          <td align="center">
            <h5>GEREJA MASEHI INJILI di MINAHASA</h5>
            <h5>JEMAAT GMIM BETHESDA WILAYAH TATELU</h5>
            <h5><b><u>NOTA PERMINTAAN</u></b></h5>
        </td>
        </tr>
            </table>
            <table width="100%">
                <tr>
                    <td>Kompelka BIPRA, Komisi/Panitia : <input type="text" name="panitia"></td>
                    <td align="right">TANGGAL : <input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>LAMPIRAN</td>
                    <td align="right">NOMOR : <input type="text" name="nomor"></td>
                </tr>
            </table>
<div style="border:1px solid black;" >
<p>Permintaan Pembayaran sebagai berikut :</p>
<ol type="a">
    <li>Jumlah pembayaran yang diterima</li>
    <ol type="1">
        <li>Dengan angka Rp <input type="number" name="angka"></li>
        <li>Dengan huruf</li>
    </ol><br>
    <li>Untuk Keperluan</li>
    <li>Mata Anggaran</li>
    <li>Penerima Uang</li>
    <li>Cara Pembayaran :</li>
    <p>Cash / Transfer</p>
</ol>

<table border="1" width="99%" style="solid #999;
    padding: 8px 20px;
     font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;" align="center">
    <thead align="center" style="font-size: 12px">
        <td>No &nbsp;</td>
        <td>Jenis Permintaan</td>
        <td>Jumlah Dianggarkan Dalam ABP (W/J)</td>
        <td>Realisasi Anggaran Sampai Yang Lalu</td>
        <td>Jumlah Permintaan Saat Ini</td>
        <td>Jumlah Permintaan Sampai Saat Ini</td>
        <td>Sisa Anggaran</td>
    </thead>
    <tbody>
        <tr>
        <td align="center">1.</td>
        <td><input type="text" name="a2" style="width: 100px;"></td>
        <td><input type="number" name="a3"style="width: 100px;"></td>
        <td><input type="number" name="a4" style="width: 100px;"></td>
        <td><input type="number" name="a5" style="width: 100px;"></td>
        <td><input type="number" name="a6" style="width: 80px;"></td>
        <td><input type="number" name="a7"style="width: 80px;"></td>
        </tr>
         <tr>
        <td align="center">2.</td>
        <td><input type="text" name="b2" style="width: 100px;"></td>
        <td><input type="number" name="b3"style="width: 100px;"></td>
        <td><input type="number" name="b4" style="width: 100px;"></td>
        <td><input type="number" name="b5" style="width: 100px;"></td>
        <td><input type="number" name="b6" style="width: 80px;"></td>
        <td><input type="number" name="b7"style="width: 80px;"></td>
        </tr>
         <tr>
        <td align="center">3.</td>
        <td><input type="text" name="c2" style="width: 100px;"></td>
        <td><input type="number" name="c3"style="width: 100px;"></td>
        <td><input type="number" name="c4" style="width: 100px;"></td>
        <td><input type="number" name="c5" style="width: 100px;"></td>
        <td><input type="number" name="c6" style="width: 80px;"></td>
        <td><input type="number" name="c7"style="width: 80px;"></td>
        </tr>
         <tr>
       <td align="center">4.</td>
        <td><input type="text" name="d2" style="width: 100px;"></td>
        <td><input type="number" name="d3"style="width: 100px;"></td>
        <td><input type="number" name="d4" style="width: 100px;"></td>
        <td><input type="number" name="d5" style="width: 100px;"></td>
        <td><input type="number" name="d6" style="width: 80px;"></td>
        <td><input type="number" name="d7"style="width: 80px;"></td>
        </tr>
         <tr>
        <td align="center">5.</td>
        <td><input type="text" name="e2" style="width: 100px;"></td>
        <td><input type="number" name="e3"style="width: 100px;"></td>
        <td><input type="number" name="e4" style="width: 100px;"></td>
        <td><input type="number" name="e5" style="width: 100px;"></td>
        <td><input type="number" name="e6" style="width: 80px;"></td>
        <td><input type="number" name="e7"style="width: 80px;"></td>
        </tr>
         <tr>
        <td></td>
        <td align="right"><i>Jumlah</i></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
    </tbody>
</table>
<p><i>Terbilang :</i></p>
<br>
<br>

</div>
<table width="100%">
     <tr>
        <td align="left">Mengetahui/Menyetujui,</td>
        <td align="right"><input type="text" name="tempat">,<input type="date" name="tgl"></td>
    </tr>
</table>
<table align="center" width="100%">
  <tr>  
    <td><center><b>Ketua BPM(J/()</b></center></td>
    <td><center><b><select name="ketua">
  <?php
    $sql="select * from pelsus";
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
   ?>
    <option><?php echo $data['jabatan'];?></option>
  <?php 
    }
  ?>
</select></b></center></td>
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
    <td><center><select name="diaken">
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
</select></center></td>
    <td><center><select name="pena">
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
</select></center></td>
</tr>
</table>
<p>Lunas dibayar pada tanggal :<input type="date" name="lunas_tgl"></p>
<p>Bendahara BPMJ/W</p>
<br>
<br><br>
<select name="bend">
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
</select>
</form>
    </div>
 
   
</div>
</body>
</html>