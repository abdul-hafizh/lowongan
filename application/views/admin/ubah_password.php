            <div class="col-md-9 col-lg-10 main">

                <!--toggle sidebar button-->
                <p class="hidden-md-up">
                    <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
                </p>

                <h1 class="display-1 hidden-xs-down">
                    Admin
                </h1>
                <p class="lead">Ubah Password</p>
                <hr>
                <div class="row">
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
                    <div class="col-lg-12 col-md-8">
                        <form role="form" action="<?= base_url("admin/simpan_ubah_password") ?>" method="post">
                            <div class="form-group">
                                <label>Password Lama</label>
                                <input class="form-control" name="password_lama" id="password_lama" placeholder="Password Lama..." type="password" maxlength="25" required="true">
                            </div>
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input class="form-control" name="password_baru" id="password_baru" placeholder="Password Baru..." type="password" maxlength="25" required="true">
                            </div>
                            <div class="form-group">
                                <label>Ulangi Password</label>
                                <input class="form-control" name="ulangi_password_baru" id="ulangi_password_baru" placeholder="Ulangi Password Baru..." type="password" maxlength="25" required="true">
                            </div>
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!--/row-->

            </div>
            <!--/main col-->