<!DOCTYPE html>
<?php 
    $assets = base_url('assets');
    $admin = $this->session->userdata('admin');
    $perusahaan = $this->session->userdata('perusahaan');
    $pengguna = $this->session->userdata('pengguna');
?>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php if($title) echo $title; else echo 'Situs Lowongan';?></title>
    <meta name="description" content="A admin dashboard theme that will get you started with Bootstrap 4." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">

    <link rel="stylesheet" href="<?=$assets?>/bootstrap/css/bootstrap.min.css" />
    <link href="<?=$assets?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=$assets?>/bootstrap-admin/css/styles.css" />
  </head>
  
  <body >
    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        
    </button>
    <a class="navbar-brand" href="<?=base_url()?>">Home</a>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
		
            <?php if ($perusahaan==null && $pengguna==null && $admin==null): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pengguna/login')?>">Pengguna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('perusahaan/login')?>">Perusahaan</a>
            </li>
            <?php endif ?>
			
            <?php if ($perusahaan!=null): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('perusahaan/profil')?>" >Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('perusahaan/logout')?>" >Logout</a>
            </li>
            <?php endif ?>
			
            <?php if ($pengguna!=null): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pengguna/profil')?>" >Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pengguna/logout')?>" >Logout</a>
            </li>
            <?php endif ?>
			
            <?php if ($admin!=null): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/logout')?>" >Logout</a>
            </li>
            <?php endif ?>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-stacked">
            <?php if ($perusahaan!=null): ?>                
                <li class="nav-item"><a class="nav-link" href="<?=base_url('lowongan')?>">Lowongan</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('perusahaan')?>">Perusahaan</a></li>
            <?php endif ?>
			
            <?php if ($pengguna!=null): ?>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('lowongan')?>">Lowongan</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('perusahaan')?>">Perusahaan</a></li>
            <?php endif ?>
			
            <?php if ($admin!=null): ?>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('admin')?>">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('posisi')?>">Posisi</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('provinsi')?>">Provinsi</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('pengguna')?>">Pengguna</a></li>
            <?php endif ?>
			
                <li class="nav-item"><a class="nav-link" href="<?=base_url('lowongan/cari')?>">Cari Lowongan</a></li>
            <?php if ($perusahaan==null && $pengguna==null && $admin==null): ?>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('perusahaan')?>">Perusahaan</a></li>
            <?php endif ?>
            </ul>
        </div>
        <!--/col-->

<?=$content?>
    </div>

</div>
<!--/.container-->
<footer class="container-fluid">
    <p class="text-right small"><?php echo "&copy;"?> Abdul Hafizh 2016</p>
</footer>

<!--scripts loaded here--> 
    <script src="<?=$assets?>/jquery/js/jquery.min.js"></script>
    <script src="<?=$assets?>/bootstrap/js/bootstrap.min.js"></script>    
    <script src="<?=$assets?>/bootstrap-admin/js/scripts.js"></script>
  </body>
</html>