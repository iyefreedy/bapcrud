<?php $this->Extend('admin/admin_template') ?>

<?php $this->Section('content') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Recruitment</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Tables Email</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Graduation</th>
                                <th>Position</th>
                                <th>Experience</th>
                                <th>PDF</th>
                                <th>Foto</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>1</td>
                                <td>Helmi Sanjaya</td>
                                <td>muhamadhelmi6688@gmail.com</td>
                                <td>16/September/2023</td>
                                <td>Ini Pesan Testing</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Helmi Sanjaya</td>
                                <td>muhamadhelmi6688@gmail.com</td>
                                <td>16/September/2023</td>
                                <td>Ini Pesan Testing</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Helmi Sanjaya</td>
                                <td>muhamadhelmi6688@gmail.com</td>
                                <td>16/September/2023</td>
                                <td>Ini Pesan Testing</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->

<?php $this->endSection(); ?>