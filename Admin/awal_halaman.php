 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo "<center>Selamat datang ";
                                                        echo $_SESSION['nama'];
                                                        echo " !</center>";?></h4>
                            </div>
                            <div class="content all-icons">
                                <div class="row">
                                  <div class="font-icon-list col-lg-6 col-md-5 col-sm-8 col-xs-8 col-xs-8">
                                    <div class="font-icon-detail"><i class="pe-7s-add-user"></i>
                                      <input type="text" value="Pengguna :">
                                      <?php
                                      $data_user = mysqli_query($koneksi,"SELECT * FROM user");
                                      $jumlah_user = mysqli_num_rows($data_user);
                                      ?>
                                      <p><b><?php echo $jumlah_user; ?></b> Orang</p>
                                    </div>
                                </div>
                                <div class="font-icon-list col-lg-6 col-md-5 col-sm-8 col-xs-8 col-xs-8">
                                    <div class="font-icon-detail"><i class="pe-7s-box2"></i>
                                      <input type="text" value="Inventaris Barang : ">
                                       <?php
                                      $data_inventaris = mysqli_query($koneksi,"SELECT * FROM inventaris");
                                      $jumlah_inventaris = mysqli_num_rows($data_inventaris);
                                      ?>
                                      <p><b><?php echo $jumlah_inventaris; ?></b> Item</p>
                                    </div>
                                </div>
                                <div class="font-icon-list col-lg-6 col-md-5 col-sm-8 col-xs-8 col-xs-8">
                                    <div class="font-icon-detail"><i class="pe-7s-home"></i>
                                      <input type="text" value="Tanah dan Bangunan :">
                                       <?php
                                      $data_inven_tanah = mysqli_query($koneksi,"SELECT * FROM inven_tanah");
                                      $jumlah_inven_tanah = mysqli_num_rows($data_inven_tanah);
                                      ?>
                                      <p><b><?php echo $jumlah_inven_tanah; ?></b> Item</p>
                                    </div>
                                </div>
                                <div class="font-icon-list col-lg-6 col-md-5 col-sm-8 col-xs-8 col-xs-8">
                                    <div class="font-icon-detail"><i class="pe-7s-network"></i>
                                      <input type="text" value="Badan Pengurus Majelis Jemaat : ">
                                       <?php
                                      $data_pelsus = mysqli_query($koneksi,"SELECT * FROM pelsus");
                                      $jumlah_pelsus = mysqli_num_rows($data_pelsus);
                                      ?>
                                      <p><b><?php echo $jumlah_pelsus; ?></b> Orang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>