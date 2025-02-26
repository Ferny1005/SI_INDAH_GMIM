<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Anggaran Belanja</title>
</head>
<style type="text/css" media="print">
 table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }

    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font: 10pt "times new roman";
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
<?php 
$a1 = $_REQUEST['a1'];
$a2 = $_REQUEST['a2'];
$a3 = $_REQUEST['a3'];
$a4 = $_REQUEST['a4'];
$a5 = $_REQUEST['a5'];
$a6 = $_REQUEST['a6'];
$a7 = $_REQUEST['a7'];
$a8 = $_REQUEST['a8'];
$a9 = $_REQUEST['a9'];
$a10 = $_REQUEST['a10'];
$a11 = $_REQUEST['a11'];
$a12 = $_REQUEST['a12'];
$a13 = $_REQUEST['a13'];
$a14 = $_REQUEST['a14'];
$a15 = $_REQUEST['a15'];
$a16 = $_REQUEST['a16'];
$a17 = $_REQUEST['a17'];
$a18 = $_REQUEST['a18'];
$a19 = $_REQUEST['a19'];
$a20 = $_REQUEST['a20'];
$a21 = $_REQUEST['a21'];
$a22 = $_REQUEST['a22'];
$a23 = $_REQUEST['a23'];
$a24 = $_REQUEST['a24'];
$a25 = $_REQUEST['a25'];
$a26 = $_REQUEST['a26'];
$a27 = $_REQUEST['a27'];
$a28 = $_REQUEST['a28'];
$a29 = $_REQUEST['a29'];
$a30 = $_REQUEST['a30'];
$a31 = $_REQUEST['a31'];
$a32 = $_REQUEST['a32'];
$a33 = $_REQUEST['a33'];
$a34 = $_REQUEST['a34'];
$a35 = $_REQUEST['a35'];
$a36 = $_REQUEST['a36'];
$a37 = $_REQUEST['a37'];
$a38 = $_REQUEST['a38'];
$a39 = $_REQUEST['a39'];
$a40 = $_REQUEST['a40'];
$a41 = $_REQUEST['a41'];
$a42 = $_REQUEST['a42'];
$a43 = $_REQUEST['a43'];
$a44 = $_REQUEST['a44'];
$a45 = $_REQUEST['a45'];
$a46 = $_REQUEST['a46'];
$a47 = $_REQUEST['a47'];
$a48 = $_REQUEST['a48'];
$a49 = $_REQUEST['a49'];
$a50 = $_REQUEST['a50'];
$a51 = $_REQUEST['a51'];
$a52 = $_REQUEST['a52'];
$a53 = $_REQUEST['a53'];
$a54 = $_REQUEST['a54'];
$a55 = $_REQUEST['a55'];
$a56 = $_REQUEST['a56'];
$a57 = $_REQUEST['a57'];
$a58 = $_REQUEST['a58'];
$a59 = $_REQUEST['a59'];
$a60 = $_REQUEST['a60'];
$a61 = $_REQUEST['a61'];
$a62 = $_REQUEST['a62'];
$a63 = $_REQUEST['a63'];
$a64 = $_REQUEST['a64'];
$a65 = $_REQUEST['a65'];
$a66 = $_REQUEST['a66'];
$a67 = $_REQUEST['a67'];
$a68 = $_REQUEST['a68'];
$a69 = $_REQUEST['a69'];
$a70 = $_REQUEST['a70'];
$a71 = $_REQUEST['a71'];
$a72 = $_REQUEST['a72'];
$a73 = $_REQUEST['a73'];
$a74 = $_REQUEST['a74'];
$a75 = $_REQUEST['a75'];
$a76 = $_REQUEST['a76'];
$a77 = $_REQUEST['a77'];
$a78 = $_REQUEST['a78'];
$a79 = $_REQUEST['a79'];
$a80 = $_REQUEST['a80'];
$a81 = $_REQUEST['a81'];
$a82 = $_REQUEST['a82'];
$a83 = $_REQUEST['a83'];
$a84 = $_REQUEST['a84'];
$a85 = $_REQUEST['a85'];
$a86 = $_REQUEST['a86'];
$a87 = $_REQUEST['a87'];
$a88 = $_REQUEST['a88'];
$a89 = $_REQUEST['a89'];
$a90 = $_REQUEST['a90'];
$a91 = $_REQUEST['a91'];
$a92 = $_REQUEST['a92'];
$a93 = $_REQUEST['a93'];
$a94 = $_REQUEST['a94'];
$a95 = $_REQUEST['a95'];
$a96 = $_REQUEST['a96'];
$a99 = $_REQUEST['a99'];
$b1 = $_REQUEST['b1'];
$b2 = $_REQUEST['b2'];
$b3 = $_REQUEST['b3'];
$b4 = $_REQUEST['b4'];
$b5 = $_REQUEST['b5'];
$b6 = $_REQUEST['b6'];
$b7 = $_REQUEST['b7'];
$b8 = $_REQUEST['b8'];
$b9 = $_REQUEST['b9'];
$b10 = $_REQUEST['b10'];
$b11 = $_REQUEST['b11'];
$b12 = $_REQUEST['b12'];
$b13 = $_REQUEST['b13'];
$b14 = $_REQUEST['b14'];
$b15 = $_REQUEST['b15'];
$b16 = $_REQUEST['b16'];
$b17 = $_REQUEST['b17'];
$b18 = $_REQUEST['b18'];
$b19 = $_REQUEST['b19'];
$b20 = $_REQUEST['b20'];
$total = (int)$a1 + (int)$a2  + (int)$a3  + (int)$a4  + (int)$a5  + (int)$a6  + (int)$a7  + (int)$a8  + (int)$a9  + (int)$a10 + (int)$a11 + (int)$a12 + (int)$a13 + (int)$a14 + (int)$a15 + (int)$a16 + (int)$a17 + (int)$a18 + (int)$a19 + (int)$a20 + (int)$a21 + (int)$a22 + (int)$a23 + (int)$a24 + (int)$a25 + (int)$a26 + (int)$a27 + (int)$a28 + (int)$a29 + (int)$a30 + (int)$a31 + (int)$a32 + (int)$a33 + (int)$a34 + (int)$a35 + (int)$a36 + (int)$a37 + (int)$a38 + (int)$a39 + (int)$a40 + (int)$a41 + (int)$a42 + (int)$a43 + (int)$a44 + (int)$a45 + (int)$a46 + (int)$a47 + (int)$a48 + (int)$a49 + (int)$a50 + (int)$a51 + (int)$a52 + (int)$a53 + (int)$a54 + (int)$a55 + (int)$a56 + (int)$a57 + (int)$a58 + (int)$a59 + (int)$a60 + (int)$a61 + (int)$a62 + (int)$a63 + (int)$a64 + (int)$a65 + (int)$a66 + (int)$a67 + (int)$a68 + (int)$a69 + (int)$a70 + (int)$a71 + (int)$a72 + (int)$a73 + (int)$a74 + (int)$a75 + (int)$a76 + (int)$a77 + (int)$a78 + (int)$a79 + (int)$a80 + (int)$a81 + (int)$a82 + (int)$a83 + (int)$a84 + (int)$a85 + (int)$a86 + (int)$a87 + (int)$a88 + (int)$a89 + (int)$a90 + (int)$a91 + (int)$a92 + (int)$a93 + (int)$a94 + (int)$a95 + (int)$a96 + (int)$a99 + (int)$b1  + (int)$b2  + (int)$b3  + (int)$b4  + (int)$b5  + (int)$b6  + (int)$b7  + (int)$b8  + (int)$b9  + (int)$b10 + (int)$b11 + (int)$b12 + (int)$b13 + (int)$b14 + (int)$b15 + (int)$b16 + (int)$b17 + (int)$b18 + (int)$b19 + (int)$b20; 

