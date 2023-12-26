<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layouts/admin/header') ?>

<body>
    <div class="wrapper">
        <?php $this->load->view('layouts/admin/navbar') ?>

        <?php $this->load->view('layouts/admin/sidebar') ?>

        <!-- CONTENT -->
        <div class="main-panel">

            <!-- CONTENT -->
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">DataTables.Net</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Tables</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Datatables</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->

            <?php $this->load->view('layouts/admin/footer') ?>
        </div>

    </div>

    <?php $this->load->view('layouts/admin/script') ?>
</body>

</html>