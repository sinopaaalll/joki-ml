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
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                            </div>
                            <!-- <div class="ml-md-auto py-2 py-md-0">
                                <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                                <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"></div>
                            </div>
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