        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Pengguna
            </h1>
            <p class="lead">Login</p>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <form role="form" action="<?=base_url("pengguna/cek_login")?>" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email Pengguna..." maxlength="25" required="true">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" id="password" type="password" placeholder="Password..." maxlength="25" required="true">
                        </div>
                        <a href="<?=base_url("pengguna/daftar")?>"><button type="button" class="btn btn-default">Daftar</button></a>
                        <button type="submit" class="btn btn-primary">Login</button>                        
                    </form>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->