
@extends('main')

@section('content')

  <!--================ Home Banner Area =================-->
  <section class="home_banner_area banner-area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content d-flex flex-md-row flex-column">
              <div class="banner-left text-md-right">
                <h1 class="text-uppercase">Our Services</h1>
              </div>
              <div class="banner-right position-relative">
                <p>
                  We at sisi limited, are more happy to share our moments as we travel along the journey to solving problems by providing creative and innovative solutions.
                </p>
                <span class="main_btn mt-4 mt-md-0" href="#">
                  <a href="index.html" class="text-white">Home</a>
                  <i class="fa fa-arrow-right mx-2"></i>
                  <a href="services.html" class="text-white">Services</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->

  <!--================ Start Service Area =================-->
  <section class="service-area section_gap_top">
      <div class="container">
        <div class="row justify-content-center section-title-wrap">
          <div class="col-lg-12">
            <h5>Our Offered Services</h5>
            <h2 class="text-white">
              We offer Various Services <br />
              to get you covered
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="single-service col-lg-4 col-md-6">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto" src="img/service/service1.jpg" alt="" />
            </div>
            <div class="service-box">
              <h3>
                Did not find <br />
                your Package
              </h3>
              <p>
                inappropriate behavior is often laughed off as boys will be boys
                women face in higher conduct standards.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>
  
          <div class="single-service col-lg-4 col-md-6">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto" src="img/service/service2.jpg" alt="" />
            </div>
            <div class="service-box">
              <h3>
                Did not find <br />
                your Package
              </h3>
              <p>
                inappropriate behavior is often laughed off as boys will be boys
                women face in higher conduct standards.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>
  
          <div class="single-service col-lg-4 col-md-6">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto" src="img/service/service3.jpg" alt="" />
            </div>
            <div class="service-box">
              <h3>
                Did not find <br />
                your Package
              </h3>
              <p>
                inappropriate behavior is often laughed off as boys will be boys
                women face in higher conduct standards.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ end Service Area =================-->
  
    <!--================ Start Quote Area =================-->
    <section class="quote-area">
      <div class="container">
        <div class="row justify-content-center text-left section-title-wrap">
          <div class="col-lg-12">
            <h5>Get a quote now!</h5>
            <h2 class="text-sisi">
              Check the estimated cost for <br>
              your requesting goods
            </h2>
          </div>
        </div>
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-12">
            <div class="estimated-cost">
              <form class="form-wrap" action="#">
                <nav>
                  <div class="nav nav-tabs justify-content-md-start justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-getEstimation-tab" data-toggle="tab" href="#nav-getEstimation"
                      role="tab" aria-controls="nav-getEstimation" aria-selected="true">Get an estimation</a>
                    <a class="nav-item nav-link" id="nav-trackShipment-tab" data-toggle="tab" href="#nav-trackShipment"
                      role="tab" aria-controls="nav-trackShipment" aria-selected="false">Track Shipment</a>
                  </div>
                </nav>
  
                <!-- Tab Content -->
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-getEstimation" role="tabpanel" aria-labelledby="nav-getEstimation-tab">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="firstName">First name</label>
                          <input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" placeholder="Enter first name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter first name'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="lastName">Last name</label>
                          <input type="text" class="form-control" id="lastName" placeholder="Enter last name" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter last name'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="emailAddress">Email Address</label>
                          <input type="email" class="form-control" id="emailAddress" placeholder="Enter email address"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="cargoType">Cargo Type</label>
                          <input type="text" class="form-control" id="cargoType" placeholder="Enter cargo type" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter cargo type'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="countryOfOrigin">Country of Origin</label>
                          <input type="text" class="form-control" id="countryOfOrigin" placeholder="Enter country of origin"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter country of origin'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="destination">Destination</label>
                          <input type="text" class="form-control" id="destination" placeholder="Enter destination"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter destination'" />
                        </div>
                      </div>
  
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="quantity">Quantity</label>
                          <input type="text" class="form-control" id="quantity" placeholder="Enter quantity" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter quantity'" />
                        </div>
                      </div>
  
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="weight">Weight</label>
                          <input type="text" class="form-control" id="weight" placeholder="Enter weight" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter weight'" />
                        </div>
                      </div>
  
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="width">Size</label>
  
                          <select name="size" class="form-control" id="width">
                            <option selected disabled>-- select size --</option>
                            <option value="">4ft</option>
                            <option value="">5ft</option>
                          </select>
  
                          {{-- <input type="text" class="form-control" id="width" placeholder="Enter width" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter width'" /> --}}
                        </div>
                      </div>
  
                      
                      <div class="col-lg-12 mt-4">
                        <div class="text-center confirm_btn_box">
                          <button class="main_btn text-uppercase">Request a Quote</button>
                        </div>
                      </div>
                    </div>
                  </div>
  
  
                  <div class="tab-pane fade" id="nav-trackShipment" role="tabpanel" aria-labelledby="nav-trackShipment-tab">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="firstName2">COIP Ref No.</label>
                          <input type="text" class="form-control" id="firstName2" aria-describedby="emailHelp"
                            placeholder="Enter COIP eg SLO0065" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter COIP eg SLO0065'" />
                        </div>
                      </div>
  
                      {{-- <div class="col-lg-4">
                        <div class="form-group">
                          <label for="lastName2">Last name</label>
                          <input type="text" class="form-control" id="lastName2" placeholder="Enter last name" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter last name'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="emailAddress2">Email Address</label>
                          <input type="email" class="form-control" id="emailAddress2" placeholder="Enter email address"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="cargoType2">Cargo Type</label>
                          <input type="text" class="form-control" id="cargoType2" placeholder="Enter cargo type" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter cargo type'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="countryOfOrigin2">Country of Origin</label>
                          <input type="text" class="form-control" id="countryOfOrigin2" placeholder="Enter country of origin"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter country of origin'" />
                        </div>
                      </div>
  
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="destination2">Destination</label>
                          <input type="text" class="form-control" id="destination2" placeholder="Enter destination"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter destination'" />
                        </div>
                      </div>
  
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="quantity2">Quantity</label>
                          <input type="text" class="form-control" id="quantity2" placeholder="Enter quantity" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter quantity'" />
                        </div>
                      </div>
  
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="weight2">Weight</label>
                          <input type="text" class="form-control" id="weight2" placeholder="Enter weight" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter weight'" />
                        </div>
                      </div>
  
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="width2">Width</label>
                          <input type="text" class="form-control" id="width2" placeholder="Enter width" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter width'" />
                        </div>
                      </div>
  
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label for="height2">Height</label>
                          <input type="text" class="form-control" id="height2" placeholder="Enter height" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter height'" />
                        </div>
                      </div> --}}
                      <div class="col-lg-12 mt-4">
                        <div class="text-center confirm_btn_box">
                          <button class="main_btn text-uppercase">Request a Quote</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Quote Area =================-->

@endsection