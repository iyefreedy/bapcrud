<?= $this->extend('admin/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2>Detail Equipment</h2>
      <div class="card mb-5 p-3" style="max-width: 920px;">
        <div class="row g-0">
          <div class="col-md-3 m-2">
            <img src="/img/<?= $equipment['sampul']?>" class="img-fluid rounded-start " alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $equipment['nama_alat']; ?></h5>
              <p class="card-text mb-1"><b>Brand :</b> <?= $equipment['brand']; ?></p>
              <p class="card-text mb-1"><b>Capacity :</b> <?= $equipment['capacity']; ?></p>
              <p class="card-text mb-1"><b>PDF File :</b> <?= $equipment['pdf']; ?></p>
              <p class="card-text"><small class="text-muted"><?= $equipment['created_at']; ?></small></p>
              <div class="button mb-2">
                  <a href="/equipment/edit/<?= $equipment['slug']; ?>" class="btn btn-warning">Edit</a>
  
                  <form action="/equipment/<?= $equipment['id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengapus alat ini?');">Delete</button>
                  </form>
    
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


<?= $this->endSection(); ?>