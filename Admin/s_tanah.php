
                        <div class="card">
                            <div class="header">
                                
                                <br>
                                <h4 class="title">Daftar Inventaris Tanah & Bangunan</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover ">
                                    <thead align="center">
                                        <th>No. Urut</th>
                                    	<th colspan="2" style="text-align: center;">Letak Tanah</th>
                                        <th>Status Tanah</th>
                                        <th>Luas Tanah</th>
                                        <th>Pengelolah</th>
                                        <th>Bukti Kepemilikan</th>
                                        <th>Penggunaan</th>
                                        <th>Pencatatan Peralihan Hak</th>
                                        <th>NIS</th>
                                        <th>Keterangan</th>
                                    </thead>
                                    <tr>
                                          <th></th>
                                          <th rowspan="2">Pemerintah</th>
                                          <th>Gereja / Lembaga</th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                    </tr>
                                    <tbody>
                                        	<?php 
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from inven_tanah");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['letak']; ?></td>
                 <td><?php echo $d['letak_lembaga']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td><?php echo $d['luas']; ?></td>
                <td><?php echo $d['olah']; ?></td>
                <td><?php echo $d['bukti']; ?></td>
                <td><?php echo $d['penggunaan']; ?></td>
                <td><?php echo $d['pencatatan']; ?></td>
                <td><?php echo $d['nis']; ?></td>
                <td><?php echo $d['keterangan']; ?></td>
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
