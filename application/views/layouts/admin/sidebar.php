<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('assets/admin/') ?>img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <!-- <span class="caret"></span> -->
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?= $this->uri->segment(2) == "dashboard" ? "active" : "" ?>">
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Pages</h4>
                </li>

                <li class="nav-item <?= $this->uri->segment(2) == "kategori" ? "active" : "" ?>">
                    <a href="<?= base_url('admin/kategori') ?>">
                        <i class="fas fa-desktop"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item <?= $this->uri->segment(2) == "layanan" ? "active" : "" ?>">
                    <a href="<?= base_url('admin/layanan') ?>">
                        <i class="fas fa-desktop"></i>
                        <p>Layanan</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>