$pembangunan = (int)$a99 + (int)$b1  + (int)$b2  + (int)$b3  + (int)$b4  + (int)$b5  + (int)$b6  + (int)$b7  + (int)$b8  + (int)$b9;

$pendidikan = (int)$a86 + (int)$a87 + (int)$a88 + (int)$a89 + (int)$a90;

$tidak_Sentra =(int)$pembangunan + (int)$pendidikan + (int)$b14;

    ?>
<div class="book">
    <div class="page">
<form method="POST">
         <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px"></td>
          <td align="center">
            <h4>GEREJA MASEHI INJILI di MINAHASA</h4>
            <h4>JEMAAT GMIM BETHESDA WILAYAH TATELU</h4>
            <h4>ANGGARAN BELANJA dan PENDAPATAN JEMAAT TAHUN 2022</h4>
            <h4>PERIODE PELAYANAN 2022 - 2026</h4>
</td>
        </tr>
            </table>
 <table border="1" style="solid #999;
    padding: 8px 20px;
    color: #232323;
    border-collapse: collapse;" align="center">
    <thead>
        <th>No. MA</th>
        <th>MATA ANGGARAN</th>
        <th>PER BULAN</th>
        <th>PER TAHUN</th>
</thead> 
    <tr>
        <td>1.0.00.00</td>
        <td><u><b>KEESAAN / PERSEKUTUAN (KOINONIA)</b></u></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
      
    </tr>
    <tr>
        <td>1.1.00.00</td>
        <td><u><b>SENTRALISASI KE SINODE</b></u></td>
        <td>Rp. <?php echo $a1 ; ?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.2.00.00</td>
        <td><u><b>SENTRALISASI KE WILAYAH</b></u></td>
        <td>Rp. <?php echo $a2 ; ?></td>
        <td>Rp. <?php echo (int)$a2 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.00.00</td>
        <td><u><b>REALISASI DALAM JEMAAT:</b></u></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.01.00</td>
        <td><b>Komisi Pelayanan KATEGORIAL:</b></td>
        <td></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.01.01</td>
        <td>Pria/Kaum Bapa</td>
        <td>Rp. <?php echo $a3 ; ?></td>
        <td>Rp. <?php echo (int)$a3 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.01.02</td>
        <td>Wanita/Kaum Ibu </td>
        <td>Rp. <?php echo $a4 ; ?></td>
         <td>Rp. <?php echo (int)$a4 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.01.03</td>
        <td>Pemuda</td>
        <td>Rp. <?php echo $a5 ; ?></td>
         <td>Rp. <?php echo (int)$a5 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.01.04</td>
        <td>Remaja</td>
        <td>Rp. <?php echo $a6 ; ?></td>
         <td>Rp. <?php echo (int)$a6 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.01.05</td>
        <td>Anak</td>
        <td>Rp. <?php echo $a7 ; ?></td>
         <td>Rp. <?php echo (int)$a7 * 12 ; ?></td>
    </tr> 
     <tr>
        <td>1.3.02.00</td>
        <td><b>Gaji / Tunjangan Pekerja Gereja:</b></td>
        <td></td>
         <td></td>
    </tr>
