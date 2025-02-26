                          <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
  <a href="index.php?p=inven" class="btn btn-info btn-fill pull-right">Tambah Data</a>
                        <div class="card">
                            <div class="header">
                                
                                <br>
                                <h4 class="title">Daftar Inventaris Barang</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover ">
                                    <thead align="center">
                                        <th>No.</th>
                                    	<th>Tanggal</th>
                                        <th>Jenis Barang</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th colspan="3" style="text-align: center;">Keadaan Barang</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        <th>Baik</th>
                                        <th>Sedang</th>
                                        <th>Rusak</th>
                                          <td></td>
                                          <td></td>
                                    </tr>
                                    <tbody>
                                        	<?php 
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from inventaris");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['jenis']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
                <td>Rp. <?php echo $d['harga']; ?></td>
                <td><?php echo $d['keadaan_baik']; ?></td>
                <td><?php echo $d['keadaan_sedang']; ?></td>
                <td><?php echo $d['keadaan_rusak']; ?></td>
                <td><?php echo $d['lokasi']; ?></td>
                <td><?php echo $d['keterangan']; ?></td>
                <td><a href="hapus_inven.php?id_barang=<?php echo $d['id_barang']; ?>">HAPUS</a></td>
            </tr>
            <?php 
        }
        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



    </div>
</div>
</div>
