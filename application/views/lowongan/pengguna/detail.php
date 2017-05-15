            <div class="col-md-9 col-lg-10 main">

                <!--toggle sidebar button-->
                <p class="hidden-md-up">
                    <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
                </p>

                <h1 class="display-1 hidden-xs-down">
                    Lowongan
                </h1>
                <p class="lead"><?= "$lowongan->nama_lowongan - $lowongan->nama_posisi" ?></p>
                <hr>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title"><?= "$lowongan->nama_perusahaan - $lowongan->nama_provinsi" ?></h4>
                                <p><?= "Gaji: $lowongan->gaji_min - $lowongan->gaji_max" ?></p>
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Deskripsi</h4>
                                <p class="card-text"><?=$lowongan->deskripsi?></p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Persyaratan</h4>
                                <p class="card-text"><?=$lowongan->persyaratan?></p>
                                <!--<a href=""><button type="button" class="btn btn-secondary btn-lg">Lamar</button></a>-->
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div><!--/row-->
            </div>
            <!--/row-->

            </div>
            <!--/main col-->