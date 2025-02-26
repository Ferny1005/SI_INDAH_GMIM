<?php
include ('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Anggaran Belanja</title>
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
<form method="POST" action="cetak_anggaran_belanja"> <button class="btn btn-info btn-fill pull-right">Cetak !</button>
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
        <td>1.1.00.00</td>
        <td><u><b>SENTRALISASI KE SINODE</b></u></td>
        <td><input type="number" name="a1"></td>
         <td></td>
    </tr>
     <tr>
        <td>1.2.00.00</td>
        <td><u><b>SENTRALISASI KE WILAYAH</b></u></td>
        <td><input type="number" name="a2"></td>
        <td></td>
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
        <td><input type="number" name="a3"></td>
    </tr>
    <tr>
        <td>1.3.01.02</td>
        <td>Wanita/Kaum Ibu </td>
        <td><input type="number" name="a4"></td>
         <td></td>
    </tr>
     <tr>
        <td>1.3.01.03</td>
        <td>Pemuda</td>
        <td><input type="number" name="a5"></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.01.04</td>
        <td>Remaja</td>
        <td><input type="number" name="a6"></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.01.05</td>
        <td>Anak</td>
        <td><input type="number" name="a7"></td>
         <td></td>
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
        <td><input type="number" name="a8"></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.02.02</td>
        <td>Tunjangan Fungsional Pendeta Jemaat</td>
        <td><input type="number" name="a9"></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.02.03</td>
        <td>Tunjangan Fungsional Guru Agama</td>
        <td><input type="number" name="a10"></td>
         <td></td>
    </tr>
    <tr>
        <td>1.3.02.04</td>
        <td>Gaji Pegawai Tata Usaha</td>
        <td><input type="number" name="a11"></td>
         <td></td>
    </tr>
     <tr>
        <td>1.3.02.05</td>
        <td>Honor Kostor</td>
        <td><input type="number" name="a12"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.02.06</td>
        <td>Honor Vikaris Pendeta</td>
        <td><input type="number" name="a13"></td>
        <td></td>
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
        <td><input type="number" name="a14"></td>
        <td></td>
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
        <td><input type="number" name="a15"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.04.02</td>
        <td>Pendeta Jemaat / Vicaris Pendeta</td>
        <td><input type="number" name="a16"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.04.03</td>
        <td>Guru Agama</td>
        <td><input type="number" name="a17"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.04.04</td>
        <td>Pegawai Tata Usaha</td>
        <td><input type="number" name="a18"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.04.05</td>
        <td>Kostor</td>
        <td><input type="number" name="a19"></td>
        <td></td>
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
        <td><input type="number" name="a20"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.05.02</td>
        <td>Khadim Wilayah</td>
        <td><input type="number" name="a21"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.05.03</td>
        <td>Khadim Sinode</td>
        <td><input type="number" name="a22"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.05.04</td>
        <td>Khadim Ibadah Hari Raya</td>
        <td><input type="number" name="a23"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.05.05</td>
        <td>Khadim Baptisan, Sidi, Perjamuan, Pernikahan</td>
        <td><input type="number" name="a24"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.05.06</td>
        <td>Khadim Khusus</td>
        <td><input type="number" name="a25"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.05.07</td>
        <td>Khadim Natura</td>
        <td><input type="number" name="a26"></td>
        <td></td>
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
        <td><input type="number" name="a27"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.06.02</td>
        <td>Tim Musik / Kelompok Nyanyi Ibadah Hari Raya</td>
        <td><input type="number" name="a28"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.06.03</td>
        <td>Pemain Keyboard Ibadah Hari Khusus</td>
        <td><input type="number" name="a29"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.06.04</td>
        <td>Tim Pelayanan Ibadah Natura</td>
        <td><input type="number" name="a30"></td>
        <td></td>
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
        <td><input type="number" name="a31"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.07.02</td>
        <td>Pundi, Stola, Kain Mimbar, Lilin, dll.</td>
        <td><input type="number" name="a32"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.07.03</td>
        <td>Sampul-Sampul (Syukur / HUT / Persepuluhan, dll)</td>
        <td><input type="number" name="a33"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.07.04</td>
        <td>Biaya Roti dan Anggur Perjamuan</td>
        <td><input type="number" name="a34"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.07.05</td>
        <td>Alat / Perlengkapan Kantor (Kertas, Tinta, dll)</td>
        <td><input type="number" name="a35"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.07.06</td>
        <td>Konsumsi Ringan di Kantor Jemaat</td>
        <td><input type="number" name="a36"></td>
        <td></td>
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
        <td><input type="number" name="a37"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.08.02</td>
        <td>Bina Bapak (Pelita)</td>
        <td><input type="number" name="a38"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.08.03</td>
        <td>Bina Pemuda</td>
        <td><input type="number" name="a39"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.08.04</td>
        <td>Bina Remaja</td>
        <td><input type="number" name="a40"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.08.05</td>
        <td>Bina Anak</td>
        <td><input type="number" name="a41"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.08.06</td>
        <td>M T P J</td>
        <td><input type="number" name="a42"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.08.07</td>
        <td>R H K</td>
        <td><input type="number" name="a43"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.08.08</td>
        <td>Koran, Majalah / Dodoku</td>
        <td><input type="number" name="a44"></td>
        <td></td>
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
        <td><input type="number" name="a45"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.02</td>
        <td>Konsumsi Sidang Majelis Jemaat</td>
        <td><input type="number" name="a46"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.03</td>
        <td>Konsumsi Sidang Tahunan</td>
        <td><input type="number" name="a47"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.04</td>
        <td>Rapat Sidi Jemaat</td>
        <td><input type="number" name="a48"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.05</td>
        <td>Konsultasi dengan BPW / Sinode</td>
        <td><input type="number" name="a49"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.06</td>
        <td>Sidang Majelis Sinode Tahunan (SMST)</td>
        <td><input type="number" name="a50"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.09</td>
        <td>Sidang Majelis Sinode (SMS / SMSI)</td>
        <td><input type="number" name="a51"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.10</td>
        <td>Rapat Kerja Ketua-Ketua Jemaat Se Sinode</td>
        <td><input type="number" name="a52"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.09.11</td>
        <td>Rapat Kerja KSB se-Sinode</td>
        <td><input type="number" name="a53"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.09.12</td>
        <td>Konven Komisi Kerja Wilayah / Sinode</td>
        <td><input type="number" name="a54"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.09.13</td>
        <td>Konven Pendeta dan Guru Agama</td>
        <td><input type="number" name="a55"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.09.14</td>
        <td>Konven Penatua dan Syamas Wilayah / Sinode</td>
        <td><input type="number" name="a56"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.09.15</td>
        <td>Konven Kostor</td>
        <td><input type="number" name="a57"></td>
        <td></td>
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
        <td><input type="number" name="a58"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.10.02</td>
        <td>Pembekalan Komisi Kerja</td>
        <td><input type="number" name="a59"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.10.03</td>
        <td>Pembekalan Perbendaharaan</td>
        <td><input type="number" name="a60"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.10.04</td>
        <td>Pembekalan Anggota Jemaat</td>
        <td><input type="number" name="a61"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.10.05</td>
        <td>Katekisasi Calon Sidi Jemaat</td>
        <td><input type="number" name="a62"></td>
        <td></td>
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
        <td><input type="number" name="a63"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.11.02</td>
        <td>Air Minum (PAM)</td>
        <td><input type="number" name="a64"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.11.03</td>
        <td>Telepon</td>
        <td><input type="number" name="a65"></td>
        <td></td>
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
        <td><input type="number" name="a66"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.12.02</td>
        <td>Sewa Kendaraan</td>
        <td><input type="number" name="a67"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.12.03</td>
        <td>Perjalanan Dinas (Tiket, Airport Tax, Akomodasi,Uang Makan)</td>
        <td><input type="number" name="a68"></td>
        <td></td>
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
        <td><input type="number" name="a69"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.13.02</td>
        <td>Surat Kendaraan (STNK / Pajak)</td>
        <td><input type="number" name="a70"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.13.03</td>
        <td>Surat Tanah / Bangunan (Sertifikat, Akta, IMB, PBB)</td>
        <td><input type="number" name="a71"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.13.04</td>
        <td>Perbaikan Peralatan / Perlengkapan Inventaris</td>
        <td><input type="number" name="a72"></td>
        <td></td>
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
        <td><input type="number" name="a73"></td>
        <td></td>
    </tr>
     <tr>
        <td>1.3.14.02</td>
        <td>Biaya Pelayanan KPPW / KPPS</td>
        <td><input type="number" name="a74"></td>
        <td></td>
    </tr>
    <tr>
        <td>1.3.15.00</td>
        <td><b>Biaya Pelaksanaan Pemilihan Pelsus:</b></td>
        <td><input type="number" name="a75"></td>
        <td></td>
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
        <td><input type="number" name="a76"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.1.01.02</td>
        <td>Pekabaran Injil Keluar</td>
        <td><input type="number" name="a77"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.1.01.03</td>
        <td>Biaya Perkunjungan Pelayanan</td>
        <td><input type="number" name="a78"></td>
        <td></td>
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
        <td><input type="number" name="a79"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.1.02.02</td>
        <td>Kemitraan / Jemaat Mitra</td>
        <td><input type="number" name="a80"></td>
        <td></td>
    </tr>
    <tr>
        <td>2.1.02.03</td>
        <td>Kerjasama dengan Jemaat / Lembaga / Gereja Lain</td>
        <td><input type="number" name="a81"></td>
        <td></td>
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
        <td><input type="number" name="a82"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.01.02</td>
        <td>Dana Sehat Keluarga Pendeta / Guru Agama Non Pekerja Gmim
</td>
        <td><input type="number" name="a83"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.01.03</td>
        <td>Dana Sehat Pelayan Khusus Non Pendeta / Guru Agama
</td>
        <td><input type="number" name="a84"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.01.04</td>
        <td>Dana Sehat Anggota Jemaat
</td>
        <td><input type="number" name="a85"></td>
        <td></td>
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
        <td><input type="number" name="a86"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.02.02</td>
        <td>Honor Penjaga Sekolah
</td>
        <td><input type="number" name="a87"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.02.03</td>
        <td>Biaya Operasional Sekolah
</td>
        <td><input type="number" name="a88"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.02.04</td>
        <td>Beasiswa Pendidikan Anggota Jemaat
</td>
        <td><input type="number" name="a89"></td>
        <td></td>
    </tr>
 <tr>
        <td>3.1.02.05</td>
        <td>Beasiswa Pendidikan Non Anggota Jemaat</td>
        <td><input type="number" name="a90"></td>
        <td></td>
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
        <td><input type="number" name="a91"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.03.02</td>
        <td>Karangan Bunga Kedukaan
</td>
        <td><input type="number" name="a92"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.04.00
</td>
        <td><b>Bantuan Bencana Alam
</b></td>
        <td><input type="number" name="a93"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.05.00
</td>
        <td><b>Diakonia Hasil Ibadah Natura</b>
</td>
        <td><input type="number" name="a94"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.06.00
</td>
        <td><b>Puasa Diakonal</b>
</td>
        <td><input type="number" name="a95"></td>
        <td></td>
    </tr>
    <tr>
        <td>3.1.07.00
</td>
        <td>Pemupukan Dana Abadi
</td>
        <td><input type="number" name="a96"></td>
        <td></td>
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
        <td><input type="number" name="a99"></td>
        <td></td>
    </tr>
    <tr>
        <td>4.1.01.02
</td>
        <td>Aula (Kursi, Meja, Sound System, dll)

</td>
        <td><input type="number" name="b1"></td>
        <td></td>
    </tr>

    <tr>
        <td>4.1.01.03
</td>
        <td>Kantor / Konsistori (Kursi, Meja, Lemari, Komputer, Printer, Papan Tulis, dll)

</td>
        <td><input type="number" name="b2"></td>
        <td></td>
    </tr>
    <tr>
        <td>4.1.01.04</td>
        <td>Pastori (Kursi, Meja, Lemari, Tempat Tidur, dll)</td>
        <td><input type="number" name="b3"></td>
        <td></td>
    </tr>
    <tr>
        <td>4.1.02.00
</td>
        <td>Pengadaan Kendaraan (Sepeda, Sepeda Motor, Mobil, Perahu, Perahu Motor)

</td>
        <td><input type="number" name="b4"></td>
        <td></td>
    </tr>
     <tr>
        <td>4.1.03.00
</td>
        <td>Pembangunan Gedung, Kantor / Konsistori, Patori Gereja
</td>
        <td><input type="number" name="b5"></td>
        <td></td>
    </tr>
     <tr>
        <td>4.1.04.00
</td>
        <td>Pembangunan Gedung / Perlengkapan Sekolah
</td>
        <td><input type="number" name="b6"></td>
        <td></td>
    </tr>
     <tr>
        <td>4.1.05.00
</td>
        <td>Pengadaan Kintal
</td>
        <td><input type="number" name="b7"></td>
        <td></td>
    </tr>
     <tr>
        <td>4.1.06.00
</td>
        <td>Sewa Kontrak Bangunan
</td>
        <td><input type="number" name="b8"></td>
        <td></td>
    </tr>
     <tr>
        <td>4.1.07.00
</td>
        <td>Pengadaan Tenda
</td>
        <td><input type="number" name="b9"></td>
        <td></td>
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
        <td><input type="number" name="b10"></td>
        <td></td>
    </tr>
     <tr>
        <td>5.1.02.00
</td>
        <td>Biaya Lembur
</td>
        <td><input type="number" name="b11"></td>
        <td></td>
    </tr>
     <tr>
        <td>5.1.03.00
</td>
        <td>Biaya Administrasi Bank
</td>
        <td><input type="number" name="b12"></td>
        <td></td>
    </tr>
     <tr>
        <td>5.1.04.00
</td>
        <td>Biaya Lain-Lain
</td>
        <td><input type="number" name="b13"></td>
        <td></td>
    </tr>
     <tr>
        <td>6.0.00.00
</td>
        <td><b>DANA TRANSIT:
</b></td>
        <td><input type="number" name="b14"></td>
        <td></td>
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
        <td><input type="number" name="b15"></td>
        <td></td>
    </tr>
     <tr>
        <td>6.1.01.02</td>
        <td>Pundi Extra untuk Kegiatan Wilayah</td>
        <td><input type="number" name="b16"></td>
        <td></td>
    </tr>
    <tr>
        <td>6.1.01.03
</td>
        <td>Pundi Extra untuk Kegiatan Lainnya
</td>
        <td><input type="number" name="b17"></td>
        <td></td>
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
        <td><input type="number" name="b18"></td>
        <td></td>
    </tr>
    <tr>
        <td>6.1.02.02
</td>
        <td>Kartu Kawan untuk Kegiatan Khusus Lainnya</td>
        <td><input type="number" name="b19"></td>
        <td></td>
    </tr>
    <tr>
        <td>6.1.03.00</td>
        <td><b>Penyaluran Dana-Dana Kegiatan Sinodal lainnya</b></td>
        <td><input type="number" name="b20"></td>
        <td></td>
    </tr>
    
</table>

</form>
    </div>
 
   
</div>
</body>
</html>