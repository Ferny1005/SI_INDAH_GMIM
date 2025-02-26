<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bukti Penerimaan</title>
</head>
 <?php 
    $dari = $_REQUEST['dari'];
    $untuk = $_REQUEST['untuk'];
    $untuk1 = $_REQUEST['untuk1'];
    $untuk2 = $_REQUEST['untuk2'];
    $untuk3 = $_REQUEST['untuk3'];
    $untuk4 = $_REQUEST['untuk4'];
    $tgl = $_REQUEST['tgl'];
    $diaken = $_REQUEST['diaken'];
    $pena = $_REQUEST['pena'];
    $doi1 = $_REQUEST['doi1'];
    $doi2 = $_REQUEST['doi2'];
    $doi3 = $_REQUEST['doi3'];
    $doi4 = $_REQUEST['doi4'];
    $doi5 = $_REQUEST['doi5'];
    $uang = (int)$doi1 + (int)$doi2 + (int)$doi3 + (int)$doi4 + (int)$doi5;


 function penyebut($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " ". $huruf[$nilai];
        } else if ($nilai <20) {
            $temp = penyebut($nilai - 10). " belas";
        } else if ($nilai < 100) {
            $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
        }     
        return $temp;
    }
 
    function terbilang($nilai) {
        if($nilai<0) {
            $hasil = "minus ". trim(penyebut($nilai));
        } else {
            $hasil = trim(penyebut($nilai));
        }           
        return $hasil;
    }
 
    ?>
<body>
<div class="book">
    <div class="page">
<form method="POST" action="cetak_bukti_penerimaan.php">
   <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px" ></td>
          <td align="center">
            <h3>GEREJA MASEHI INJILI di MINAHASA</h3>
            <h3>JEMAAT GMIM BETHESDA WILAYAH TATELU</h3>
           
            <h3><u>BUKTI PENERIMAAN</u></h3>
</td>
        </tr>
            </table>
<p>Diterima dari :<?php echo $dari ; ?></p>
<p>Uang sebesar Rp. <?php echo $uang ; ?></p>
<p>Terbilang <?php echo terbilang($uang); ?> Rupiah</p>
<br>
<p>Untuk :</p><?php echo $untuk ; ?> <?php echo $doi1 ; ?>
<br>
<?php echo $untuk1 ; ?> <?php echo $doi2 ; ?>
<br>
<?php echo $untuk2 ; ?> <?php echo $doi3 ; ?>
<br>
<?php echo $untuk3 ; ?> <?php echo $doi4 ; ?>
<br>
<?php echo $untuk4 ; ?> <?php echo $doi5 ; ?>
<br>
<p>Total : Rp. <?php echo $uang ; ?></p>
<br>
<br><br>
<table align="center" width="100%">
  <tr>
      <td></td>
      <td align="center"><?php echo date("d-m-Y",strtotime($tgl)) ; ?></td>
  </tr>
  <tr>  
    <td><center>Penyetor</center></td>
    <td><center>Yang Menerima Bendahara BPMJ/W</center></td>
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
    <td align="center"><?php echo $diaken ; ?></td><td align="center"><?php echo $pena ; ?></td>
</tr>
</table>

</form>
</div>
</div>
    <script>
        window.print();
    </script>
</body>
</html>