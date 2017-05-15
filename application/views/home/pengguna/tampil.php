            <div class="col-md-9 col-lg-10 main">

                <!--toggle sidebar button-->
                <p class="hidden-md-up">
                    <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
                </p>

                <h1 class="display-1 hidden-xs-down">
                    Dashboard
                </h1>
                <p class="lead">Selamat Datang <?=$pengguna->nama_pengguna?> </p>

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


                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-inverse card-success">
                            <div class="card-block bg-success">
                                <div class="rotate">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <h6 class="text-uppercase">Pengguna</h6>
                                <h1 class="display-1"><?=$jumlah_pengguna?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-inverse card-info">
                            <div class="card-block bg-info">
                                <div class="rotate">
                                    <i class="fa fa-building fa-5x"></i>
                                </div>
                                <h6 class="text-uppercase">Perusahaan</h6>
                                <h1 class="display-1"><?=$jumlah_perusahaan?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-inverse card-warning">
                            <div class="card-block bg-warning">
                                <div class="rotate">
                                    <i class="fa fa-share fa-5x"></i>
                                </div>
                                <h6 class="text-uppercase">Posisi</h6>
                                <h1 class="display-1"><?=$jumlah_posisi?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-inverse card-danger">
                            <div class="card-block bg-danger">
                                <div class="rotate">
                                    <i class="fa fa-list fa-4x"></i>
                                </div>
                                <h6 class="text-uppercase">Lowongan</h6>
                                <h1 class="display-1"><?=$jumlah_lowongan?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->

                <hr>

                <div class="row placeholders">
                    <div class="col-xs-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/dddddd/fff?text=1" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                        <h4>Responsive</h4>
                        <span class="text-muted">Device agnostic</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/e4e4e4/fff?text=2" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                        <h4>Frontend</h4>
                        <span class="text-muted">UI / UX oriented</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/d6d6d6/fff?text=3" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                        <h4>HTML5</h4>
                        <span class="text-muted">Standards-based</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder text-center">
                        <img src="//placehold.it/200/e0e0e0/fff?text=4" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
                        <h4>Framework</h4>
                        <span class="text-muted">CSS and JavaScript</span>
                    </div>
                </div>

                <a id="features"></a>
                <hr>

            </div>
            <!--/main col-->