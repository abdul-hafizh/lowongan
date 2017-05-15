        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Perusahaan
            </h1>
            <p class="lead">Daftar Perusahaan</p>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <form role="form" action="<?=base_url("perusahaan/simpan_tambah")?>" method="post">
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan..." maxlength="25" required="true">
                        </div>
                        <div class="form-group">
                            <label>Nama Penganggung Jawab</label>
                            <input class="form-control" name="nama_penanggung_jawab" id="nama_penanggung_jawab" placeholder="Nama Penganggung Jawab..." maxlength="25" required="true">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email Perusahaan..." maxlength="25" required="true">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" id="password" type="password" placeholder="Password..." maxlength="25" required="true">
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input class="form-control" name="no_telp" id="no_telp" placeholder="No Telepon/HP..." maxlength="25" required="true">
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
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap: Jl, Desa/Kota, dll..." maxlength="25"></textarea>
                        </div>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->