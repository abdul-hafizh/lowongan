        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Provinsi
            </h1>
            <p class="lead">Menampilkan data Provinsi</p>

            <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Holy guacamole!</strong> It's free.. this is an example theme.
            </div>
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
                    <p><a href="<?= base_url("provinsi/tambah") ?>"><button type="button" class="btn btn-default">Tambah</button></a></p>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Provinsi</th>
                                    <th>Ubah</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ((array) $provinsis as $key => $provinsi) : ?>
                                    <tr>
                                        <td><?= $provinsi->id_provinsi ?></td>
                                        <td><?= $provinsi->nama_provinsi ?></td>
                                        <td><a href="<?=  base_url("provinsi/ubah/$provinsi->id_provinsi")?>" >Ubah</a></td>
                                        <td><a class="nav-link" href="<?=  base_url("provinsi/ubah/$provinsi->id_provinsi")?>" data-target="#myModal" data-toggle="modal">Hapus</a></td>
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
                        Anda Ingin Menghapus Data Provinsi
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="<?=base_url('provinsi/hapus/')?>"><button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button></a>
                    </div>
                </div>
            </div>
        </div>