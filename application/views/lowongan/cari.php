        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Lowongan
            </h1>
            <p class="lead">Cari Lowongan</p>

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
                    <form role="form" action="<?=base_url("lowongan/hasil_cari")?>" method="post">
                        <div class="form-group">
                            <label>Nama Lowongan</label>
                            <input class="form-control" name="nama_lowongan" id="nama_lowongan" placeholder="Nama Lowongan...">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="id_provinsi" id="id_provinsi">
                                <option value="">[Semua Provinsi]</option>
                                <?php foreach($provinsis as $provinsi):?>
                                <option value="<?=$provinsi->id_provinsi?>"><?=$provinsi->nama_provinsi?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Posisi</label>
                            <select class="form-control" name="id_posisi" id="id_posisi">
                                <option value="">[Semua Posisi]</option>
                                <?php foreach($posisis as $posisi):?>
                                <option value="<?=$posisi->id_posisi?>"><?=$posisi->nama_posisi?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gaji Yang Diharapkan</label>
                            <input class="form-control" name="gaji_yang_diharapkan" id="gaji_min" placeholder="Gaji Yang Diharapkan..." type="number" min="0">
                        </div>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->