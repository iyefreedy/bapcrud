<?= $this->extend('admin/admin_template'); ?>

<?= $this->Section('content'); ?>
        
         <!-- Form Start -->
         <div class="align-items-center justify-content-between mb-4 m-4">
                <h1 class="h3 mb-0 text-gray-800 mb-4">Form Create Content</h1>
            <form class="col-lg-4" action="/news/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="judul content">
                </div>
                <div class="col-md-6 mb-3">
                    <img src="/img/default-img.jpg" class="img-fluid img-thumbnail img-preview" alt="">
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">
                    <label class="custom-file-label" for="sampul">insert image</label>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="60" rows="8" placeholder="please insert description..."></textarea>
                    <!-- <input type="text" class="form-control" id="brand" name="brand" placeholder="Description Content..."> -->
                </div>
                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
            <!-- Form End -->

<?= $this->endSection(); ?>