<tr>
        <td>1.3.02.01</td>
        <td>Tunjangan Fungsional Ketua Jemaat</td>
        <td>Rp. <?php echo $a8 ; ?></td>
         <td>Rp. <?php echo (int)$a8 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.02.02</td>
        <td>Tunjangan Fungsional Pendeta Jemaat</td>
        <td>Rp. <?php echo $a9 ; ?></td>
         <td>Rp. <?php echo (int)$a9 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.02.03</td>
        <td>Tunjangan Fungsional Guru Agama</td>
        <td>Rp. <?php echo $a10 ; ?></td>
         <td>Rp. <?php echo (int)$a10 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.02.04</td>
        <td>Gaji Pegawai Tata Usaha</td>
        <td>Rp. <?php echo $a11 ; ?></td>
         <td>Rp. <?php echo (int)$a11 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.02.05</td>
        <td>Honor Kostor</td>
        <td>Rp. <?php echo $a12 ; ?></td>
        <td>Rp. <?php echo (int)$a12 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.02.06</td>
        <td>Honor Vikaris Pendeta</td>
        <td>Rp. <?php echo $a13 ; ?></td>
        <td>Rp. <?php echo (int)$a13 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.03.00</td>
        <td><b>Tunjangan Struktural Ketua Badan Pekerja Majelis Jemaat (Ketua BPMJ)</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.03.01</td>
        <td>Ketua BPMJ</td>
        <td>Rp. <?php echo $a14 ; ?></td>
        <td>Rp. <?php echo (int)$a14 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.04.00</td>
        <td><b>Tunjangan Hari Raya Pekerja Gereja:</b></td>
        <td></td>
        <td></td>
    </tr>

     <tr>
        <td>1.3.04.01</td>
        <td>Ketua BPMJ</td>
        <td>Rp. <?php echo $a15 ; ?></td>
        <td>Rp. <?php echo (int)$a15 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.04.02</td>
        <td>Pendeta Jemaat / Vicaris Pendeta</td>
        <td>Rp. <?php echo $a16 ; ?></td>
        <td>Rp. <?php echo (int)$a16 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.04.03</td>
        <td>Guru Agama</td>
        <td>Rp. <?php echo $a17 ; ?></td>
        <td>Rp. <?php echo (int)$a17 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.04.04</td>
        <td>Pegawai Tata Usaha</td>
        <td>Rp. <?php echo $a18 ; ?></td>
        <td>Rp. <?php echo (int)$a18 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.04.05</td>
        <td>Kostor</td>
        <td>Rp. <?php echo $a19 ; ?></td>
        <td>Rp. <?php echo (int)$a19 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.05.00</td>
        <td><b>Biaya Khadim:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.05.01</td>
        <td>Khadim Jemaat</td>
        <td>Rp. <?php echo $a20 ; ?></td>
        <td>Rp. <?php echo (int)$a20 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.05.02</td>
        <td>Khadim Wilayah</td>
        <td>Rp. <?php echo $a21 ; ?></td>
        <td>Rp. <?php echo (int)$a21 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.05.03</td>
        <td>Khadim Sinode</td>
        <td>Rp. <?php echo $a22 ; ?></td>
        <td>Rp. <?php echo (int)$a22 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.05.04</td>
        <td>Khadim Ibadah Hari Raya</td>
        <td>Rp. <?php echo $a23 ; ?></td>
        <td>Rp. <?php echo (int)$a23 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.05.05</td>
        <td>Khadim Baptisan, Sidi, Perjamuan, Pernikahan</td>
        <td>Rp. <?php echo $a24 ; ?></td>
        <td>Rp. <?php echo (int)$a24 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.05.06</td>
        <td>Khadim Khusus</td>
        <td>Rp. <?php echo $a25 ; ?></td>
        <td>Rp. <?php echo (int)$a25 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.05.07</td>
        <td>Khadim Natura</td>
        <td>Rp. <?php echo $a26 ; ?></td>
        <td>Rp. <?php echo (int)$a26 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.06.00</td>
        <td><b>Pemain Musik:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.06.01</td>
        <td>Pemain Keyboard Ibadah Hari Minggu</td>
        <td>Rp. <?php echo $a27 ; ?></td>
        <td>Rp. <?php echo (int)$a27 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.06.02</td>
        <td>Tim Musik / Kelompok Nyanyi Ibadah Hari Raya</td>
        <td>Rp. <?php echo $a28 ; ?></td>
        <td>Rp. <?php echo (int)$a28 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.06.03</td>
        <td>Pemain Keyboard Ibadah Hari Khusus</td>
        <td>Rp. <?php echo $a29 ; ?></td>
        <td>Rp. <?php echo (int)$a29 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.06.04</td>
        <td>Tim Pelayanan Ibadah Natura</td>
        <td>Rp. <?php echo $a30 ; ?></td>
        <td>Rp. <?php echo (int)$a30 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.06.04</td>
        <td><b>Biaya Kelengkapan Kantor / Ibadah:</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.07.01</td>
        <td>Liturgi / Pengadaan Materi / Surat / Foto Copy</td>
        <td>Rp. <?php echo $a31 ; ?></td>
        <td>Rp. <?php echo (int)$a31 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.07.02</td>
        <td>Pundi, Stola, Kain Mimbar, Lilin, dll.</td>
        <td>Rp. <?php echo $a32 ; ?></td>
        <td>Rp. <?php echo (int)$a32 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.07.03</td>
        <td>Sampul-Sampul (Syukur / HUT / Persepuluhan, dll)</td>
        <td>Rp. <?php echo $a33 ; ?></td>
        <td>Rp. <?php echo (int)$a33 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.07.04</td>
        <td>Biaya Roti dan Anggur Perjamuan</td>
        <td>Rp. <?php echo $a34 ; ?></td>
        <td>Rp. <?php echo (int)$a34 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.07.05</td>
        <td>Alat / Perlengkapan Kantor (Kertas, Tinta, dll)</td>
        <td>Rp. <?php echo $a35 ; ?></td>
        <td>Rp. <?php echo (int)$a35 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.07.06</td>
        <td>Konsumsi Ringan di Kantor Jemaat</td>
        <td>Rp. <?php echo $a36 ; ?></td>
        <td>Rp. <?php echo (int)$a36 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.08.00</td>
        <td><b>Pengadaan Bacaan</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.08.01</td>
        <td>Bina Ibu (Upus Ni Mama)</td>
        <td>Rp. <?php echo $a37 ; ?></td>
        <td>Rp. <?php echo (int)$a37 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.08.02</td>
        <td>Bina Bapak (Pelita)</td>
        <td>Rp. <?php echo $a38 ; ?></td>
        <td>Rp. <?php echo (int)$a38 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.08.03</td>
        <td>Bina Pemuda</td>
        <td>Rp. <?php echo $a39 ; ?></td>
        <td>Rp. <?php echo (int)$a39 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.08.04</td>
        <td>Bina Remaja</td>
        <td>Rp. <?php echo $a40 ; ?></td>
        <td>Rp. <?php echo (int)$a40 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.08.05</td>
        <td>Bina Anak</td>
        <td>Rp. <?php echo $a41 ; ?></td>
        <td>Rp. <?php echo (int)$a41 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.08.06</td>
        <td>M T P J</td>
        <td>Rp. <?php echo $a42 ; ?></td>
        <td>Rp. <?php echo (int)$a42 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.08.07</td>
        <td>R H K</td>
        <td>Rp. <?php echo $a43 ; ?></td>
        <td>Rp. <?php echo (int)$a43 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.08.08</td>
        <td>Koran, Majalah / Dodoku</td>
        <td>Rp. <?php echo $a44 ; ?></td>
        <td>Rp. <?php echo (int)$a44 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.00</td>
        <td><b>Biaya Rapat / Konsultasi / Konven;</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.01</td>
        <td>Konsumsi Rapat Kerja BPMJ</td>
        <td>Rp. <?php echo $a45 ; ?></td>
        <td>Rp. <?php echo (int)$a45 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.02</td>
        <td>Konsumsi Sidang Majelis Jemaat</td>
        <td>Rp. <?php echo $a46 ; ?></td>
        <td>Rp. <?php echo (int)$a46 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.03</td>
        <td>Konsumsi Sidang Tahunan</td>
        <td>Rp. <?php echo $a47 ; ?></td>
        <td>Rp. <?php echo (int)$a47 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.04</td>
        <td>Rapat Sidi Jemaat</td>
        <td>Rp. <?php echo $a48 ; ?></td>
        <td>Rp. <?php echo (int)$a48 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.05</td>
        <td>Konsultasi dengan BPW / Sinode</td>
        <td>Rp. <?php echo $a49 ; ?></td>
        <td>Rp. <?php echo (int)$a49 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.06</td>
        <td>Sidang Majelis Sinode Tahunan (SMST)</td>
        <td>Rp. <?php echo $a50 ; ?></td>
        <td>Rp. <?php echo (int)$a50 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.09</td>
        <td>Sidang Majelis Sinode (SMS / SMSI)</td>
        <td>Rp. <?php echo $a51 ; ?></td>
        <td>Rp. <?php echo (int)$a51 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.10</td>
        <td>Rapat Kerja Ketua-Ketua Jemaat Se Sinode</td>
        <td>Rp. <?php echo $a52 ; ?></td>
        <td>Rp. <?php echo (int)$a52 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.09.11</td>
        <td>Rapat Kerja KSB se-Sinode</td>
        <td>Rp. <?php echo $a53 ; ?></td>
        <td>Rp. <?php echo (int)$a53 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.09.12</td>
        <td>Konven Komisi Kerja Wilayah / Sinode</td>
        <td>Rp. <?php echo $a54 ; ?></td>
        <td>Rp. <?php echo (int)$a54 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.09.13</td>
        <td>Konven Pendeta dan Guru Agama</td>
        <td>Rp. <?php echo $a55 ; ?></td>
        <td>Rp. <?php echo (int)$a55 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.09.14</td>
        <td>Konven Penatua dan Syamas Wilayah / Sinode</td>
        <td>Rp. <?php echo $a56 ; ?></td>
        <td>Rp. <?php echo (int)$a56 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.09.15</td>
        <td>Konven Kostor</td>
        <td>Rp. <?php echo $a57 ; ?></td>
        <td>Rp. <?php echo (int)$a57 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.10.00</td>
        <td><b>Biaya Pembekalan / Pelatihan:</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.10.01</td>
        <td>Pembekalan Pelayan Khusus</td>
        <td>Rp. <?php echo $a58 ; ?></td>
        <td>Rp. <?php echo (int)$a58 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.10.02</td>
        <td>Pembekalan Komisi Kerja</td>
        <td>Rp. <?php echo $a59 ; ?></td>
        <td>Rp. <?php echo (int)$a59 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.10.03</td>
        <td>Pembekalan Perbendaharaan</td>
        <td>Rp. <?php echo $a60 ; ?></td>
        <td>Rp. <?php echo (int)$a60 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.10.04</td>
        <td>Pembekalan Anggota Jemaat</td>
        <td>Rp. <?php echo $a61 ; ?></td>
        <td>Rp. <?php echo (int)$a61 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.10.05</td>
        <td>Katekisasi Calon Sidi Jemaat</td>
        <td>Rp. <?php echo $a62 ; ?></td>
        <td>Rp. <?php echo (int)$a62 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.11.00</td>
        <td><b>Rekening-Rekening:</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.11.01</td>
        <td>Listrik</td>
        <td>Rp. <?php echo $a63 ; ?></td>
        <td>Rp. <?php echo (int)$a63 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.11.02</td>
        <td>Air Minum (PAM)</td>
        <td>Rp. <?php echo $a64 ; ?></td>
        <td>Rp. <?php echo (int)$a64 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.11.03</td>
        <td>Telepon</td>
        <td>Rp. <?php echo $a65 ; ?></td>
        <td>Rp. <?php echo (int)$a65 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.12.00</td>
        <td><b>Transportasi:</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.12.01</td>
        <td>BBM</td>
        <td>Rp. <?php echo $a66 ; ?></td>
        <td>Rp. <?php echo (int)$a66 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.12.02</td>
        <td>Sewa Kendaraan</td>
        <td>Rp. <?php echo $a67 ; ?></td>
        <td>Rp. <?php echo (int)$a67 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.12.03</td>
        <td>Perjalanan Dinas (Tiket, Airport Tax, Akomodasi,Uang Makan)</td>
        <td>Rp. <?php echo $a68 ; ?></td>
        <td>Rp. <?php echo (int)$a68 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.13.00</td>
        <td><b>Perawatan / Pemeliharaan Inventaris:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.13.01</td>
        <td>Onderdil / Servis / Oli Kendaraan</td>
        <td>Rp. <?php echo $a69 ; ?></td>
        <td>Rp. <?php echo (int)$a69 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.13.02</td>
        <td>Surat Kendaraan (STNK / Pajak)</td>
        <td>Rp. <?php echo $a70 ; ?></td>
        <td>Rp. <?php echo (int)$a70 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.13.03</td>
        <td>Surat Tanah / Bangunan (Sertifikat, Akta, IMB, PBB)</td>
        <td>Rp. <?php echo $a71 ; ?></td>
        <td>Rp. <?php echo (int)$a71 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.13.04</td>
        <td>Perbaikan Peralatan / Perlengkapan Inventaris</td>
        <td>Rp. <?php echo $a72 ; ?></td>
        <td>Rp. <?php echo (int)$a72 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.14.00</td>
        <td><b>Pengawasan / Pemeriksaan:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.14.01</td>
        <td>Biaya Pelayanan KPPJ</td>
        <td>Rp. <?php echo $a73 ; ?></td>
        <td>Rp. <?php echo (int)$a73 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.14.02</td>
        <td>Biaya Pelayanan KPPW / KPPS</td>
        <td>Rp. <?php echo $a74 ; ?></td>
        <td>Rp. <?php echo (int)$a74 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.15.00</td>
        <td><b>Biaya Pelaksanaan Pemilihan Pelsus:</b></td>
        <td>Rp. <?php echo $a75 ; ?></td>
        <td>Rp. <?php echo (int)$a75 * 12 ; ?></td>
    </tr>
     <tr>
        <td>2.0.00.00</td>
        <td><b>KESAKSIAN DAN KERJASAMA (MARTURIA):</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2.1.01.00</td>
        <td><b>Kegiatan KPDP:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2.1.01.01</td>
        <td>Kebaktian Penyegaran Iman (KPI)</td>
        <td>Rp. <?php echo $a76 ; ?></td>
        <td>Rp. <?php echo (int)$a76 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.1.01.02</td>
        <td>Pekabaran Injil Keluar</td>
        <td>Rp. <?php echo $a77 ; ?></td>
        <td>Rp. <?php echo (int)$a77 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.1.01.03</td>
        <td>Biaya Perkunjungan Pelayanan</td>
        <td>Rp. <?php echo $a78 ; ?></td>
        <td>Rp. <?php echo (int)$a78 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.1.02.00</td>
        <td><b>Hubungan Kerjasama:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2.1.02.01</td>
        <td>Tenaga Utusan Gerejawi</td>
        <td>Rp. <?php echo $a79 ; ?></td>
        <td>Rp. <?php echo (int)$a79 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.1.02.02</td>
        <td>Kemitraan / Jemaat Mitra</td>
        <td>Rp. <?php echo $a80 ; ?></td>
        <td>Rp. <?php echo (int)$a80 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.1.02.03</td>
        <td>Kerjasama dengan Jemaat / Lembaga / Gereja Lain</td>
        <td>Rp. <?php echo $a81 ; ?></td>
        <td>Rp. <?php echo (int)$a81 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.0.00.00</td>
        <td><b>DIAKONIA:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.01.00</td>
        <td><b>Kesehatan:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.01.01</td>
        <td>Dana Sehat Keluarga Pekerja GMIM di Jemaat</td>
        <td>Rp. <?php echo $a82 ; ?></td>
        <td>Rp. <?php echo (int)$a82 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.01.02</td>
        <td>Dana Sehat Keluarga Pendeta / Guru Agama Non Pekerja Gmim
