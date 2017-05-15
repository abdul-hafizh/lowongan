        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Pengguna
            </h1>
            <p class="lead">Ubah Pengguna</p>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <form role="form" action="<?=base_url("pengguna/simpan_ubah")?>" method="post">
                        <div class="form-group">
                            <label>ID Pengguna</label>
                            <input class="form-control" name="id_pengguna" id="id_pengguna" placeholder="ID Pengguna..." maxlength="25" required="true" value="<?=$pengguna->id_pengguna?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama_pengguna" id="nama_pengguna" placeholder="Nama Pengguna..." maxlength="25" required="true" value="<?=$pengguna->nama_pengguna?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email Pengguna..." maxlength="25" required="true" value="<?=$pengguna->email?>">
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input class="form-control" name="no_telp" id="no_telp" placeholder="No Telepon/HP..." maxlength="25" required="true" value="<?=$pengguna->no_telp?>">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="id_provinsi" id="id_provinsi">
                                <?php foreach($provinsis as $provinsi):?>
                                <option value="<?=$provinsi->id_provinsi?>" <?php if($pengguna->id_provinsi==$provinsi->id_provinsi) echo "selected"?>><?=$provinsi->nama_provinsi?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap: Jl, Desa/Kota, dll..." maxlength="25"><?=$pengguna->id_pengguna?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Gaji Yang Diharapkan</label>
                            <input class="form-control" name="gaji_yang_diharapkan" id="gaji_yang_diharapkan" placeholder="Misal 1000000..." maxlength="25" type="number" required="true" value="<?=$pengguna->gaji_yang_diharapkan?>">
                        </div>
                        <input type="hidden" name="id" value="<?=$pengguna->id_pengguna?>"/>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->