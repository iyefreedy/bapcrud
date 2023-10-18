<?= $this->extend('admin/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container-xxl p-5" style="border-radius: 30px;">
        <?php foreach($news as $n) : ?>
        <div class=" shadow card mb-5" style="max-width: max-content; ">
            <div class="row g-0">
                <div class="col-md-4 p-0">
                    <img src="/img/<?= $n['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 bg-white">
                    <div class="card-body">
                        <h3 class="card-title p-0 text-primary"><?= $n['judul']; ?></h3>
                        <hr class="col-lg-12">
                        <p class="card-text"><i class="fas fa-calendar-alt"></i><small class="text-muted p-2">Updated at <?= $n['created_at']; ?></small></p>
                        <p class="card-text"><?= $n['description']; ?></p>
                    </div>
                    <div class="col-md-8 mx-3 pb-3">
                        <button class="btn btn-primary text-white">Detail</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

<?= $this->endSection(); ?>