</td>
        <td>Rp. <?php echo $a83 ; ?></td>
        <td>Rp. <?php echo (int)$a83 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.01.03</td>
        <td>Dana Sehat Pelayan Khusus Non Pendeta / Guru Agama
</td>
        <td>Rp. <?php echo $a84 ; ?></td>
        <td>Rp. <?php echo (int)$a84 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.01.04</td>
        <td>Dana Sehat Anggota Jemaat
</td>
        <td>Rp. <?php echo $a85 ; ?></td>
        <td>Rp. <?php echo (int)$a85 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.02.00</td>
        <td><b>Pendidikan:
</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.02.01</td>
        <td>Tunjangan / Honor Guru
</td>
        <td>Rp. <?php echo $a86 ; ?></td>
        <td>Rp. <?php echo (int)$a86 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.02.02</td>
        <td>Honor Penjaga Sekolah
</td>
        <td>Rp. <?php echo $a87 ; ?></td>
        <td>Rp. <?php echo (int)$a87 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.02.03</td>
        <td>Biaya Operasional Sekolah
</td>
        <td>Rp. <?php echo $a88 ; ?></td>
        <td>Rp. <?php echo (int)$a88 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.02.04</td>
        <td>Beasiswa Pendidikan Anggota Jemaat
</td>
        <td>Rp. <?php echo $a89 ; ?></td>
        <td>Rp. <?php echo (int)$a89 * 12 ; ?></td>
    </tr>
 <tr>
        <td>3.1.02.05</td>
        <td>Beasiswa Pendidikan Non Anggota Jemaat</td>
        <td>Rp. <?php echo $a90 ; ?></td>
        <td>Rp. <?php echo (int)$a90 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.03.00</td>
        <td>Diakonia Duka:
