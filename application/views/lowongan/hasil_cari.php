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
                        
                        <div class="card-columns">
                            <?php foreach ((array) $lowongans as $key => $lowongan) : ?>
                            <div class="card card-block">
                                <h4 class="card-title"><a href="<?= base_url("lowongan/detail/$lowongan->id_lowongan")?>"><?= $lowongan->nama_lowongan ?></a></h4>
                                <span class="text-muted"><?= $lowongan->nama_perusahaan ?></span>
                                <p><?= "Gaji: $lowongan->gaji_min - $lowongan->gaji_max" ?></p>
                                <p class="card-text"><?= substr($lowongan->deskripsi, 0, 100).'...' ?></p>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <!--/row-->

            </div>
            <!--/main col-->