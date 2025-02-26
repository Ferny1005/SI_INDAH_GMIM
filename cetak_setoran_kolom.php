<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Setoran Kolom</title>
</head>

<body>
        <?php 
 
   
    $nomor = $_REQUEST['nomor'];
    $kolom = $_REQUEST['kolom'];
    $tgl_Awal = $_REQUEST['tgl_Awal'];
    $tgl_akhir = $_REQUEST['tgl_akhir'];
    $derma = $_REQUEST['derma'];
    $keluarga_in = $_REQUEST['keluarga_in'];
    $keluarga = $_REQUEST['keluarga'];
    $i_syukur = $_REQUEST['i_syukur'];
    $persepuluhan = $_REQUEST['persepuluhan'];
    $syukur_kel = $_REQUEST['syukur_kel'];
    $diakonia = $_REQUEST['diakonia'];
    $pembangunan = $_REQUEST['pembangunan'];
    $lain = $_REQUEST['lain'];
    $bapa = $_REQUEST['bapa'];
    $ibu = $_REQUEST['ibu'];
    $pemuda = $_REQUEST['pemuda'];
    $remaja = $_REQUEST['remaja'];
    $anak = $_REQUEST['anak'];
    $kartu_kawan = $_REQUEST['kartu_kawan'];
    $kartu_kawan2 = $_REQUEST['kartu_kawan2'];
    $tempat = $_REQUEST['tempat'];
    $diaken = $_REQUEST['diaken'];
    $pena = $_REQUEST['pena'];
    $tgl = $_REQUEST['tgl'];
    $lainnya = $_REQUEST['lainnya'];
    $jumlah1 = (int)$derma + (int)$i_syukur + (int)$persepuluhan + (int)$syukur_kel + (int)$diakonia+ (int)$pembangunan+ (int)$lain;
    $jumlah2 = (int)$bapa + (int)$ibu + (int)$pemuda + (int)$remaja + (int)$anak;
    $jumlah3 = (int)$kartu_kawan + (int)$kartu_kawan2;



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
 
 
    $angka = $jumlah1+$jumlah2+$jumlah3;

    ?>
<div class="book">
    <div class="page">
<form>
           <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px" ></td>
          <td align="center">
            <h4>GEREJA MASEHI INJILI di MINAHASA</h4>
            <h4>JEMAAT GMIM BETHESDA WILAYAH TATELU</h4>
            <h4><b>SETORAN KOLOM</b></h4>
            </td>
        </tr>
            </table>
            <p>Nomor : <?php echo $nomor ; ?></p>
 </center>
<p>Kepada : Bendahara BPMJ</p>
<p>Dari &nbsp;&nbsp;&nbsp;&nbsp; : Penatua Diaken Kolom <?php echo $kolom ; ?></p>

<p>Harap diterima setoran keuangan dengan perincian sebagai berikut :</p>
<p>Keadaan tanggal <?php echo date("d-m-Y",strtotime($tgl_Awal)) ; ?> s/d <?php echo date("d-m-Y",strtotime($tgl_akhir)) ; ?> (untuk minggu I, II, III, IV, V)</p>
<table>
    <tr>
        <td>1.</td>
        <td>- Uang Persembahan (derma)</td>
        <td>Rp. <?php echo $derma ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Persembahan Ibadah Syukur Kel: <?php echo $keluarga_in ; ?></td>
        <td>Rp. <?php echo $i_syukur ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Persembahan Persepuluhan</td>
        <td>Rp. <?php echo $persepuluhan ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Sampul Syukur Keluarga : <?php echo $keluarga ; ?></td>
        <td>Rp. <?php echo $syukur_kel ; ?></td>
    </tr>
     <tr>
        <td></td>
        <td>- Uang Diakonia</td>
        <td>Rp. <?php echo $diakonia ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Uang Pembangunan</td>
        <td>Rp. <?php echo $pembangunan ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Lain-Lain :  <?php echo $lainnya ; ?></td>
        <td>Rp. <?php echo $lain ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><center>JUMLAH</center></td>
        <td><center>Rp. <?php echo $jumlah1 ; ?></center></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Setoran BIPRA :</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>- Pria/Kaum Bapa</td>
        <td>Rp. <?php echo $bapa ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Wanita/Kaum Ibu </td>
        <td>Rp. <?php echo $ibu ; ?></td>
    </tr>
     <tr>
        <td></td>
        <td>- Pemuda</td>
        <td>Rp. <?php echo $pemuda ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Remaja</td>
        <td>Rp. <?php echo $remaja ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>- Anak Sekolah Minggu</td>
        <td>Rp. <?php echo $anak ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><center>Rp. <?php echo $jumlah2 ; ?></center></td>
    </tr>
     <tr>
        <td>3.</td>
        <td>Setoran Dana Khusus Lainnya :</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>(untuk setoran yang sifatnya insidentil, misalnya :<br>Kartu Kawan Panitia SMST/SMS)</td>
        <td>Rp. <?php echo $kartu_kawan ; ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><center>Rp. <?php echo $kartu_kawan2 ; ?></center></td>
    </tr>
    <tr>
        <td></td>
        <td><center>JUMLAH</center></td>
        <td><center>Rp. <?php echo $jumlah3 ; ?></center></td>
    </tr>
    <tr><td></td><td></td><td></td></tr>
    <tr>
        <td></td>
        <td>Jumlah Setoran Seluruhnya (1 + 2 + 3)</td>
        <td><center>Rp.<?php echo $angka ; ?></td>
    </tr>
      <tr>
        <td></td>
        <td>(Jumlah dengan huruf : <?php echo terbilang($angka); ?> rupiah )</td>
    </tr>

</table><br>
<table align="right">
     <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><center><?php echo $tempat ; ?>,<?php echo date("d-m-Y",strtotime($tgl)) ; ?></center></td>
    </tr>
</table><br><br>
<table align="center" width="100%">
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
    <td><center>Diaken/Penatua<?php echo $diaken ; ?></center></td>
    <td><center>Diaken/Penatua<?php echo $pena ; ?></td></center>
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