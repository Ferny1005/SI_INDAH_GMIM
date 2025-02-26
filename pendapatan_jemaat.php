<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pendapatan Jemaat</title>
</head>
<link href="Admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
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
<div class="book">
    <div class="page">
<form method="POST" action="cetak_pendapatan_jemaat"> <button class="btn btn-info btn-fill pull-right">Cetak !</button>
           <table width="90%">
    <tr align="center"><td><img src="images/Logo-GMIM.png" width="100px"></td>
          <td align="center">
            <h6>GEREJA MASEHI INJILI di MINAHASA</h6>
            <h6>JEMAAT GMIM BETHESDA WILAYAH TATELU</h6>
            <h6>ANGGARAN BELANJA dan PENDAPATAN JEMAAT TAHUN 2022</h6>
            <h6>PERIODE PELAYANAN 2022 - 2026</h6>
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
        <td><input type="number" name="a1"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.50.02</td>
        <td>Pagi</td>
        <td><input type="number" name="a2"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.50.03</td>
        <td>Malam</td>
        <td><input type="number" name="a3"></td>
         <td></td>
    </tr>
    </tr>
    <tr>
        <td>1.3.51.00</td>
        <td><b>PERSEMBAHAN PERSEPULUHAN & PBTK</b></td>
        <td><input type="number" name="a4"></td>
         <td></td>
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
        <td><input type="number" name="a80"></td>
         <td></td>
    </tr>
     <tr>
        <td>1.3.01.03</td>
        <td>Pemuda Jemaat</td>
        <td><input type="number" name="a5"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.01.04</td>
        <td>Remaja Jemaat</td>
        <td><input type="number" name="a6"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.01.05</td>
        <td>Anak Sekolah Minggu</td>
        <td><input type="number" name="a7"></td>
         <td></td>
    </tr> 
