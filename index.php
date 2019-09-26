<?php
session_start();
if ( isset($_SESSION['username']) ){
    include 'includes/templates/header.php';
    include 'login/resource/Database.php';
}else{
    include 'includes/templates/welcome.php';
}
?>
    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Welcome in SHIPMINTS BANK</h2>
            <p class="lead mb-5 probootstrap-animate">Hope u like it! another free template by <a href="https://uicookies.com/" target="_blank">uicookies.com</a> Under License <a href="https://uicookies.com/license" target="_blank">CC 3.0</a></p>
            <p class="probootstrap-animate">
              <a href="https://free-template.co/" target="_blank" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">More Templates Here</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->


    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Why we should use SHIPMINTS BANK</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class="probootstrap-author">
                <a href="https://uicookies.com/" target="_blank">
                  <img src="assets/images/person_1.jpg" alt="Free Template by uicookies.com" class="rounded-circle">
                  <span class="probootstrap-name">James Smith</span>
                  <span class="probootstrap-title">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section">
        <div class="container">
            <div class="col-md-12 mb-5 probootstrap-animate"></div>
                <h2 class="display-4 border-bottom probootstrap-section-heading text-center">Website Adds</h2>
        </div>
        <div class="video text-center">
            <iframe id="video" width="800" height="450" src="https://www.youtube.com/embed/uN44-zgYq0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
        </div>
    </section>
    <!-- END section -->
<section class="probootstrap_section">
        <div class="container">
            <div class="col-md-12 mb-5 probootstrap-animate"></div>
                <h2 class="display-4 border-bottom probootstrap-section-heading text-center">How to Sign Up and the nature of the work</h2>
        </div>
        <div class="video text-center" id="howTUse">
            <iframe id="video" width="800" height="450" src="https://www.youtube.com/embed/uN44-zgYq0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
        </div>
    </section>
    <!-- END section -->
<section class="probootstrap_section">
        <div class="container">
            <div class="col-md-12 mb-5 probootstrap-animate"></div>
                <h2 class="display-4 border-bottom probootstrap-section-heading text-center">How to use the                 system</h2>
        </div>
        <div class="video text-center">
            <iframe id="video" width="800" height="450" src="https://www.youtube.com/embed/uN44-zgYq0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
        </div>
    </section>
    <!-- END section -->

<section class="probootstrap_section bg-light">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Adds</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_1.jpg)">
              </div>
              <div class="media-body">
                <span class="text-uppercase">January 1st 2018</span>
                <h5 class="mb-3">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_2.jpg)">
              </div>
              <div class="media-body">
                <span class="text-uppercase">January 1st 2018</span>
                <h5 class="mb-3">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>

          </div>
          <div class="col-md-6">
            
            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_4.jpg)">
              </div>
              <div class="media-body">
                <span class="text-uppercase">January 1st 2018</span>
                <h5 class="mb-3">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_5.jpg)">
              </div>
              <div class="media-body">
                <span class="text-uppercase">January 1st 2018</span>
                <h5 class="mb-3">Travel To United States Without Visa</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Top Places Around The World</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_1.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <div class="probootstrap-text">
                <h3>Buena</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_2.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <h3>Road</h3>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_3.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <h3>Australia</h3>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_4.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <h3>Japan</h3>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  

    <section class="probootstrap_section">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Our Services</h2>
          </div>
        </div>
      </div>
    </section>
        

    <section class="probootstrap-section-half d-md-flex" id="section-about">
      <div class="probootstrap-image probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/img_2.jpg)"></div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInRight">
          <h2 class="heading mb-4">Customer Service</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href="#" class="btn btn-primary">Read More</a></p>
        </div>
      </div>
    </section>


    <section class="probootstrap-section-half d-md-flex">
      <div class="probootstrap-image order-2 probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/img_3.jpg)"></div>
      <div class="probootstrap-text order-1">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInLeft">
          <h2 class="heading mb-4">Payment Options</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href="#" class="btn btn-primary">Learn More</a></p>
        </div>
      </div>
    </section>
    <!-- END section -->

    

    

   <?php include 'includes/templates/footer.php' ?>

    
   