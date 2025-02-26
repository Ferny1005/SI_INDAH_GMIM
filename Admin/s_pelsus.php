
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daftar Badan Pekerja Majelis Jemaat</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                    	<th>Nama</th>
                                    	<th>Jabatan</th>
                                    </thead>
                                    <tbody>
                                        	<?php 
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from pelsus");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jabatan']; ?></td>
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