</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.03.01</td>
        <td>Dana Duka
</td>
        <td>Rp. <?php echo $a91 ; ?></td>
        <td>Rp. <?php echo (int)$a91 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.03.02</td>
        <td>Karangan Bunga Kedukaan
</td>
        <td>Rp. <?php echo $a92 ; ?></td>
        <td>Rp. <?php echo (int)$a92 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.04.00
</td>
        <td><b>Bantuan Bencana Alam
</b></td>
        <td>Rp. <?php echo $a93 ; ?></td>
        <td>Rp. <?php echo (int)$a93 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.05.00
</td>
        <td><b>Diakonia Hasil Ibadah Natura</b>
</td>
        <td>Rp. <?php echo $a94 ; ?></td>
        <td>Rp. <?php echo (int)$a94 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.06.00
</td>
        <td><b>Puasa Diakonal</b>
</td>
        <td>Rp. <?php echo $a95 ; ?></td>
        <td>Rp. <?php echo (int)$a95 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.1.07.00
</td>
        <td>Pemupukan Dana Abadi
</td>
        <td>Rp. <?php echo $a96 ; ?></td>
        <td>Rp. <?php echo (int)$a96 * 12 ; ?></td>
    </tr>
    <tr>
        <td>4.0.00.00
</td>
        <td><b>PEMBANGUNAN / INVENTARIS GEREJA:
