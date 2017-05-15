        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Lowongan
            </h1>
            <p class="lead">Menampilkan data Lowongan</p>
            
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <?php if ($this->session->flashdata('success_msg')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $this->session->flashdata('success_msg') ?>.
                        </div>
                    <?php endif ?>
                    <?php if ($this->session->flashdata('fail_msg')): ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $this->session->flashdata('fail_msg') ?>.
                        </div>
                    <?php endif ?>
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Nama Lowongan</th>
                                    <th>Posisi</th>
                                    <th>Perusahaan</th>
                                    <th>Provinsi</th>
                                    <th>Gaji</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ((array) $lowongans as $key => $lowongan) : ?>
                                    <tr>
                                        <td><?= $lowongan->nama_lowongan ?></td>
                                        <td><?= $lowongan->nama_posisi ?></td>
                                        <td><?= $lowongan->nama_perusahaan ?></td>
                                        <td><?= $lowongan->nama_provinsi ?></td>
                                        <td><?= "$lowongan->gaji_min - $lowongan->gaji_max" ?></td>
                                        <td><a class="nav-link" href="<?=  base_url("lowongan/detail/$lowongan->id_lowongan")?>">Detail</a></td>
                                    </tr>
                                <?php endforeach ?>
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
                        Anda Ingin Menghapus Data Lowongan
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="<?=base_url('lowongan/hapus/')?>"><button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button></a>
                    </div>
                </div>
            </div>
        </div>