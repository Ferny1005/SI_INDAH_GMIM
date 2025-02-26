<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pendapatan Jemaat</title>
</head>
<style type="text/css">

    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
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
$a97 = $_REQUEST['a97'];
$a98 = $_REQUEST['a98'];
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
$total = (int)$a1 + (int)$a2  + (int)$a3  + (int)$a4  + (int)$a5  + (int)$a6  + (int)$a7  + (int)$a8  + (int)$a9  + (int)$a10 + (int)$a11 + (int)$a12 + (int)$a13 + (int)$a14 + (int)$a15 + (int)$a16 + (int)$a17 + (int)$a18 + (int)$a19 + (int)$a20 + (int)$a21 + (int)$a22 + (int)$a23 + (int)$a24 + (int)$a25 + (int)$a26 + (int)$a27 + (int)$a28 + (int)$a29 + (int)$a30 + (int)$a31 + (int)$a32 + (int)$a33 + (int)$a34 + (int)$a35 + (int)$a36 + (int)$a37 + (int)$a38 + (int)$a39 + (int)$a40 + (int)$a41 + (int)$a42 + (int)$a43 + (int)$a44 + (int)$a45 + (int)$a46 + (int)$a47 + (int)$a48 + (int)$a49 + (int)$a50 + (int)$a51 + (int)$a52 + (int)$a53 + (int)$a54 + (int)$a55 + (int)$a56 + (int)$a57 + (int)$a58 + (int)$a59 + (int)$a60 + (int)$a61 + (int)$a62 + (int)$a63 + (int)$a64 + (int)$a65 + (int)$a66 + (int)$a67 + (int)$a68 + (int)$a69 + (int)$a70 + (int)$a71 + (int)$a72 + (int)$a73 + (int)$a74 + (int)$a75 + (int)$a76 + (int)$a77 + (int)$a78 + (int)$a79 + (int)$a80 + (int)$a81 + (int)$a82 + (int)$a83 + (int)$a84 + (int)$a85 + (int)$a86 + (int)$a87 + (int)$a88 + (int)$a89 + (int)$a90 + (int)$a91 + (int)$a92 + (int)$a93 + (int)$a94 + (int)$a95 + (int)$a96 + (int)$a97+ (int)$a98 + (int)$b1  + (int)$b2  + (int)$b3  + (int)$b4  + (int)$b5  + (int)$b6  + (int)$b7  + (int)$b8  + (int)$b9  + (int)$b10 + (int)$b11 + (int)$b12; 

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
 <table border="1" width="99%" style="solid #999;
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
        <td>1.3.50.00</td>
        <td><b>PERSEMBAHAN IBADAH MINGGU:</b></td>
        <td></td>
         <td></td>
    </tr>
     <tr>
        <td>1.3.50.01</td>
        <td>Fajar</td>
        <td>Rp. <?php echo $a1;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.50.02</td>
        <td>Pagi</td>
        <td>Rp. <?php echo $a2;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.50.03</td>
        <td>Malam</td>
        <td>Rp. <?php echo $a3;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    </tr>
    <tr>
        <td>1.3.51.00</td>
        <td><b>PERSEMBAHAN PERSEPULUHAN & PBTK</b></td>
        <td>Rp. <?php echo $a4;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    </tr>
    <tr>
        <td>1.3.01.00</td>
        <td><b><u>PERSEMBAHAN IBADAH KOMPELKA BIPRA;</u></b></td>
        <td></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.01.01</td>
        <td>Pria/Kaum Bapa Jemaat</td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.01.02</td>
        <td>Wanita/Kaum Ibu Jemaat</td>
        <td>Rp. <?php echo $a80;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.01.03</td>
        <td>Pemuda Jemaat</td>
        <td>Rp. <?php echo $a5;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.01.04</td>
        <td>Remaja Jemaat</td>
        <td>Rp. <?php echo $a6;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.01.05</td>
        <td>Anak Sekolah Minggu</td>
        <td>Rp. <?php echo $a7;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr> 
