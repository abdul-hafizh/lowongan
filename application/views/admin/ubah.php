        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Admin
            </h1>
            <p class="lead">Ubah Admin</p>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <form role="form" action="<?=base_url("admin/simpan_ubah")?>" method="post">
                        <div class="form-group">
                            <label>ID Admin</label>
                            <input class="form-control" name="id_admin" id="id_admin" placeholder="ID Admin..." maxlength="25" required="true" value="<?=$admin->id_admin?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama_admin" id="nama_admin" placeholder="Nama Admin..." maxlength="25" required="true" value="<?=$admin->nama_admin?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email Admin..." maxlength="25" required="true" value="<?=$admin->email?>">
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input class="form-control" name="no_telp" id="no_telp" placeholder="No Telepon/HP..." maxlength="25" required="true" value="<?=$admin->no_telp?>">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" name="id_provinsi" id="id_provinsi">
                                <?php foreach($provinsis as $provinsi):?>
                                <option value="<?=$provinsi->id_provinsi?>" <?php if($admin->id_provinsi==$provinsi->id_provinsi) echo "selected"?>><?=$provinsi->nama_provinsi?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap: Jl, Desa/Kota, dll..." maxlength="25"><?=$admin->id_admin?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?=$admin->id_admin?>"/>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->