        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Lowongan
            </h1>
            <p class="lead">Tambah Lowongan</p>
            
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <form role="form" action="<?=base_url("lowongan/simpan_tambah")?>" method="post">
                        <div class="form-group">
                            <label>Nama Lowongan</label>
                            <input class="form-control" name="nama_lowongan" id="nama_lowongan" placeholder="Nama Lowongan..." maxlength="25" required="true">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="id_provinsi" id="id_provinsi">
                                <?php foreach($provinsis as $provinsi):?>
                                <option value="<?=$provinsi->id_provinsi?>"><?=$provinsi->nama_provinsi?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Posisi</label>
                            <select class="form-control" name="id_posisi" id="id_posisi">
                                <?php foreach($posisis as $posisi):?>
                                <option value="<?=$posisi->id_posisi?>"><?=$posisi->nama_posisi?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gaji Min</label>
                            <input class="form-control" name="gaji_min" id="gaji_min" placeholder="Gaji Minimal..." type="number" min="0" required="true">
                        </div>
                        <div class="form-group">
                            <label>Gaji Max</label>
                            <input class="form-control" name="gaji_max" id="gaji_max" placeholder="Gaji Maksimal..." type="number" min="0" required="true">
                        </div>
                        <div class="form-group">
                            <label>Persyaratan</label>
                            <textarea class="form-control" name="persyaratan" id="persyaratan" placeholder="Persyaratan..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi..."></textarea>
                        </div>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->