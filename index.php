<?php
include "head.php";

?>

<html>
<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->



<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <img src="assets/images/logo-v1.png" alt="">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
            <!-- <li class="scroll-to-section"><a href="?modul=postingan" class="active">Home</a></li> -->
            <li class="scroll-to-section"><div class="border-first-button"><a href="login.php">Login</a></div></li> 
          </ul>        
          <a class='menu-trigger'>
              <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="row">
                <div class="col-lg-12">
                  <?php
// if($_GET['modul']=="postingan")
// {
//   include "modul/postkategori/postkategori.php";
// }
                  ?>
                  <h6>Always update</h6>
                  <h2>MTNEWS</h2>
                  <p>Looking for the latest and very hot news, this is the place</p>
                </div>
                <div class="col-lg-12">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="assets/images/slider-dec.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="portfolio" class="our-portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
          <h4>Kategori <em>Berita</em></h4>
          <div class="line-dec"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
    <div class="row">
      <div class="col-lg-12">
        <div class="loop owl-carousel">
          <div class="item">
            <a href="#">
              <div class="portfolio-item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Website Builder</h4>
                <span>Marketing</span>
              </div>
            </div>
            </a>  
          </div>
          <div class="item">
            <a href="#">
              <div class="portfolio-item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Website Builder</h4>
                <span>Marketing</span>
              </div>
            </div>
            </a>  
          </div>
          <div class="item">
            <a href="#">
              <div class="portfolio-item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Website Builder</h4>
                <span>Marketing</span>
              </div>
            </div>
            </a>  
          </div>
          <div class="item">
            <a href="beritapolitik.php">
              <div class="portfolio-item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Politik</h4>
                <span>Marketing</span>
              </div>
            </div>
            </a>  
          </div>
          <div class="item">
            <a href="#">
              <div class="portfolio-item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Website Builder</h4>
                <span>Marketing</span>
              </div>
            </div>
            </a>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <h6>Contact Us</h6>
          <h4>Get In Touch With Us <em>Now</em></h4>
          <div class="line-dec"></div>
        </div>
      </div>
      <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <div class="contact-dec">
                <img src="assets/images/contact-dec.png" alt="">
              </div>
            </div>
            <div class="col-lg-5">
              <div id="map">
                <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="fill-form">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="info-post">
                      <div class="icon">
                        <img src="assets/images/phone-icon.png" alt="">
                        <a href="#">010-020-0340</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="info-post">
                      <div class="icon">
                        <img src="assets/images/email-icon.png" alt="">
                        <a href="#">our@email.com</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="info-post">
                      <div class="icon">
                        <img src="assets/images/location-icon.png" alt="">
                        <a href="#">123 Rio de Janeiro</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                    </fieldset>
                    <fieldset>
                      <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                    </fieldset>
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


</body>
</html>

<?php
include "footer.php";
?>