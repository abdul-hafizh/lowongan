        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Perusahaan
            </h1>
            <p class="lead">Profil Perusahaan</p>
            
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $perusahaan->nama_perusahaan ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $perusahaan->email ?></td>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td><?= $perusahaan->no_telp ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?= $perusahaan->alamat ?></td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td><?= $perusahaan->nama_provinsi ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->