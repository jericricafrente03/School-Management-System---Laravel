@extends('frontend.app')

@section('title')
    JericDesign
@endsection

@section('content')

     <section class="header-extradiv">
        <div class="container">
            <div class="row">
                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-desktop" aria-hidden="true"></i></a>
                    <h2>EASY TO USE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-trophy" aria-hidden="true"></i></a>
                    <h2>AWESOME DESIGN</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="extra-div col-lg-4 col-md-4 col-12">
                    <a href="#"><i class="fa-3x fa fa-magic" aria-hidden="true"></i></a>
                    <h2>EASY TO CUSTOMIZE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="serviceoffer" id="servicediv">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">WHAT DO WE OFFER</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
                    <div class="names my-3">
                        <h1>HTML</h1>
                        <div class="progress w-75   ">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%">100%
                            </div>
                        </div>                               
                    </div>
                    <div class="names my-3">
                        <h1>CSS</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 90%">90%
                            </div>                            
                        </div> 
                    </div>
                    <div class="names my-3">
                        <h1>JAVASCRIPT</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 80%">80%
                            </div>                            
                        </div> 
                    </div>
                    <div class="names my-3">
                        <h1>REACT JS</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 70%">70%
                            </div>                            
                        </div> 
                    </div>
                    <div class="names my-3">
                        <h1>NODE JS</h1>
                        <div class="progress w-75">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 85%">85%
                            </div>                            
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 servicediv">
                    <div class="row">
                        <div class="col-lg-2 col-2 service-icons">
                            <i class="fa-3x fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                            <h2>Website Development</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-2 service-icons">
                            <i class="fa-3x fa fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                            <h2>Digital Marketing</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-2 service-icons">
                            <i class="fa-3x fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                            <h2>Support 24/7</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt.</p>
                        </div>
                    </div>                                        
                </div>

            </div>
        </div>
    </section>

    <section class="project-work">
        <div class="container headings text-center">
            <p clas="text-center font-weight-bold">MORE THAN 2,000 WEBSITES CREATED</p>
        </div>
        <div class="container d-flex justify-content-around align-items-center text-center">
            <div>
                <h1 class="count">1500</h1>
                <p>CMS Installation</p>
            </div>
            <div>
                <h1 class="count">2500</h1>
                <p>Awards Won</p>
            </div>
            <div>
                <h1 class="count">700</h1>
                <p>Happy Clients</p>
            </div>
            <div>
                <h1 class="count">500</h1>
                <p>Working On</p>
            </div>                                    
        </div>
    </section>

    <section class="pricing" id="pricingdiv">
        <div class="container headings text-center text-white">
            <h1 class="text-center font-weight-bold">OUR BEST PRICING</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">BASIC</div>
                        <div class="card-body">
                            <li>$<span class="money">20</span>/website</li>
                            <li>Responsive Websites</li>
                            <li>Domain Name Free</li>
                            <li>Mobile Friendly</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                        @if(isset(Auth::user()->email))                            
                        <a href="/user/dashboard">Purchase</a>
                        @else
                        <a href="/login">Purchase</a>
                        @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 card-second">
                    <div class="card text-center">
                        <div class="card-header">STANDARD</div>
                        <div class="card-body">
                            <li>$<span class="money">40</span>/website</li>
                            <li>Responsive Websites</li>
                            <li>Domain Name Free</li>
                            <li>Mobile Friendly</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                        @if(isset(Auth::user()->email))                            
                        <a href="/user/dashboard">Purchase</a>
                        @else
                        <a href="/login">Purchase</a>
                        @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">
                    <div class="card text-center">
                        <div class="card-header">UNLIMITED</div>
                        <div class="card-body">
                            <li>$<span class="money">60</span>/website</li>
                            <li>Responsive Websites</li>
                            <li>Domain Name Free</li>
                            <li>Mobile Friendly</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </div>
                        <div class="card-footer">
                         @if(isset(Auth::user()->email))                            
                        <a href="/user/dashboard">Purchase</a>
                        @else
                        <a href="/login">Purchase</a>
                        @endif
                        </div>
                    </div>
                </div>                                
            </div>
        </div>
        {{-- endofpricing --}}
    </section>

    <section class="happyclients" id="happyclientsdivs">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">OUR HAPPY CLIENTS</h1>
            <p class="text-capitalize pt-1">Our Satisfied Customer Says</p>
        </div>

        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>                                                                
                </div>                
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>                                                                
                </div>              
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="box">
                            <a href="#"><img src="Image/1.jpg" class="img-fluid img-thumbnail"></a>
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h1>Jeric Ricafrente</h1>
                            <h2>Web Developer</h2>
                        </div>
                    </div>                                                                
                </div>

            </div>
          </div>

          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>

    </section>

    <section class="contactus" id="contactusdivs">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">CONTACT US</h1>
            <p class="text-capitalize pt-1">We're Here To Help And Answer Any Question You Might Have. We Look Forward To Hear For You 😊</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
                    <form id="validate_form" action="/insert">
                        @csrf
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="username" name="username" autocomplete="off" required data-parsley-trigger="keyup" data-parsley-length="[8, 40]" data-parsley-group="block2">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" autocomplete="off" required data-parsley-type="email" data-parsley-trigger="keyup">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" id="number" name="number" autocomplete="off" required data-parsley-length="[2,16]" data-parsley-type="digits">
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" placeholder="Enter Your Message" id="message" name="message" autocomplete="off" required rows="4" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Please Give us more feedback. " data-parsley-validation-threshold="10"></textarea>
                      </div>                      
                      <div class="d-flex justify-content-center form-botton">
                        <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter" id="newsletterid">
        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold">SUBSCRIBE TO OUR NEWSLETTER</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 offset-lg-2 col-12">
                    <div class="input-group mb-3">
                        <input type="text" name="letter" class="form-control news-letter" placeholder="Your Email">
                        <div class="input-group-append">
                            <span class="input-group-text">Subscribe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

