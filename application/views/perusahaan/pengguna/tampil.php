        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Perusahaan
            </h1>
            <p class="lead">Menampilkan data Perusahaan</p>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
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
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Provinsi</th>
                                    <th>Alamat</th>
                                    <th>Lowongan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ((array) $perusahaans as $key => $perusahaan) : ?>
                                    <tr>
                                        <td><?= $perusahaan->nama_perusahaan ?></td>
                                        <td><?= $perusahaan->nama_penanggung_jawab ?></td>
                                        <td><?= $perusahaan->email ?></td>
                                        <td><?= $perusahaan->no_telp ?></td>
                                        <td><?= $perusahaan->nama_provinsi ?></td>
                                        <td><?= $perusahaan->alamat ?></td>
                                        <td><a href="<?=base_url("lowongan/berdasarkan_perusahaan/$perusahaan->id_perusahaan")?>">Lowongan</a></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->