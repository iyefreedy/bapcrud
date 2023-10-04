<?php $this->Extend('admin/admin_template') ?>

<?php $this->Section('content') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-2 text-gray-800">Email Customer</h1> -->
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Customers</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($customer as $c) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $c['name'] ?></td>
                                <td><?= $c['email'] ?></td>
                                <td><?= $c['message'] ?></td>
                                <td><?= $c['updated_at'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
<!-- /.container-fluid -->

<?php $this->endSection(); ?>