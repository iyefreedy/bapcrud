<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Header Recruitment Start -->
<div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 pt-4" style="min-height: 400px;">
                  <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                      <img class="position-absolute img-fluid w-100 h-100" src="img/img_shareholdedr.png" style="object-fit: cover;" alt="">
                      <!-- <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .2);">
                          <h1 class="display-4 text-white mb-0">Solid <span class="fs-4"></span></h1>
                          <h4 class="text-white">Team Works</h4>
                      </div> -->
                  </div>
              </div>
              <div class="col-lg-6">
                  <h1 class="mb-4 mt-5"><span class="text-primary">Why</span> work with us ?</h1>
                  <p class="mb-4">BAP has amazing opportunities for professionals, graduates, and interns. We focus on delivering our core value to each and every one of our employees. By holding firm to the values of safety and caring, we could help you go through the journey of self-discipline that will change your life for the better.</p>
                  <!-- <a href="" class="btn btn-primary py-3 px-5">Apply<i class="fa fa-arrow-right ms-3"></i></a> -->
              </div>
          </div>
      </div>
  </div>
<!-- Header Recruitment End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form>
    
                    <div class="row">
                        <div class="col-md-6 mb-4">
    
                        <div class="form-outline">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" id="firstName" class="form-control form-control-lg" />
                        </div>
    
                        </div>
                        <div class="col-md-6 mb-4">
    
                        <div class="form-outline">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" id="lastName" class="form-control form-control-lg" />
                        </div>
    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
    
                            <div class="form-outline">
                                <label class="form-label" for="firstName">Full Name</label>
                                <input type="text" id="firstName" class="form-control form-control-lg" />
                            </div>
    
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
    
                        <div class="form-outline datepicker w-100">
                            <label for="birthdayDate" class="form-label">Date Of Birth</label>
                            <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                        </div>
    
                        </div>
                        <div class="col-md-6 mb-4">
    
                        <h6 class="mb-2 pb-1">Gender: </h6>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="option1" checked />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="option2" />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>
    
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
    
                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">Email</label>
                            <input type="email" id="emailAddress" class="form-control form-control-lg" />
                        </div>
    
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
    
                        <div class="form-outline">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                        </div>
    
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 mb-4 pb-2">
    
                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">address</label>
                            <input type="email" id="emailAddress" class="form-control form-control-lg" />
                        </div>
    
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
    
                        <div class="form-outline">
                            <label class="form-label" for="phoneNumber">Degree</label>
                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                        </div>
    
                        </div>
                    </div>
    
                    <!-- <div class="row">
                        <div class="col-12">
    
                        <select class="select form-control-lg">
                            <option value="1" disabled>Choose option</option>
                            <option value="2">Subject 1</option>
                            <option value="3">Subject 2</option>
                            <option value="4">Subject 3</option>
                        </select>
                        <label class="form-label select-label">Choose option</label>
    
                        </div>
                    </div> -->
    
                    <div class="mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
    
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>