</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4.1.01.00
</td>
        <td><b>Pembelian / Pengadaan Perlengkapan dan Peralatan:
</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4.1.01.01
</td>
        <td>Gedung Gereja (Kursi / Bangku, Mimbar, Meja, Lemari, Sound System, LCD Pojector, dll)

</td>
        <td>Rp. <?php echo $a99 ; ?></td>
        <td>Rp. <?php echo (int)$a99 * 12 ; ?></td>
    </tr>
    <tr>
        <td>4.1.01.02
</td>
        <td>Aula (Kursi, Meja, Sound System, dll)

</td>
        <td>Rp. <?php echo $b1 ; ?></td>
        <td>Rp. <?php echo (int)$b1 * 12 ; ?></td>
    </tr>

    <tr>
        <td>4.1.01.03
</td>
        <td>Kantor / Konsistori (Kursi, Meja, Lemari, Komputer, Printer, Papan Tulis, dll)

</td>
        <td>Rp. <?php echo $b2 ; ?></td>
        <td>Rp. <?php echo (int)$b2 * 12 ; ?></td>
    </tr>
    <tr>
        <td>4.1.01.04</td>
        <td>Pastori (Kursi, Meja, Lemari, Tempat Tidur, dll)</td>
        <td>Rp. <?php echo $b3 ; ?></td>
        <td>Rp. <?php echo (int)$b3 * 12 ; ?></td>
    </tr>
    <tr>
        <td>4.1.02.00
