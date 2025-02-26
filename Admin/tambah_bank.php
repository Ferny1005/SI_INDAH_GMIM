
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Data Buku Bank</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="aksi_bank.php">
                                  <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" class="form-control" name="tgl">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nomor Bukti Kas</label>
                                                <input type="text" class="form-control" name="nomor">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Uraian</label>
                                                <input type="text" class="form-control" name="uraian">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Setoran</label>
                                                <input type="number" placeholder="Rp." class="form-control" name="setoran" min="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Penarikan</label>
                                                <input type="number" placeholder="Rp." class="form-control" name="penarikan" min="0">
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

