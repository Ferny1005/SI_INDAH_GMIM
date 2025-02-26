                       

   <div class="content">

            <div class="container-fluid">

                <div class="row">
                            
                               
                           
                    <div class="col-md-12">
  <a href="index.php?p=tm_peng" class="btn btn-info btn-fill pull-right">Tambah Data</a>
                    
                        <div class="card">
                            <div class="header">
                                
                                <br>
                                <h4 class="title">Daftar User</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover ">
                                    <thead align="center">
                                        <th>No.</th>
                                    	<th>Nama</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </thead>
                                  
                                    <tbody>
                                        	<?php 
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from user");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['level']; ?></td>
                <td><a href="hapus_peng.php?id=<?php echo $d['id']; ?>">HAPUS</a></td>
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