<tr>
        <td>1.3.01.06</td>
        <td>Pondok Gembira Anak Sekolah Minggu</td>
        <td><input type="number" name="a8"></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.01.07</td>
        <td>Guru-Guru Sekolah Minggu</td>
        <td><input type="number" name="a9"></td>
         <td></td>
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
        <td><input type="number" name="a10"></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.53.02</td>
        <td>Persembahan Ibadah Pria / Kaum Bapa</td>
        <td><input type="number" name="a11"></td>
         <td></td>
    </tr>
     <tr>
        <td>1.3.53.03</td>
        <td>Persembahan Ibadah Wanita / Kaum Ibu</td>
        <td><input type="number" name="a12"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.53.04</td>
        <td>Persembahan Ibadah Pemuda</td>
        <td><input type="number" name="a13"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.53.05</td>
        <td>Persembahan Ibadah Remaja</td>
        <td><input type="number" name="a14"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.53.06</td>
        <td>Persembahan Ibadah Anak / Sekolah Minggu</td>
        <td><input type="number" name="a15"></td>
        <td></td>
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
        <td><input type="number" name="a16"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.53.07.02</td>
        <td>Ibadah Syukur HUT Pernikahan</td>
        <td><input type="number" name="a17"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.53.07.03</td>
        <td>Ibadah Syukur Keluarga Lainnya</td>
        <td><input type="number" name="a18"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.53.08</td>
        <td>Ibadah Pengucapan Syukur Kolom</td>
        <td><input type="number" name="a19"></td>
        <td></td>
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
        <td><input type="number" name="a20"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.02</td>
        <td>Persembahan Ibadah Tahun Baru II</td>
        <td><input type="number" name="a21"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.03</td>
        <td>Persembahan Ibadah Jumat Agung</td>
        <td><input type="number" name="a22"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.04</td>
        <td>Persembahan Ibadah Paskah I</td>
        <td><input type="number" name="a23"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.05</td>
        <td>Persembahan Ibadah Paskah II</td>
        <td><input type="number" name="a24"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.06</td>
        <td>Persembahan Ibadah Hari Kenaikan</td>
        <td><input type="number" name="a25"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.07</td>
        <td>Persembahan Ibadah Hari Pentakosta</td>
        <td><input type="number" name="a26"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.08</td>
        <td>Persembahan Ibadah Hari Natal I</td>
        <td><input type="number" name="a27"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.09</td>
        <td>Persembahan Ibadah Hari Natal II</td>
        <td><input type="number" name="a28"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.54.10</td>
        <td>Persembahan Ibadah Akhir Tahun</td>
        <td><input type="number" name="a29"></td>
        <td></td>
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
        <td><input type="number" name="a30"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.55.02</td>
        <td>Perjamuan Kudus Tengah Tahun</td>
        <td><input type="number" name="a31"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.55.03</td>
        <td>Perjamuan Kudus Sedunia</td>
        <td><input type="number" name="a32"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.55.04</td>
        <td>Perjamuan Kudus Akhir Tahun</td>
        <td><input type="number" name="a33"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.56.00</td>
        <td>Persembahan Minggu Pertama Januari</td>
        <td><input type="number" name="a34"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.57.00</td>
        <td>Persembahan Ibadah Pengucapan Syukur Jemaat</td>
        <td><input type="number" name="a35"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.58.00</td>
        <td>Persembahan Ibadah Peneguhan dan Pemberkatan Nikah</td>
        <td><input type="number" name="a36"></td>
        <td></td>
    </tr>
    
     <tr>
        <td>1.3.59.00</td>
        <td>Persembahan Ibadah Katekisasi</td>
        <td><input type="number" name="a37"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.60.00</td>
        <td>Persembahan Ibadah PA / Konven Pelayan Khusus</td>
        <td><input type="number" name="a38"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.61.00</td>
        <td>Persembahan Ibadah Sidang Majelis Jemaat</td>
        <td><input type="number" name="a39"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.62.00</td>
        <td>Persembahan Ibadah Organisasi / Rukun</td>
        <td><input type="number" name="a40"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.63.00</td>
        <td>Persembahan Ibadah Komisi Gereja</td>
        <td><input type="number" name="a41"></td>
        <td></td>
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
        <td><input type="number" name="a42"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.64.02</td>
        <td>Persembahan HUT GMIM Bersinode</td>
        <td><input type="number" name="a43"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.64.03</td>
        <td>Persembahan HUT Jemaat</td>
        <td><input type="number" name="a44"></td>
        <td></td>
    </tr>
   <tr>
        <td>1.3.64.04</td>
        <td>Persembahan HUT Pria / Kaum Bapa</td>
        <td><input type="number" name="a45"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.64.05</td>
        <td>Persembahan HUT Wanita / Kaum Ibu</td>
        <td><input type="number" name="a46"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.64.06</td>
        <td>Persembahan HUT Pemuda</td>
        <td><input type="number" name="a47"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.64.07</td>
        <td>Persembahan HUT Remaja</td>
        <td><input type="number" name="a48"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.64.08</td>
        <td>Persembahan HUT ASM / GSM</td>
        <td><input type="number" name="a49"></td>
        <td></td>
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
        <td><input type="number" name="a50"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.65.02</td>
        <td>Persembahan Ibadah Menyambut Natal Keluarga</td>
        <td><input type="number" name="a51"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.65.03</td>
        <td>Persembahan Ibadah Menyambut Natal Jemaat</td>
        <td><input type="number" name="a52"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.65.04</td>
        <td>Persembahan Ibadah Menyambut Natal Pria / Kaum Bapa</td>
        <td><input type="number" name="a53"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.65.05</td>
        <td>Persembahan Ibadah Menyambut Natal Wanita / Kaum Ibu</td>
        <td><input type="number" name="a54"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.65.06</td>
        <td>Persembahan Ibadah Menyambut Natal Pemuda</td>
        <td><input type="number" name="a55"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.65.07</td>
        <td>Persembahan Ibadah Menyambut Natal Remaja</td>
        <td><input type="number" name="a56"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.65.08</td>
        <td>Persembahan Ibadah Menyambut Natal ASM</td>
        <td><input type="number" name="a57"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.65.09</td>
        <td>Persembahan Ibadah Menyambut Natal GSM</td>
        <td><input type="number" name="a58"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.65.10</td>
        <td>Persembahan Ibadah Menyambut Natal Pelayan Khusus</td>
        <td><input type="number" name="a59"></td>
        <td></td>
    </tr><tr>
        <td>1.3.65.11</td>
        <td>Persembahan Ibadah Menyambut Natal Organisasi / Rukun</td>
        <td><input type="number" name="a60"></td>
        <td></td>
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
        <td><input type="number" name="a61"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.66.02</td>
        <td>Sampul Syukur HUT Pernikahan</td>
        <td><input type="number" name="a62"></td>
        <td></td>
    </tr>
   <tr>
        <td>1.3.66.03</td>
        <td>Sampul Syukur Pemberkatan / Peneguhan Nikah</td>
        <td><input type="number" name="a63"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.66.04</td>
        <td>Sampul Syukur Baptisan Kudus</td>
        <td><input type="number" name="a64"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.66.05</td>
        <td>Sampul Syukur Perjamuan Kudus</td>
        <td><input type="number" name="a65"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.66.06</td>
        <td>Sampul Syukur Peneguhan Sidi</td>
        <td><input type="number" name="a66"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.66.07</td>
        <td>Sampul Syukur Tahun Baru</td>
        <td><input type="number" name="a67"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.66.08</td>
        <td>Sampul Syukur Paskah</td>
        <td><input type="number" name="a68"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.66.09</td>
        <td>Sampul Syukur HUT PI  dan Pendidikan Kristen GMIM</td>
        <td><input type="number" name="a69"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.66.10</td>
        <td>Sampul Syukur HUT GMIM Bersinode</td>
        <td><input type="number" name="a70"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.66.11</td>
        <td>Sampul Syukur Natal</td>
        <td><input type="number" name="a71"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.66.12</td>
        <td>Sampul Pengucapan Syukur</td>
        <td><input type="number" name="a72"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.66.13</td>
        <td>Sampul Syukur Lainnya</td>
        <td><input type="number" name="a73"></td>
        <td></td>
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
        <td><input type="number" name="a74"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.80.02</td>
        <td>Usaha Komisi Kerja Lainnya</td>
        <td><input type="number" name="a75"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.80.03</td>
        <td>Hasil Penyewaan Aula, Kursi, dll</td>
        <td><input type="number" name="a76"></td>
        <td></td>
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
        <td><input type="number" name="a77"></td>
        <td></td>
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
        <td><input type="number" name="a78"></td>
        <td></td>
    </tr>
   <tr>
        <td>2.3.50.02</td>
        <td>Persembahan Ibadah HUT GPI</td>
        <td><input type="number" name="a79"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.3.50.03</td>
        <td>Persembahan Ibadah HUT Sinode Am Suluteng</td>
        <td><input type="number" name="a81"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.3.50.04</td>
        <td>Persembahan Ibadah HUT PGI / Hari Oikumene</td>
        <td><input type="number" name="a82"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.3.50.05</td>
        <td>Persembahan Ibadah Hari Alkitab</td>
        <td><input type="number" name="a83"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.3.50.06</td>
        <td>Persembahan Ibadah Hari Doa Sedunia</td>
        <td><input type="number" name="a84"></td>
        <td></td>
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
        <td><input type="number" name="a85"></td>
        <td></td>
    </tr> 
    <tr>
        <td>3.3.01.50</td>
        <td>Usaha Komisi Kesehatan Jemaat:</td>
        <td><input type="number" name="a86"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.3.01.60</td>
        <td>Iuran Dana Sehat Anggota Jemaat</td>
        <td><input type="number" name="a87"></td>
        <td></td>
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
        <td><input type="number" name="a88"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.3.03.01</td>
        <td>Dana Duka</td>
        <td><input type="number" name="a89"></td>
        <td></td>
    </tr>
 <tr>
        <td>3.3.04.00</td>
        <td>Dana Bencana Alam</td>
        <td><input type="number" name="a90"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.3.05.00</td>
        <td>Persembahan Ibadah Natura</td>
        <td><input type="number" name="a91"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.3.06.00</td>
        <td>Persembahan Puasa Diakonal</td>
        <td><input type="number" name="a92"></td>
        <td></td>
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
        <td><input type="number" name="a93"></td>
        <td></td>
    </tr>
    <tr>
        <td>4.3.61.00</td>
        <td>Hasil Penggalangan Dana Pembangunan dari Kolom-Kolom</td>
        <td><input type="number" name="a94"></td>
        <td></td>
    </tr>
    <tr>
        <td>4.3.62.00</td>
        <td>Hasil Penggalangan Dana Pembangunan oleh BPMJ</td>
        <td><input type="number" name="a95"></td>
        <td></td>
    </tr>
    <tr>
        <td>4.3.63.00</td>
        <td>Sumbangan Bantuan Khusus untuk Pembangunan dari Pemerintah atau Swasta</td>
        <td><input type="number" name="a96"></td>
        <td></td>
    </tr>
     <tr>
        <td>4.3.64.00</td>
        <td>Sampul Pembangunan</td>
        <td><input type="number" name="a97"></td>
        <td></td>
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
        <td><input type="number" name="a98"></td>
        <td></td>
    </tr>
    <tr>
        <td>5.3.60.01</td>
        <td>Gereja dan Lembaga Kristen (Dalam dan Luar Negeri)</td>
        <td><input type="number" name="b1"></td>
        <td></td>
    </tr>
    <tr>
        <td>5.3.60.02</td>
        <td>Pemerintah</td>
        <td><input type="number" name="b2"></td>
        <td></td>
    </tr>
    <tr>
        <td>5.3.60.03</td>
        <td>Swasta</td>
        <td><input type="number" name="b3"></td>
        <td></td>
    </tr>
    <tr>
        <td>5.3.70.00</td>
        <td>Usaha BPMJ</td>
        <td><input type="number" name="b4"></td>
        <td></td>
    </tr>
     <tr>
        <td>5.3.80.00</td>
        <td>Jasa Bank</td>
        <td><input type="number" name="b5"></td>
        <td></td>
    </tr>
     <tr>
        <td>5.3.90.00</td>
        <td>Pendapatan Lain-Lain</td>
        <td><input type="number" name="b6"></td>
        <td></td>
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
        <td><input type="number" name="b7"></td>
        <td></td>
    </tr>
     <tr>
        <td>6.3.50.02</td>
        <td>Pundi Extra untuk Kegiatan Wilayah</td>
        <td><input type="number" name="b8"></td>
        <td></td>
    </tr>
     <tr>
        <td>6.3.50.03</td>
        <td>Pundi Extra untuk Kegiatan Lainnya</td>
        <td><input type="number" name="b9"></td>
        <td></td>
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
        <td><input type="number" name="b10"></td>
        <td></td>
    </tr>
     <tr>
        <td>6.3.51.02</td>
        <td>Kartu Kawan untuk Kegiatan Khusus Lainnya</td>
        <td><input type="number" name="b11"></td>
        <td></td>
    </tr>
     <tr>
        <td>6.3.52.00</td>
        <td><b>Dana-Dana Kegiatan Sinodal Lainnya</b></td>
        <td><input type="number" name="b12"></td>
        <td></td>
    </tr>  
</table>
</form>
    </div>
 
   
</div>
</body>
</html>