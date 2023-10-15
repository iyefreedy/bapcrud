<?= $this->extend('layout/template'); ?>



<?= $this->section('content'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-3 p-0" style="background-image: url(img/content-8.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">News</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">About Us</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- News Start -->
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
                        <p class="small card-text"><?= $n['description']; ?></p>
                    </div>
                    <div class="col-md-8 mx-3 pb-3">
                        <!-- <button class="btn btn-primary text-white">Detail</button> -->
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- <div class="container-xxl py-5">
        <div class="card mb-3 py-3">
            
            <div class="col lg-2 m-3" style="max-width: max-content">
                <img src="/img/" class="card-img-top" style="height: 560px;" alt="...">
            </div>
            <div id="" class="card-body">
                <h3 class="card-title mb-3"></h3>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted">Updated at </small></p>
            </div>
        </div>
    </div> -->

<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="col text-center">
            </div>
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="content justify-content-center d-flex py-2 w-100 text-center">
                    <div class="container">
                        <div class="col text-start">
                            <h2 class="mb-3 text-lg-start">BAP HSE Awards <hr></h2>
                            <p class="mb-2"><i class="fa fa-calendar me-2"></i> Wednesday, 02 August 2023</p>
                        </div>
                        <div class="content p-4 d-flex flex-column position-relative">
                            <img class="img-fluid mx-auto p-6 m-2 " src="/img/HSE Awards.jpg" alt="" style="max-height: 520px;"">
                        </div>
                        <div class="col text-center mb-5">
                            <p class="col text-center">The Ministry of Manpower and Transmigration of Banten Province held a prestigious Occupational Health & Safety (K3) 2023 Award Ceremony attended by 404 companies within Banten Province. This OH&S 2023 award ceremony has 4 categories, as follows: Zero Accident Award, awarded to 116 companies. The Occupational Health & Safety Committee (P2K3) Award, awarded to 155 companies Covid-19 Prevention and Control (P2) Award, awarded to 101 companies
                            HIV-AIDS Prevention and Control (P2) Award, awarded to 32 companiesPT Berlian Amal Perkasa is one of the companies to receive awards for all four categories:
                            <br>1. Zero Accident Award
                            <br>2. P2K3 Award - Platinum
                            <br>3. P2 Covid-19 - Gold
                            <br>4. P2 HIV/AIDS - Gold</p>
                        </div>
                        <div class="col text-start">
                            <h2 class="mb-3 text-lg-start">Mitsubishi Corporation Getaway Program <hr class="color-primary"></h2>
                            <p class="mb-2"><i class="fa fa-calendar me-2"></i> Friday, 16 august 2023</p>
                        </div>
                        <div class="content p-4 d-flex flex-column position-relative">
                            <img class="img-fluid mx-auto p-6 m-2 " src="/img/news japan.jpg" alt="" style="max-height: 520px;"">
                        </div>
                        <div class="col text-center mb-5">
                            <p class="col text-justify">In August 2023, a representative from PT Berlian Amal Perkasa had the opportunity to participate in the MC Getaway Program in Tokyo, organized by Mitsubishi Corporation. This program included a seven-day business trip, including travel to and from Soekarno-Hatta airport in Jakarta. The third and fourth days were dedicated to the getaway, while the second and fifth days were spent visiting Nikken branch offices throughout Japan.
                            The MC Getaway Program is a regular event for MC subsidiaries, aimed at instilling the corporation's philosophy, values, and history. By sharing its understanding of corporate planning and strategy, each subsidiary is expected to reflect MC's three principles: Corporate Responsibility to Society, Integrity and Fairness, and Global Understanding Through Business.
                            The former directors of PT BAP, who are now dedicated members of Nikken and Mitsubishi Corporation (Fujimoto-san and Shintomo-san, respectively), shared key values that emphasize the company's significant impact on the MC group and its potential for incredible growth within the company and its employees. The spirit of volunteering with chargeable value entails taking initiative in dealing with previously untried or unpopular things. These values are at the core of PT BAP's success and will continue to drive their growth within the MC group.</p>
                        </div>
                        <div class="col text-start">
                            <h2 class="mb-3 text-lg-start">PT BAP Welcomes PT CIN as its Shareholder<hr></h2>
                            <p class="mb-2"><i class="fa fa-calendar me-2"></i> Friday, 16 June 2023</p>
                        </div>
                        <div class="content p-4 d-flex flex-column position-relative">
                            <img class="img-fluid mx-auto p-6 m-2 " src="/img/news shareholder.png" alt="" style="max-height: 520px;"">
                        </div>
                        <div class="col text-justify mb-5">
                            <p class="col text-center">PT Berlian Amal Perkasa (PT BAP) has achieved a remarkable milestone in its history by welcoming a new shareholder, PT Cakrawala Inti Nusantara (PT CIN), to its ranks. PT CIN is a company that specializes in a wide range of engineering services, including Civil, MEP, HVAC, Sandwich Panel, Active House, Clean Room, and many others. The signing of the shares took place on July 10th, 2023, at the office of our trusted consultant. 
                            <br>PT CIN's entry into PT BAP's fold is an exciting development for all parties involved. It marks a significant step forward for PT BAP, as it paves the way for an even more promising future. With PT CIN's expertise and experience, PT BAP can expand its capabilities and offer more comprehensive solutions to its clients. 
                            <br>It is worth noting that PT Guna Teguh Sejati (PT GTS) was the previous shareholder in PT BAP. However, despite the change in ownership, PT BAP and PT GTS maintain a strong and enduring relationship, and their collaboration remains firm. The addition of PT CIN to PT BAP's team is a testament to the company's commitment to growth and innovation.</p>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- News End -->


    <!-- Our Project Start -->

    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="text-center text-primary">// Our Project //</h6>
                <h1 class="mb-5">Latest News</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="Project">
                        <div class="position-relative shadow overflow-hidden">
                            <img src="/img/content-9.jpg" alt="" class="img-fluid text-center">
                            <div class="team-overlay position-absolute start-0 top-0 mt-3 w-100 h-100">
                                <small class="text-light text-center"></small>
                            </div>
                        </div>
                        <div class="bg-white text-center p-2">
                            <h5 class="fw-bold mb-2">Setup Crane at Project Site</h5>
                            <small class="text-grey px-2">Last updated, 02 February 2023</small>
                            <small class="text-justify">Teamwork is the collaborative effort of a group of individuals working together to achieve a common goal. Effective teamwork involves the coordination, communication, and integration of each team member's skills, knowledge, and efforts.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="Project">
                        <div class="position-relative shadow overflow-hidden">
                            <img src="/img/_DSC2177.JPG" alt="" class="img-fluid text-center">
                            <div class="team-overlay position-absolute start-0 top-0 mt-3 w-100 h-100">
                                <small class="text-light text-center"></small>
                            </div>
                        </div>
                        <div class="bg-white text-center p-2">
                            <h5 class="fw-bold mb-2">Truck Mounted Crane</h5>
                            <small class="text-grey px-2"> Last updated, 09 Mei 2023</small>
                            <small>A truck crane, also known as a mobile crane or a hydraulic truck crane, is a type of heavy equipment used for lifting and moving heavy loads in construction, infrastructure development, shipping yards, and other industrial applications. These cranes are mounted on trucks, allowing them to be easily transported to different work sites.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="Project">
                        <div class="position-relative shadow overflow-hidden">
                            <img src="/img/news_2.jpg" alt="" class="img-fluid text-center">
                            <div class="team-overlay position-absolute start-0 top-0 mt-3 w-100 h-100">
                                <small class="text-light text-center"></small>
                            </div>
                        </div>
                        <div class="bg-white text-center p-2">
                            <h5 class="fw-bold mb-2">Bulldozer at Project Site</h5>
                            <small class="text-grey px-2">Last updated, 17 July 2023</small>
                            <small>The bulldozer excavation process involves using a bulldozer, which is a powerful and efficient type of heavy equipment, to dig or remove soil, rock, or other materials in various construction, mining, agricultural, and other projects.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Our Project End -->


    <!-- new project start -->
    
        

   <?= $this->endSection(); ?>