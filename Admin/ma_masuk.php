       <div class="content">
            <div class="container-fluid">
                <div class="row">                      
                    <div class="col-md-12">
  <a href="?p=tam_ma_dap" class="btn btn-info btn-fill pull-right">Tambah Data</a>                   
                        <div class="card">
                            <div class="header">                              
                                <br>
                                <h4 class="title">Daftar Mata Anggaran Pendapatan</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover ">
                                    <thead align="center">
                                        <th>No.</th>
                                    	<th>No.MA</th>
                                        <th>Mata Anggaran</th>
                                        <th>Aksi</th>
                                    </thead>
                                  
                                    <tbody>
                                        	<?php 
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from ma_pendapatan");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_ma']; ?></td>
                <td><?php echo $d['ma']; ?></td>
                <td><a href="hapus_pendapatan.php?id=<?php echo $d['id']; ?>">HAPUS</a></td>
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

       <div class="content">
            <div class="container-fluid">
                <div class="row">                      
                    <div class="col-md-12">
  <a href="?p=tam_ma_bel" class="btn btn-info btn-fill pull-right">Tambah Data</a>                   
                        <div class="card">
                            <div class="header">                              
                                <br>
                                <h4 class="title">Daftar Mata Anggaran Belanja</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content table-responsive table-full-width">
                                 <table class="table table-hover ">
                                    <thead align="center">
                                        <th>No.</th>
                                        <th>No.MA</th>
                                        <th>Mata Anggaran</th>
                                        <th>Aksi</th>
                                    </thead>
                                  
                                    <tbody>
                                            <?php 
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from ma_belanja");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_ma']; ?></td>
                <td><?php echo $d['ma']; ?></td>
                <td><a href="hapus_belanja.php?id=<?php echo $d['id']; ?>">HAPUS</a></td>
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