</td>
        <td>Pengadaan Kendaraan (Sepeda, Sepeda Motor, Mobil, Perahu, Perahu Motor)

</td>
        <td>Rp. <?php echo $b4 ; ?></td>
        <td>Rp. <?php echo (int)$b4 * 12 ; ?></td>
    </tr>
     <tr>
        <td>4.1.03.00
</td>
        <td>Pembangunan Gedung, Kantor / Konsistori, Patori Gereja
</td>
        <td>Rp. <?php echo $b5 ; ?></td>
        <td>Rp. <?php echo (int)$b5 * 12 ; ?></td>
    </tr>
     <tr>
        <td>4.1.04.00
</td>
        <td>Pembangunan Gedung / Perlengkapan Sekolah
</td>
        <td>Rp. <?php echo $b6 ; ?></td>
        <td>Rp. <?php echo (int)$b6 * 12 ; ?></td>
    </tr>
     <tr>
        <td>4.1.05.00
</td>
        <td>Pengadaan Kintal
</td>
        <td>Rp. <?php echo $b7 ; ?></td>
        <td>Rp. <?php echo (int)$b7 * 12 ; ?></td>
    </tr>
     <tr>
        <td>4.1.06.00
</td>
        <td>Sewa Kontrak Bangunan
</td>
        <td>Rp. <?php echo $b8 ; ?></td>
        <td>Rp. <?php echo (int)$b8 * 12 ; ?></td>
    </tr>
     <tr>
        <td>4.1.07.00
</td>
        <td>Pengadaan Tenda
</td>
        <td>Rp. <?php echo $b9 ; ?></td>
        <td>Rp. <?php echo (int)$b9 * 12 ; ?></td>
    </tr>
     <tr>
        <td>5.0.00.00
</td>
        <td><b>PENGELUARAN LAINNYA:
</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>5.1.01.00
</td>
        <td>Biaya Tamu Gereja
</td>
        <td>Rp. <?php echo $b10 ; ?></td>
        <td>Rp. <?php echo (int)$b10 * 12 ; ?></td>
    </tr>
     <tr>
        <td>5.1.02.00
</td>
        <td>Biaya Lembur
</td>
        <td>Rp. <?php echo $b11 ; ?></td>
        <td>Rp. <?php echo (int)$b11 * 12 ; ?></td>
    </tr>
     <tr>
        <td>5.1.03.00
</td>
        <td>Biaya Administrasi Bank
</td>
        <td>Rp. <?php echo $b12 ; ?></td>
        <td>Rp. <?php echo (int)$b12 * 12 ; ?></td>
    </tr>
     <tr>
        <td>5.1.04.00
</td>
        <td>Biaya Lain-Lain
</td>
        <td>Rp. <?php echo $b13 ; ?></td>
        <td>Rp. <?php echo (int)$b13 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.0.00.00
</td>
        <td><b>DANA TRANSIT:
</b></td>
        <td>Rp. <?php echo $b14 ; ?></td>
        <td>Rp. <?php echo (int)$b14 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.1.01.00
</td>
        <td><b>Penyaluran Pundi Extra
</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>6.1.01.01
</td>
        <td>Pundi Extra untuk SMS / SMST
</td>
        <td>Rp. <?php echo $b15 ; ?></td>
        <td>Rp. <?php echo (int)$b15 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.1.01.02</td>
        <td>Pundi Extra untuk Kegiatan Wilayah</td>
        <td>Rp. <?php echo $b16 ; ?></td>
        <td>Rp. <?php echo (int)$b16 * 12 ; ?></td>
    </tr>
    <tr>
        <td>6.1.01.03
</td>
        <td>Pundi Extra untuk Kegiatan Lainnya
</td>
        <td>Rp. <?php echo $b17 ; ?></td>
        <td>Rp. <?php echo (int)$b17 * 12 ; ?></td>
    </tr>
    <tr>
        <td>6.1.02.00
</td>
        <td><b>Penyaluran Kartu Partisipasi / Mapalus:
</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6.1.02.01
</td>
        <td>Kartu Kawan Panitia SMS /SMST
