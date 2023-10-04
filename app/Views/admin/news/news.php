<?php $this->Extend('admin/admin_template') ?>

<?php $this->Section('content') ?>

         <!-- Table Equipment Start -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4 mx-3">
                        <h1 class="h3 mb-0 text-gray-800">BAP Content</h1>
                        <a href="news/addcontent" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-sm text-white-50"></i> Create Content</a>
                    </div>  -->
                    <div class="card shadow mb-4 m-3">
                        <div class="card-header d-sm-flex justify-content-between mb-4 mx-3 py-3">
                            <h6 class="m-0 font-weight-bold text-primary">BAP Content</h6>
                            <a href="equipment/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Add Content</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-equipment table-striped text-center position relative translate-middle table-hover bg-white mx-3">
                                    <thead>
                                        <tr class="my-3">
                                        <th scope="col">No</th>
                                        <th scope="col">News Image</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Update Time</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($news as $n) : ?>
                                        <tr class="position-relative translate-middle">
                                            <th scope="row "><?= $i++; ?></th>
                                            <td class="col-lg-2 col-md-5 position-relative" style="height:50px;">
                                                <img class="img-fluid my-3" src="/img/<?= $n['sampul'] ?>" alt="">
                                            </td>
                                            <td><?= $n['judul'] ?></td>
                                            <td class="col-lg-5 text-justify"><?= $n['description'] ?></td>
                                            <td><?= $n['created_at'] ?></td>
                                            <td>
                                                <a href="" class="btn btn-primary my-1">Detail</a>
                                                <a href="" class="btn btn-danger my-1">Delete</a>
                                                <!-- <a href="" class="btn btn-warning"> Edit</a> -->
        
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>    
                            </div>
                        </div>
                    </div>
                    <!-- Table Equipment End -->

<?php $this->endSection(); ?>