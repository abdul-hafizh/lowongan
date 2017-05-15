        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Posisi
            </h1>
            <p class="lead">Ubah Posisi</p>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <form role="form" action="<?=base_url("posisi/simpan_ubah")?>" method="post">
                        <div class="form-group">
                            <label>ID Posisi</label>
                            <input class="form-control" name="id_posisi" id="id_posisi" placeholder="ID Posisi..." maxlength="25" required="true" value="<?=$posisi->id_posisi?>">                            
                        </div>
                        <div class="form-group">
                            <label>Nama Posisi</label>
                            <input class="form-control" name="nama_posisi" id="nama_posisi" placeholder="Nama Posisi..." maxlength="25" required="true" value="<?=$posisi->nama_posisi?>">
                        </div>
                        <input name="id" id="id" type="hidden" value="<?=$posisi->id_posisi?>">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->