<tr>
        <td>1.3.01.06</td>
        <td>Pondok Gembira Anak Sekolah Minggu</td>
        <td>Rp. <?php echo $a8;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.01.07</td>
        <td>Guru-Guru Sekolah Minggu</td>
        <td>Rp. <?php echo $a9;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.53.00</td>
        <td><b>PERSEMBAHAN IBADAH KOLOM:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.53.01
</td>
        <td>Persembahan Ibadah Jemaat</td>
        <td>Rp. <?php echo $a10;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.53.02</td>
        <td>Persembahan Ibadah Pria / Kaum Bapa</td>
        <td>Rp. <?php echo $a11;?></td>
         <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.53.03</td>
        <td>Persembahan Ibadah Wanita / Kaum Ibu</td>
        <td>Rp. <?php echo $a12;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.53.04</td>
        <td>Persembahan Ibadah Pemuda</td>
        <td>Rp. <?php echo $a13;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.53.05</td>
        <td>Persembahan Ibadah Remaja</td>
        <td>Rp. <?php echo $a14;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.53.06</td>
        <td>Persembahan Ibadah Anak / Sekolah Minggu</td>
        <td>Rp. <?php echo $a15;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.53.07.00</td>
        <td><b>PERSEMBAHAN IBADAH KELUARGA:</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.53.07.01</td>
        <td>Ibadah Syukur HUT Kelahiran</td>
        <td>Rp. <?php echo $a16;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.53.07.02</td>
        <td>Ibadah Syukur HUT Pernikahan</td>
        <td>Rp. <?php echo $a17;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.53.07.03</td>
        <td>Ibadah Syukur Keluarga Lainnya</td>
        <td>Rp. <?php echo $a18;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.53.08</td>
        <td>Ibadah Pengucapan Syukur Kolom</td>
        <td>Rp. <?php echo $a19;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.00</td>
        <td><b>PERSEMBAHAN IBADAH HARI RAYA:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.01</td>
        <td>Persembahan Ibadah Tahun Baru I</td>
        <td>Rp. <?php echo $a20;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.02</td>
        <td>Persembahan Ibadah Tahun Baru II</td>
        <td>Rp. <?php echo $a21;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.03</td>
        <td>Persembahan Ibadah Jumat Agung</td>
        <td>Rp. <?php echo $a22;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.04</td>
        <td>Persembahan Ibadah Paskah I</td>
        <td>Rp. <?php echo $a23;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.05</td>
        <td>Persembahan Ibadah Paskah II</td>
        <td>Rp. <?php echo $a24;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.06</td>
        <td>Persembahan Ibadah Hari Kenaikan</td>
        <td>Rp. <?php echo $a25;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.07</td>
        <td>Persembahan Ibadah Hari Pentakosta</td>
        <td>Rp. <?php echo $a26;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.08</td>
        <td>Persembahan Ibadah Hari Natal I</td>
        <td>Rp. <?php echo $a27;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.09</td>
        <td>Persembahan Ibadah Hari Natal II</td>
        <td>Rp. <?php echo $a28;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.54.10</td>
        <td>Persembahan Ibadah Akhir Tahun</td>
        <td>Rp. <?php echo $a29;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.55.00</td>
        <td><b>Persembahan Ibadah Perjamuan Kudus:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.55.01</td>
        <td>Perjamuan Kudus Jumat Agung</td>
        <td>Rp. <?php echo $a30;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.55.02</td>
        <td>Perjamuan Kudus Tengah Tahun</td>
        <td>Rp. <?php echo $a31;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.55.03</td>
        <td>Perjamuan Kudus Sedunia</td>
        <td>Rp. <?php echo $a32;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.55.04</td>
        <td>Perjamuan Kudus Akhir Tahun</td>
        <td>Rp. <?php echo $a33;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.56.00</td>
        <td>Persembahan Minggu Pertama Januari</td>
        <td>Rp. <?php echo $a34;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.57.00</td>
        <td>Persembahan Ibadah Pengucapan Syukur Jemaat</td>
        <td>Rp. <?php echo $a35;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.58.00</td>
        <td>Persembahan Ibadah Peneguhan dan Pemberkatan Nikah</td>
        <td>Rp. <?php echo $a36;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    
     <tr>
        <td>1.3.59.00</td>
        <td>Persembahan Ibadah Katekisasi</td>
        <td>Rp. <?php echo $a37;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.60.00</td>
        <td>Persembahan Ibadah PA / Konven Pelayan Khusus</td>
        <td>Rp. <?php echo $a38;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.61.00</td>
        <td>Persembahan Ibadah Sidang Majelis Jemaat</td>
        <td>Rp. <?php echo $a39;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.62.00</td>
        <td>Persembahan Ibadah Organisasi / Rukun</td>
        <td>Rp. <?php echo $a40;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.63.00</td>
        <td>Persembahan Ibadah Komisi Gereja</td>
        <td>Rp. <?php echo $a41;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.64.00</td>
        <td><b>PERSEMBAHAN IBADAH HUT:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.64.01</td>
        <td>Persembahan HUT PI dan Pendidikan Kristen GMIM</td>
        <td>Rp. <?php echo $a42;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.64.02</td>
        <td>Persembahan HUT GMIM Bersinode</td>
        <td>Rp. <?php echo $a43;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.64.03</td>
        <td>Persembahan HUT Jemaat</td>
        <td>Rp. <?php echo $a44;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
   <tr>
        <td>1.3.64.04</td>
        <td>Persembahan HUT Pria / Kaum Bapa</td>
        <td>Rp. <?php echo $a45;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.64.05</td>
        <td>Persembahan HUT Wanita / Kaum Ibu</td>
        <td>Rp. <?php echo $a46;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.64.06</td>
        <td>Persembahan HUT Pemuda</td>
        <td>Rp. <?php echo $a47;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.64.07</td>
        <td>Persembahan HUT Remaja</td>
        <td>Rp. <?php echo $a48;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.64.08</td>
        <td>Persembahan HUT ASM / GSM</td>
        <td>Rp. <?php echo $a49;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.65.00</td>
        <td><b>PERSEMBAHAN IBADAH MENYAMBUT NATAL:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.65.01</td>
        <td>Persembahan Ibadah Menyambut Natal Kolom</td>
        <td>Rp. <?php echo $a50;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.65.02</td>
        <td>Persembahan Ibadah Menyambut Natal Keluarga</td>
        <td>Rp. <?php echo $a51;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.65.03</td>
        <td>Persembahan Ibadah Menyambut Natal Jemaat</td>
        <td>Rp. <?php echo $a52;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.65.04</td>
        <td>Persembahan Ibadah Menyambut Natal Pria / Kaum Bapa</td>
        <td>Rp. <?php echo $a53;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.65.05</td>
        <td>Persembahan Ibadah Menyambut Natal Wanita / Kaum Ibu</td>
        <td>Rp. <?php echo $a54;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.65.06</td>
        <td>Persembahan Ibadah Menyambut Natal Pemuda</td>
        <td>Rp. <?php echo $a55;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.65.07</td>
        <td>Persembahan Ibadah Menyambut Natal Remaja</td>
        <td>Rp. <?php echo $a56;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.65.08</td>
        <td>Persembahan Ibadah Menyambut Natal ASM</td>
        <td>Rp. <?php echo $a57;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.65.09</td>
        <td>Persembahan Ibadah Menyambut Natal GSM</td>
        <td>Rp. <?php echo $a58;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.65.10</td>
        <td>Persembahan Ibadah Menyambut Natal Pelayan Khusus</td>
        <td>Rp. <?php echo $a59;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr><tr>
        <td>1.3.65.11</td>
        <td>Persembahan Ibadah Menyambut Natal Organisasi / Rukun</td>
        <td>Rp. <?php echo $a60;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.66.00</td>
        <td><b>SAMPUL-SAMPUL:</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.66.01</td>
        <td>Sampul Syukur HUT Kelahiran</td>
        <td>Rp. <?php echo $a61;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.66.02</td>
        <td>Sampul Syukur HUT Pernikahan</td>
        <td>Rp. <?php echo $a62;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
   <tr>
        <td>1.3.66.03</td>
        <td>Sampul Syukur Pemberkatan / Peneguhan Nikah</td>
        <td>Rp. <?php echo $a63;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.66.04</td>
        <td>Sampul Syukur Baptisan Kudus</td>
        <td>Rp. <?php echo $a64;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.66.05</td>
        <td>Sampul Syukur Perjamuan Kudus</td>
        <td>Rp. <?php echo $a65;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.66.06</td>
        <td>Sampul Syukur Peneguhan Sidi</td>
        <td>Rp. <?php echo $a66;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.66.07</td>
        <td>Sampul Syukur Tahun Baru</td>
        <td>Rp. <?php echo $a67;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.66.08</td>
        <td>Sampul Syukur Paskah</td>
        <td>Rp. <?php echo $a68;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.66.09</td>
        <td>Sampul Syukur HUT PI  dan Pendidikan Kristen GMIM</td>
        <td>Rp. <?php echo $a69;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.66.10</td>
        <td>Sampul Syukur HUT GMIM Bersinode</td>
        <td>Rp. <?php echo $a70;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.66.11</td>
        <td>Sampul Syukur Natal</td>
        <td>Rp. <?php echo $a71;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.66.12</td>
        <td>Sampul Pengucapan Syukur</td>
        <td>Rp. <?php echo $a72;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.66.13</td>
        <td>Sampul Syukur Lainnya</td>
        <td>Rp. <?php echo $a73;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>1.3.80.00</td>
        <td><b>USAHA-USAHA:</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.80.01</td>
        <td>Usaha Komisi Pengembangan Sumber Daya (PSD)</td>
        <td>Rp. <?php echo $a74;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.80.02</td>
        <td>Usaha Komisi Kerja Lainnya</td>
        <td>Rp. <?php echo $a75;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>1.3.80.03</td>
        <td>Hasil Penyewaan Aula, Kursi, dll</td>
        <td>Rp. <?php echo $a76;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>2.0.00.00</td>
        <td><b>KESAKSIAN DAN KERJASAMA (MARTURIA):</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>2.3.01.00</td>
        <td><b>Usaha Komisi KPDP:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2.3.01.01</td>
        <td>Persembahan Ibadah KPI</td>
        <td>Rp. <?php echo $a77;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>2.3.50.00</td>
        <td><b>PERSEMBAHAN IBADAH KHUSUS:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2.3.50.01</td>
        <td>Persembahan Ibadah HUT Kemerdekaan RI</td>
        <td>Rp. <?php echo $a78;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
   <tr>
        <td>2.3.50.02</td>
        <td>Persembahan Ibadah HUT GPI</td>
        <td>Rp. <?php echo $a79;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.3.50.03</td>
        <td>Persembahan Ibadah HUT Sinode Am Suluteng</td>
        <td>Rp. <?php echo $a81;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.3.50.04</td>
        <td>Persembahan Ibadah HUT PGI / Hari Oikumene</td>
        <td>Rp. <?php echo $a82;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.3.50.05</td>
        <td>Persembahan Ibadah Hari Alkitab</td>
        <td>Rp. <?php echo $a83;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>2.3.50.06</td>
        <td>Persembahan Ibadah Hari Doa Sedunia</td>
        <td>Rp. <?php echo $a84;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.0.00.00</td>
        <td><b>DIAKONIA:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.3.01.00</td>
        <td>Kesehatan:</td>
        <td>Rp. <?php echo $a85;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr> 
    <tr>
        <td>3.3.01.50</td>
        <td>Usaha Komisi Kesehatan Jemaat:</td>
        <td>Rp. <?php echo $a86;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.3.01.60</td>
        <td>Iuran Dana Sehat Anggota Jemaat</td>
        <td>Rp. <?php echo $a87;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>3.3.02.00</td>
        <td><b>Pendidikan:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.3.02.50</td>
        <td>Usaha Komisi Pendidikan:</td>
        <td>Rp. <?php echo $a88;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.3.03.01</td>
        <td>Dana Duka</td>
        <td>Rp. <?php echo $a89;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
 <tr>
        <td>3.3.04.00</td>
        <td>Dana Bencana Alam</td>
        <td>Rp. <?php echo $a90;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.3.05.00</td>
        <td>Persembahan Ibadah Natura</td>
        <td>Rp. <?php echo $a91;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>3.3.06.00</td>
        <td>Persembahan Puasa Diakonal</td>
        <td>Rp. <?php echo $a92;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>4.0.00.00</td>
        <td><b>DANA PEMBANGUNAN:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4.3.60.00</td>
        <td>Usaha Komisi / Panitia Pembangunan</td>
        <td>Rp. <?php echo $a93;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>4.3.61.00</td>
        <td>Hasil Penggalangan Dana Pembangunan dari Kolom-Kolom</td>
        <td>Rp. <?php echo $a94;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>4.3.62.00</td>
        <td>Hasil Penggalangan Dana Pembangunan oleh BPMJ</td>
        <td>Rp. <?php echo $a95;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>4.3.63.00</td>
        <td>Sumbangan Bantuan Khusus untuk Pembangunan dari Pemerintah atau Swasta</td>
        <td>Rp. <?php echo $a96;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>4.3.64.00</td>
        <td>Sampul Pembangunan</td>
        <td>Rp. <?php echo $a97;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>5.0.00.00</td>
        <td><b>PENDAPATAN LAINNYA:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>5.3.60.00</td>
        <td>Partisipasi / Sumbangan</td>
        <td>Rp. <?php echo $a98;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>5.3.60.01</td>
        <td>Gereja dan Lembaga Kristen (Dalam dan Luar Negeri)</td>
        <td>Rp. <?php echo $b1;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>5.3.60.02</td>
        <td>Pemerintah</td>
        <td>Rp. <?php echo $b2;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>5.3.60.03</td>
        <td>Swasta</td>
        <td>Rp. <?php echo $b3;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>5.3.70.00</td>
        <td>Usaha BPMJ</td>
        <td>Rp. <?php echo $b4;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>5.3.80.00</td>
        <td>Jasa Bank</td>
        <td>Rp. <?php echo $b5;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>5.3.90.00</td>
        <td>Pendapatan Lain-Lain</td>
        <td>Rp. <?php echo $b6;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
    <tr>
        <td>6.0.00.00</td>
        <td><b>DANA TRANSIT:</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6.3.50.00</td>
        <td><b>Pundi Extra</b></td>
        <td></td>
        <td></td>
    </tr>
     <tr>
        <td>6.3.50.01</td>
        <td>Pundi Extra untuk SMS / SMST</td>
        <td>Rp. <?php echo $b7;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.3.50.02</td>
        <td>Pundi Extra untuk Kegiatan Wilayah</td>
        <td>Rp. <?php echo $b8;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.3.50.03</td>
        <td>Pundi Extra untuk Kegiatan Lainnya</td>
        <td>Rp. <?php echo $b9;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.3.51.00</td>
        <td><b>Kartu Partisipasi / Mapalus</b></td>
        <td></td>
        <td></td>
    </tr>    
     <tr>
        <td>6.3.51.01</td>
        <td>Kartu Kawan Panitia SMS / SMST</td>
        <td>Rp. <?php echo $b10;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.3.51.02</td>
        <td>Kartu Kawan untuk Kegiatan Khusus Lainnya</td>
        <td>Rp. <?php echo $b11;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>
     <tr>
        <td>6.3.52.00</td>
        <td><b>Dana-Dana Kegiatan Sinodal Lainnya</b></td>
        <td>Rp. <?php echo $b12;?></td>
        <td>Rp. <?php echo (int)$a1 * 12 ; ?></td>
    </tr>  
    <tr>
        <td colspan="2" align="center"><b>Total</b></td>
        <td>Rp. <?php echo $total ; ?></td>
        <td>Rp. <?php echo (int)$total * 12 ; ?></td>
    </tr>
</table>
</form>
<br>
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