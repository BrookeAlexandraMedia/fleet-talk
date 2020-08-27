<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
  	 <?php include 'global/sections/head.php';?>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    
  <!--Page-->
    <div class="page">
    	
     <!-- Page preloader-->
     <?php include 'global/sections/page-loader.php';?>

      <!-- Header Modern-->
      <header class="section page-header page-header-modern">
      	
      	<!-- RD Navbar-->
      <?php include 'global/sections/nav.php';?>
        
      </header>
      
      
<!-- *** Page Content Goes Here *** -->

      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/fleetcall/cover-walkie-4.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Contact Us</h2>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </section>
      <!-- Mailform-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row align-items-md-center row-30">
            <div class="col-lg-8">
              <div class="block-md text-center">
                <h3 style="text-transform: uppercase; color:#292929;">Get in Touch</h3>
                <br />
                <h6 style="color:#31a556;">We are available 24/7 by fax, e-mail or by phone.</h6>
                <p>You can also use our quick contact form to ask a question <br />about our services and projects we’re working on.</p>
                <form method="post" action="email/contact-form.php">
                  <div class="row row-20">
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-name" name="name">Name</label>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email" name="email">E-mail</label>
                      </div>
                    </div>
                    
                    <!--<div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                        <label class="form-label" for="contact-phone">Phone</label>
                      </div>
                    </div>-->
                    
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-subject" type="text" name="Subject" data-constraints="@Required">
                        <label class="form-label" for="contact-subject" name="email">Subject</label>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message">Your Message</label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <button class="button button-block button-secondary-light" type="submit" name="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-box-wrap">
                <div class="contact-box">
                  <div class="contact-box-item">
                    <p class="contact-box-title">Get social</p>
                    <ul class="list-inline">
                      <li><a class="icon icon-xl icon-gray-500 fa-facebook-f" href="#"></a></li>
                      <li><a class="icon icon-xl icon-gray-500 fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xl icon-gray-500 fa-google" href="#"></a></li>
                      <li><a class="icon icon-lg icon-gray-500 fa-youtube" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="contact-box-item">
                    <p class="contact-box-title">Phone</p>
                    <div class="link-inline"><span class="icon icon-xl icon-primary-light material-icons-local_phone"></span><a href="tel:#">Toll Free: 1 (800) 825-0332</a></div>
                    <div class="link-inline"><span class="icon icon-xl icon-primary-light material-icons-local_phone"></span><a href="tel:#">Local: 1 (302) 254-8200</a></div>
                  </div>
                  <div class="contact-box-item">
                    <p class="contact-box-title">E-mail</p>
                    <div class="link-inline"><span class="icon icon-xl icon-primary-light mdi-email-outline"></span><a href="mailto:#">info@fleetcall.net</a></div>
                  </div>
                  <div class="contact-box-item">
                    <p class="contact-box-title">Our Coverage Area</p>
                    <div class="link-inline link-inline-top"><span class="icon icon-xl icon-primary-light material-icons-location_on"></span><a href="#">Map Link</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="14" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
          </ul>
        </div>
      </section>
      
      
      <!-- *** Page Content Ends Here *** -->

      <!-- Page Footer-->
     <?php include 'global/sections/footer.php';?>
    </div>
    
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>