</td>
        <td>Rp. <?php echo $b18 ; ?></td>
        <td>Rp. <?php echo (int)$b18 * 12 ; ?></td>
    </tr>
    <tr>
        <td>6.1.02.02
</td>
        <td>Kartu Kawan untuk Kegiatan Khusus Lainnya</td>
        <td>Rp. <?php echo $b19 ; ?></td>
        <td>Rp. <?php echo (int)$b19 * 12 ; ?></td>
    </tr>
    <tr>
        <td>6.1.03.00</td>
        <td><b>Penyaluran Dana-Dana Kegiatan Sinodal lainnya</b></td>
        <td>Rp. <?php echo $b20 ; ?></td>
        <td>Rp. <?php echo (int)$b20 * 12 ; ?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><b>Total</b></td>
        <td>Rp. <?php echo $total ; ?></td>
        <td>Rp. <?php echo (int)$total * 12 ; ?></td>
    </tr>
</table>

</form>
<br>
<table border="1" style="solid #999;
    padding: 8px 20px;
    color: #232323;
    border-collapse: collapse;" align="center">
    <tr>
        <td colspan ="3" ><u>REKAPITULASI</u></td>
    </tr>
    <tr>
        <td>TOTAL ANGGARAN</td>
        <td></td>
        <td>Rp. <?php echo $total ; ?></td>
    </tr>
      <tr>
        <td><b>Anggaran Pembangunan</b></td>
        <td>Rp. <?php echo $pembangunan ; ?></td>
        <td></td>
    </tr>
      <tr>
        <td><b>Anggaran Pendidikan</b></td>
        <td>Rp. <?php echo $pendidikan ; ?></td>
        <td></td>
    </tr>
      <tr>
        <td><b>Dana Transit</b></td>
        <td>Rp. <?php echo $b14 ; ?></td>
        <td></td>
    </tr>
      <tr>
        <td>Jumlah yang tidak dikenai perhitungan sentralisasi</td>
        <td></td>
        <td>Rp. <?php echo $tidak_Sentra ; ?></td>
    </tr>
     <tr>
        <td>JUMLAH YANG DIKENAI PERHITUNGAN SENTRALISASI</td>
        <td></td>
        <td>Rp. <?php $sentra = (int)$total-(int)$tidak_Sentra ; echo $sentra; ?></td>
    </tr>
     <tr>
        <td><center>Sentralisasi ke Sinode (35%)</center></td>
        <td>Rp. <?php $sinode = (int)$a1 * 12 ; echo $sinode; ?></td>
        <td></td>
    </tr>
     <tr>
        <td><center>Sentralisasi ke Wilayah (5%)</center></td>
        <td>Rp. <?php $wilayah = (int)$a2 * 12 ; echo $wilayah; ?></td>
        <td></td>
    </tr>
     <tr>
        <td><center>Pelayanan Umum di Jemaat (60%)</center></td>
        <td>Rp. <?php $jemaat = (int)$sentra - (int)$sinode - (int)$wilayah; echo $jemaat; ?></td>
        <td>Rp.<?php echo (int)$jemaat + (int)$sinode + (int)$wilayah; ?></td>
    </tr>
     <tr>
        <td colspan ="3" ><center>A L O K A S I</center></td>
    </tr>
</table>
 <p>Ditetapkan dalam Rapat / Sidang Badan Pekerja Majelis </p>
 <P>Pada hari
 <?php
 date_default_timezone_set('Asia/Kuala_Lumpur'); 
function tanggal_indo($tanggal, $cetak_hari = false)
{
    $hari = array ( 1 =>    '<b>SENIN</b>',
                '<b>SELASA</b>',
                '<b>RABU</b>',
                '<b>KAMIS</b>',
                '<b>JUMAT</b>',
                '<b>SABTU</b>',
                '<b>MINGGU</b>'
            );
            
    $bulan = array (1 =>   'JANUARI',
                'FEBUARI',
                'MARET',
                'APRIL',
                'MEI',
                'JUNI',
                'JULI',
                'AGUSTUS',
                'SEPTEMBER',
                'OKTOBER',
                'NOVEMBER',
                'DESEMBER'
            );
    $split    = explode('-', $tanggal);
    $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    
    if ($cetak_hari) {
        $num = date('N', strtotime($tanggal));
        return $hari[$num] . ' Tanggal <b>' . $tgl_indo . ' </b> ';
    }
    return $tgl_indo;
}
echo tanggal_indo (date('Y-m-d'), true); // Hasil: Minggu, 20 Maret 2016

echo ' WITA <b>'.date('G:i'). ' WITA </b>';
?>
<center>BADAN PEKERJA MAJELIS JEMAAT GMIM BETHESDA TATELU
</center>
<br>
<table width="100%" align="center">
    <tr align="center">
        <td>Ketua,</td>
        <td>Bendahara,</td>
    </tr>
    <tr>
      <td><br><br><br></td> 
    </tr>
    <tr align="center">
        <td><u>Pdt Davy Mario Marlandsky Purukan, STh</u></td>
        <td><u>Dkn. Lucky Yulien Putong, SE</u></td>
    </tr>
</table>
    </div>
</div>
<script>
        window.print();
    </script>
</body>
</html>