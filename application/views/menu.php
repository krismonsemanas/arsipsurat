 <nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?=base_url()?>home">Arsip Surat</a>
        <a class="navbar-brand hidden" href="<?=base_url()?>home"">Arsip Surat</a>
   	</div>
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="<?=base_url()?>home"> <i class="menu-icon fa fa-home"></i>Dashboard </a>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" id="surat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-envelope-o"></i>Surat</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-folder-open-o"></i><a href="<?=base_url()?>surat/tampil/1">Surat Masuk</a></li>
                    <li><i class="menu-icon fa fa-folder-o"></i><a href="<?=base_url()?>surat/tampil/2">Surat Keluar</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" id="surat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cloud"></i>Rekap</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa  fa-cloud-upload"></i><a href="<?=base_url()?>rekap/surat/1">Rekap Surat Masuk</a></li>
                    <li><i class="menu-icon fa  fa-cloud-download"></i><a href="<?=base_url()?>rekap/surat/2">Rekap Surat Keluar</a></li>
                </ul>
            </li>
            <li>
                <a href="<?=base_url()?>user"> <i class="menu-icon fa fa-user-o "></i>Profile</a>
            </li>
             <li>
                <a href="<?=base_url()?>home/logout" class="text-danger"> <i class="menu-icon fa fa-power-off text-danger"></i>Logout</a>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
