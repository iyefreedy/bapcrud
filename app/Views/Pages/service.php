<?= $this->extend('layout/template'); ?>



<?= $this->section('content'); ?>



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/content-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Booking Start -->
    <!-- <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Equipment Rental Service Provider</h1>
                        <p class="text-white mb-0">PT Berlian Amal Perkasa has almost 10 years of experience with more than 200 satisfied clients, handled more than 300 projects and provided more than 300 skilled technicians. With our expertise in construction equipment rental. We can guarantee you a wholesome service that puts you at ease. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row gx-5 m-5">
                        <img class="img-fluid text-center mb-5" src="/img/brochure.png" alt="">
                        <div class="bg-primary text-center py-3">
                            <a href="/pdf/Introduction of BAP in Eng.pdf" class="text-white px-3" download="">Download Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
    <!-- Booking End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <h6 class="text-primary text-uppercase">// Our Services //</h6> -->
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-tractor fa-2x me-3"></i>
                            <h4 class="m-0">Equipment Rent</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Regular Maintenance</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-truck fa-2x me-3"></i>
                            <h4 class="m-0">Mobilization</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-certificate fa-2x me-3"></i>
                            <h4 class="m-0">Certified Operator</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/cover-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Equipment Rental</h3>
                                    <p class="mb-4">Equipment rental refers to the practice of temporarily leasing or lending out machinery, tools, vehicles, or other items to individuals or businesses. This allows renters to access specialized equipment for a specific period without the upfront costs of purchasing, maintenance, and storage.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Good Equipment Condition</p>
                                    <p><i class="fa fa-check text-success me-3"></i>A Large Selection of Equipment Types Available</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Already Heavy Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/content-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Regular Maintenance</h3>
                                    <p class="mb-4">Elevate equipment engine's performance with our precision maintenance services.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Engineer</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Good Machine</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Efficiency Enhancement</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/mob.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Mobilization</h3>
                                    <p class="mb-4">Efficient Transport Solutions: Streamline your deliveries with our advanced delivery equipment, ensuring efficient and timely transportation of your goods.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Seamless Distribution</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Precision Handling</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Enhanced Logistics</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Safety First</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 400px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/content-6.JPG"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Certified Operator</h3>
                                    <p class="mb-4">Professionals who have undergone intensive training and are certified to operate equipment with skill and proficiency.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Skill Certified</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/pt_1.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">PT.Wijaya Karya</h5>
                    <p>Construction</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0 fst-italic">"The rental of heavy equipment from BAP is very satisfactory. The tools are in top condition, the service is friendly, and the process is easy. Our project went smoothly thanks to their support!"</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/pt_2.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">PT.Adhi Karya</h5>
                    <p>Construction</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0 fst-italic">"The rental process with BAP is very transparent. All details, including costs and requirements, were clearly explained from the start, making us feel comfortable and trusting."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/pt_3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">PT.Waskita Karya</h5>
                    <p>Construction</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0 fst-italic">"Outstanding technical support throughout the machine rental period. When we faced challenges or questions, they were always ready to help with the right solution. A very positive experience!"</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/pt_4.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0 fst-italic">PT.Jaya Konstruksi Manggala Pratama</h5>
                    <p>Construction</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0 fst-italic">"Timely delivery of heavy equipment. This helps us keep the project schedule without any constraints. Their reliability in delivery is one of the reasons we keep coming back."</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <?= $this->endSection(); ?>