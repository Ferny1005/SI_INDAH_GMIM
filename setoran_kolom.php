<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Setoran Kolom</title>
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
<form method="POST" action="cetak_setoran_kolom"> <button class="btn btn-info btn-fill pull-right">Cetak !</button>
            <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px" ></td>
          <td align="center">
            <h5>GEREJA MASEHI INJILI di MINAHASA</h5>
            <h5>JEMAAT GMIM BETHESDA WILAYAH TATELU</h5>
            <h5><b><u>SETORAN KOLOM</u></b></h5>
</td>
        </tr>
            </table>
            <p>Nomor : <input type="text" name="nomor"></p>

<p>Kepada : Bendahara BPMJ</p>
<p>Dari &nbsp;&nbsp;&nbsp;&nbsp; : <select name="kolom">
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
</select></p>
<br>
<p>Harap diterima setoran keuangan dengan perincian sebagai berikut :</p>
<p>Keadaan tanggal <input type="date" name="tgl_Awal"> s/d <input type="date" name="tgl_akhir"> (untuk minggu I, II, III, IV, V)</p>
<table>
    <tr>
        <td>1.</td>
        <td>- Uang Persembahan (derma)</td>
        <td>Rp. <input type="number" name="derma"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Persembahan Ibadah Syukur Kel: <input type="text" name="keluarga_in"></td>
        <td>Rp. <input type="number" name="i_syukur"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Persembahan Persepuluhan</td>
        <td>Rp. <input type="number" name="persepuluhan"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Sampul Syukur Keluarga : <input type="text" name="keluarga"></td>
        <td>Rp. <input type="number" name="syukur_kel"></td>
    </tr>
     <tr>
        <td></td>
        <td>- Uang Diakonia</td>
        <td>Rp. <input type="number" name="diakonia"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Uang Pembangunan</td>
        <td>Rp. <input type="number" name="pembangunan"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Lain-Lain :  <input type="text" name="lainnya"></td>
        <td>Rp. <input type="number" name="lain"></td>
    </tr>
    
    <tr>
        <td>2.</td>
        <td>Setoran BIPRA :</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>- Pria/Kaum Bapa</td>
        <td>Rp. <input type="number" name="bapa"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Wanita/Kaum Ibu </td>
        <td>Rp. <input type="number" name="ibu"></td>
    </tr>
     <tr>
        <td></td>
        <td>- Pemuda</td>
        <td>Rp. <input type="number" name="pemuda"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Remaja</td>
        <td>Rp. <input type="number" name="remaja"></td>
    </tr>
    <tr>
        <td></td>
        <td>- Anak Sekolah Minggu</td>
        <td>Rp. <input type="number" name="anak"></td>
    </tr>
    
     <tr>
        <td>3.</td>
        <td>Setoran Dana Khusus Lainnya :</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>(untuk setoran yang sifatnya insidentil, misalnya :<br>Kartu Kawan Panitia SMST/SMS)</td>
        <td>Rp. <input type="number" name="kartu_kawan"></td>
    </tr>
     <tr>
        <td></td>
        <td></td>
        <td><center>Rp.<input type="number" name="kartu_kawan2"> </center></td>
    </tr>

</table><br>
<table align="right">
     <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><center><input type="text" name="tempat">,<input type="date" name="tgl"></center></td>
    </tr>
</table><br><br>
<table align="center">
  <tr>  
    <td><center>Yang Menyetor</center></td>
    <td><center>Yang Menerima Bendahara,</center></td>
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
</select></td></center>
</tr>
</table>

</form>
    </div>
 
   
</div>
</body>
</html>