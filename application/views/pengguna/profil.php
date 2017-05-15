        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Pengguna
            </h1>
            <p class="lead">Profil Pengguna</p>
            
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $pengguna->nama_pengguna ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $pengguna->email ?></td>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td><?= $pengguna->no_telp ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?= $pengguna->alamat ?></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td><?= $pengguna->nama_provinsi ?></td>
                                </tr>
                                <tr>
                                    <td>Gaji yang Diharapkan</td>
                                    <td><?= $pengguna->gaji_yang_diharapkan ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Large Modal</h4>
                    </div>
                    <div class="modal-body">
                        Anda Ingin Menghapus Data Pengguna
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="<?=base_url('pengguna/hapus/')?>"><button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button></a>
                    </div>
                </div>
            </div>
        </div>