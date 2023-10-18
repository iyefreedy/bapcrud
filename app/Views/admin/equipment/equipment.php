<?php $this->Extend('admin/admin_template') ?>


<?php $this->Section('content') ?>

                    <!-- Table Equipment Start -->
                            <div class="card shadow mb-4 m-3">
                                <div class="card-header d-sm-flex justify-content-between mb-4 mx-3 py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Equipment List</h6>
                                    <a href="equipment/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-plus fa-sm text-white-50"></i> Add Equipment</a>
                                </div>
                                <form action="" method="get"
                                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for equipment..."
                                            aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" name="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <?php if(session()->getFlashdata('pesan')) : ?>
                                    <div class="alert alert-success p-3 m-3 " role="alert">
                                        Equipment berhasil ditambahkan !
                                    </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table-equipment table-striped text-center position relative translate-middle table-hover bg-white mx-3">
                                            <thead>
                                                <tr class="my-3">
                                                <th scope="col">No</th>
                                                <th scope="col">Equipment Img</th>
                                                <th scope="col">Equipment</th>
                                                <th scope="col">Brand</th>
                                                <th scope="col">Capacity</th>
                                                <th scope="col">PDF File</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                                                <?php foreach ($equipment as $e) : ?>
                                                <tr class="position-relative translate-middle">
                                                    <th scope="row "><?= $i++; ?></th>
                                                    <td class="col-lg-2 col-md-5 position-relative" style="height:50px;">
                                                        <img class="img-fluid my-3" src="/img/<?= $e['sampul'] ?>" alt="">
                                                    </td>
                                                    <td><?= $e['nama_alat'] ?></td>
                                                    <td><?= $e['brand'] ?></td>
                                                    <td><?= $e['capacity'] ?></td>
                                                    <td><?= $e['pdf'] ?></td>
                                                    <td>
                                                        <a href="/equipment/<?= $e['slug']; ?>" class="btn btn-success my-1">Detail</a>
                                                        <!-- <a href="" class="btn btn-warning my-1"> Edit</a> -->
        
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="text-center">
                                        <?= $pager->links('equipment','equipment_page'); ?>
                                    </div>
                                </div>
                            </div>   
                    <!-- Table Equipment End -->

<?php $this->endSection(); ?>