<?php $this->Extend('admin/admin_template') ?>

<?php $this->Section('content') ?>

            <!-- Form Start -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 m-4">
                <h1 class="h3 mb-0 text-gray-800">Form Tambah Equipment</h1>
            </div>
            <form class="col-lg-4 m-4" action="/equipment/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_alat">Equipment Name</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_alat')) ? 'is-invalid' : ''; ?>" id="nama_alat" name="nama_alat" placeholder="Nama equipment">
                    <div class="invalid-feedback" autofocus>
                        <?= $validation->getError('nama_alat'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Nama brand">
                </div>
                <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <input type="text" class="form-control" id="capacity" name="capacity" placeholder="capacity">
                </div>
                <div class="form-group mb-4">
                    <label for="pdf">PDF</label>
                    <input type="text" class="form-control" id="pdf" name="pdf" placeholder="pdf file">
                </div>
                <div class="col-md-6 mb-3">
                    <img src="/img/default-img.jpg" class="img-fluid img-thumbnail img-preview" alt="">
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">
                    <label class="custom-file-label" for="Sampul">Insert Image</label>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            <!-- Form End -->

<?php $this->endSection(); ?>