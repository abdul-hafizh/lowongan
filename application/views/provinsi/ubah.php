        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Provinsi
            </h1>
            <p class="lead">Ubah Provinsi</p>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <form role="form" action="<?=base_url("provinsi/simpan_ubah")?>" method="post">
                        <div class="form-group">
                            <label>ID Provinsi</label>
                            <input class="form-control" name="id_provinsi" id="id_provinsi" placeholder="ID Provinsi..." maxlength="25" required="true" value="<?=$provinsi->id_provinsi?>">                            
                        </div>
                        <div class="form-group">
                            <label>Nama Provinsi</label>
                            <input class="form-control" name="nama_provinsi" id="nama_provinsi" placeholder="Nama Provinsi..." maxlength="25" required="true" value="<?=$provinsi->nama_provinsi?>">
                        </div>
                        <input name="id" id="id" type="hidden" value="<?=$provinsi->id_provinsi?>">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->