<?= $this->extend('Layout/template') ?>
<?= $this->section('content') ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/content-10.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Equipment List</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Technicians</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- <div class="container-xxl py-5" style="border-radius: 30px;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-2">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Dry Rental</h5>
                            <p>Equipment rental service without operator for more flexible usage and needs</p>
                        </div>
                    </div>
                </div>
                <div class="shadow col-lg-4 col-md-6 bg-white wow fadeInUp" data-wow-delay="0.5s"">
                    <div class="d-flex py-5 px-4 ">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0" ></i>
                        <div class="ps-4">
                            <h5 class="mb-3 text-dark">All in one rental solution</h5>
                            <p>We provide you comprehensive rental service from equipment mobilization, on-site-ready mechanic for service, and digital data recording for equipment monitoring</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Wet Rental</h5>
                            <p>Equipment rental service including our certified and highly professional operator</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div> -->

    <!-- Equipment Start -->
    <div class="container-fluid my-5">
        <div class="container">
            <!-- <h2>Detail Equipment</h2> -->
            <div class="card-body mb-5 p-3" style="max-width: 1200px;">
                <div class="row g-2">
                    <div class="col-md-5 m-2">
                        <img src="/img/<?= $equipment['sampul']?>" class="img-fluid rounded-start " alt="...">
                    </div>
                    <div class="col-md-3 py-5 mx-5">
                        <div class="card-body">
                        <h2 class="card-title"><?= $equipment['nama_alat']; ?></h2>
                        <p class="card-text mb-1"><b>Brand :</b> <?= $equipment['brand']; ?></p>
                        <p class="card-text mb-1"><b>Capacity :</b> <?= $equipment['capacity']; ?></p>
                        <p class="card-text mb-1"><b>PDF File :</b> <?= $equipment['pdf']; ?></p>
                        <!-- <p class="card-text"><small class="text-muted"><?= $equipment['created_at']; ?></small></p> -->
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>
