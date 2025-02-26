
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Penerimaan BKU</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="aksi_penerimaan.php">
                                      
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor MA</label>
                                               <select name="no_ma" class="form-control">
                                       
                                      <?php
                                        $sql="select * from ma_pendapatan";
                                        $hasil=mysqli_query($koneksi,$sql);
                                        $no=0;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                        $no++;
                                       ?>
                                        <option value="<?php echo $data['no_ma'];?>"><?php echo $data['no_ma'];?> | <?php echo $data['ma']; ?> </option>
                                      <?php 
                                        }
                                      ?>
                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor Bukti</label>
                                                <input type="text" class="form-control" name="no_bukti">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" name="keterangan">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nilai</label>
                                                <input type="number" placeholder="Rp." class="form-control" name="masuk" min="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" class="form-control" name="tgl">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Data</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

