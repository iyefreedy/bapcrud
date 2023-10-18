<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/content-8.jpg);">
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

    <div class="container-xxl py-5" style="border-radius: 30px;">
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
    </div>

    <!-- Equipment Start -->
    <div class="container-xl py-5">
        <!-- <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/all_equipment.jpg);">
        <div class="container-fluid shadow page-header-inner py-5" style="height: 450px;">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Equipment List</h1>
                <nav aria-label="breadcrumb">
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, porro. Similique mollitia suscipit facilis nihil.</p>
                </nav>
            </div>
        </div> -->
    </div>
        <div class="container">
            <img src="" alt="">
            <div class="row g-3">
                <?php foreach ($equipment as $e) : ?>
                    <div class="card-body m-3" style="width: 18rem;">
                        <div class="panel-body bg-white m-2 p-2" style="text-align: center; overflow:hidden; padding:0; height:220px">

                            <img style="" class="card-img-top" src="img/<?= $e['sampul']; ?>" alt="Card image cap">
                        </div>
                        <div class="card-body bg-light text-center" >
                            <h5 class="card-title"><?= $e['nama_alat']; ?></h5>
                            <p class="card-text mb-1">Brand : <?= $e['brand']; ?></p>
                            <p class="card-text">Capacity : <?= $e['capacity']; ?></p>
                            <a href="/katalog/<?= $e['slug']; ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>
