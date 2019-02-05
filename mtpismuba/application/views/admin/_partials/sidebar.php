<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>

    <li class="nav-item<?php echo $this->uri->segment(2) == 'buku' ? 'active': '' ?>">
        <a class="nav-link " href="<?php echo site_url('admin/Laporan/') ?> " >
            <i class="fas fa-file"></i>
            <span>Laporan</span>
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/Laporan/') ?>">Lihat Laporan</a>
        </div> -->
    </li>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'buku' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-shopping-basket"></i>
            <span>Transaksi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <!-- <a class="dropdown-item" href="<?php echo site_url('admin/transaksi/add') ?>">Tambah Transaksi</a> -->
            <a class="dropdown-item" href="<?php echo site_url('admin/transaksi') ?>">Data Transaksi</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/transaksi/kecil') ?>">Data Kecil</a>
        </div>
    </li>

<li class="nav-item <?php echo $this->uri->segment(2) == 'kabupaten' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/kabupaten') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Kabupaten</span>
        </a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == 'buku' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/buku1') ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku</span>
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/buku1/add') ?>">Tambah Buku</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/buku1') ?>">Data Buku</a>
        </div> -->
    </li>
    
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'sekolah' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/sekolah/') ?>">
            <i class="fas fa-fw fa-school"></i>
            <span>Sekolah</span>
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/sekolah/add') ?>">Tambah Sekolah</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/sekolah/') ?>">Data Sekolah</a>
        </div> -->
    </li>
 
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li> -->
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>
