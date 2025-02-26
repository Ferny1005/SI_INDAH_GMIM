<!DOCTYPE html >
<html>
<head>
<title> Cetak Nota Permintaan </title>

</head>
<body>
            <?php 
    $panitia = $_REQUEST['panitia'];
    $tanggal = $_REQUEST['tanggal'];
    $nomor = $_REQUEST['nomor'];
    $angka = $_REQUEST['angka'];
    $a2 = $_REQUEST['a2'];
    $a3 = $_REQUEST['a3'];
    $a4 = $_REQUEST['a4'];
    $a5 = $_REQUEST['a5'];
    $a6 = $_REQUEST['a6'];
    $a7 = $_REQUEST['a7'];
     $b2 = $_REQUEST['b2'];
    $b3 = $_REQUEST['b3'];
    $b4 = $_REQUEST['b4'];
    $b5 = $_REQUEST['b5'];
    $b6 = $_REQUEST['b6'];
    $b7 = $_REQUEST['b7'];
     $c2 = $_REQUEST['c2'];
    $c3 = $_REQUEST['c3'];
    $c4 = $_REQUEST['c4'];
    $c5 = $_REQUEST['c5'];
    $c6 = $_REQUEST['c6'];
    $c7 = $_REQUEST['c7'];
     $d2 = $_REQUEST['d2'];
    $d3 = $_REQUEST['d3'];
    $d4 = $_REQUEST['d4'];
    $d5 = $_REQUEST['d5'];
    $d6 = $_REQUEST['d6'];
    $d7 = $_REQUEST['d7'];
     $e2 = $_REQUEST['e2'];
    $e3 = $_REQUEST['e3'];
    $e4 = $_REQUEST['e4'];
    $e5 = $_REQUEST['e5'];
    $e6 = $_REQUEST['e6'];
    $e7 = $_REQUEST['e7'];
    $tempat = $_REQUEST['tempat'];
    $tgl = $_REQUEST['tgl'];
    $ketua = $_REQUEST['ketua'];
    $diaken = $_REQUEST['diaken'];
    $pena = $_REQUEST['pena'];
    $lunas_tgl = $_REQUEST['lunas_tgl'];
    $bend = $_REQUEST['bend'];

$jumlah1 = (int)$a3 + (int)$b3 + (int)$c3 + (int)$d3 + (int)$e3;
$jumlah2 = (int)$a4 + (int)$b4 + (int)$c4 + (int)$d4 + (int)$e4;
$jumlah3 = (int)$a5 + (int)$b5 + (int)$c5 + (int)$d5 + (int)$e5;
$jumlah4 = (int)$a6 + (int)$b6 + (int)$c6 + (int)$d6 + (int)$e6;
$jumlah5 = (int)$a7 + (int)$b7 + (int)$c7 + (int)$d7 + (int)$e7;

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
<div class="book">
    <div class="page">
         <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px"></td>
          <td align="center">
            <h4>GEREJA MASEHI INJILI di MINAHASA</h4>
            <h4>JEMAAT GMIM BETHESDA WILAYAH TATELU</h4>
            <h4><b><u>NOTA PERMINTAAN</u></b></h4>
             </td>
        </tr>
            </table>
            <table width="100%">
                <tr>
                    <td>Kompelka BIPRA, Komisi/Panitia : <?php echo $panitia ; ?></td>
                    <td align="right">TANGGAL : <?php echo date("d-m-Y",strtotime($tanggal)) ; ?></td>
                </tr>
                <tr>
                    <td>LAMPIRAN</td>
                    <td align="right">NOMOR : <?php echo $nomor ; ?></td>
                </tr>
            </table>
<div style="border:1px solid black;">
<p>Permintaan Pembayaran sebagai berikut :</p>
<ol type="a">
    <li>Jumlah pembayaran yang diterima</li>
    <ol type="1">
        <li>Dengan angka Rp <?php echo $angka ; ?></li>
        <li>Dengan huruf</li>
    </ol>
    &emsp; &emsp;<?php echo terbilang($angka); ?> (Rupiah)
    <li>Untuk Keperluan</li>
    <li>Mata Anggaran</li>
    <li>Penerima Uang</li>
    <li>Cara Pembayaran :</li>
    Cash / Transfer
</ol>
<table border="1" width="99%" style="   
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
        <td><?php echo $a2; ?></td>
        <td><?php echo $a3; ?></td>
        <td><?php echo $a4; ?></td>
        <td><?php echo $a5; ?></td>
        <td><?php echo $a6; ?></td>
        <td><?php echo $a7; ?></td>
        </tr>
         <tr>
        <td align="center">2.</td>
       <td><?php echo $b2; ?></td>
        <td><?php echo $b3; ?></td>
        <td><?php echo $b4; ?></td>
        <td><?php echo $b5; ?></td>
        <td><?php echo $b6; ?></td>
        <td><?php echo $b7; ?></td>
        </tr>
         <tr>
        <td align="center">3.</td>
        <td><?php echo $c2; ?></td>
        <td><?php echo $c3; ?></td>
        <td><?php echo $c4; ?></td>
        <td><?php echo $c5; ?></td>
        <td><?php echo $c6; ?></td>
        <td><?php echo $c7; ?></td>
        </tr>
         <tr>
       <td align="center">4.</td>
       <td><?php echo $d2; ?></td>
        <td><?php echo $d3; ?></td>
        <td><?php echo $d4; ?></td>
        <td><?php echo $d5; ?></td>
        <td><?php echo $d6; ?></td>
        <td><?php echo $d7; ?></td>
        </tr>
         <tr>
        <td align="center">5.</td>
        <td><?php echo $e2; ?></td>
        <td><?php echo $e3; ?></td>
        <td><?php echo $e4; ?></td>
        <td><?php echo $e5; ?></td>
        <td><?php echo $e6; ?></td>
        <td><?php echo $e7; ?></td>
        </tr>
         <tr>
        <td></td>
        <td align="right"><i>Jumlah</i></td>
        <td><?php echo $jumlah1; ?></td>
        <td><?php echo $jumlah2; ?></td>
        <td><?php echo $jumlah3; ?></td>
        <td><?php echo $jumlah4; ?></td>
        <td><?php echo $jumlah5; ?></td>
        </tr>
    </tbody>
</table>
<p><i>Terbilang :</i></p>
&emsp;<?php echo terbilang($jumlah4); ?> (Rupiah)
<br>
</div>
<table width="100%">
     <tr>
        <td align="left">Mengetahui/Menyetujui,</td>
        <td align="right"><?php echo $tempat; ?>,<?php echo date("d-m-Y",strtotime($tgl)) ; ?></td>
    </tr>
</table>
<table align="center" width="100%">
  <tr>  
    <td><center><b>Ketua BPM(J/()</b></center></td>
    <td><center><b><?php echo $ketua; ?></b></center></td>
</tr>
<tr>
    <br>
</tr>

<tr>
    <td><br></td>
</tr>
<tr>
    <td><center><?php echo $diaken; ?></center></td>
    <td><center><?php echo $pena; ?></center></td>
</tr>
</table>
<p>Lunas dibayar pada tanggal :<?php echo date("d-m-Y",strtotime($lunas_tgl)) ; ?></p>
<p>Bendahara BPMJ/W</p>

<br><br>
<?php echo $bend; ?>
    </div>
 
   
</div>
	<script>
		window.print();
	</script>
</body>
</html>