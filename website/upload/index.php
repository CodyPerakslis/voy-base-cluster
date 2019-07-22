<?php include('header.php'); ?>

<script>

</script>

<!--website-wrapper-->
   <div class="website-wrapper">
<!--homebanner-->
<section class="homebanner" id="home">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="hbcontent">
              <a href="#"><img src="images/logo.png" alt="image" width="160"></a>
              <h2>World's<span>Audio Tour</span></h2>
              <p>An audio tour for the entire world that anyone can listen and contribute to.</p>
              <ul class="pd0 mg0">
                <li><a href="https://itunes.apple.com/us/app/kanetus/id1438139566?mt=8"><img src="images/banner-apple-store.png" alt="images" width="180"></a></li>
                <li><a href="https://play.google.com/store/apps/details?id=com.kanetus.app"><img src="images/banner-google-play.png" alt="images" width="180"></a></li>
            </ul>
           </div>
         </div>
      </div>
   </div>
 <div class="mynavigation">
    <div class="nav-logo"><a href="./"><img src="images/logo.png" alt="logo" width="70" class="navlogoimg"></a></div>
     <nav class="nav-bar">
     <div class="nav-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
     <ul>
       <li style="visibility:hidden;height:0;" class="homeitem"><a href="#home">Home</a></li>
       <!-- <li><a href="#download">Download</a></li> -->
       <li><a href="#howitworks" onclick="gtag('event', 'click', {
          'event_category' : 'nav',
          'event_label' : 'howitworks'
        });">How it works</a></li>
       <li><a href="#testimonials" onclick="gtag('event', 'click', {
          'event_category' : 'nav',
          'event_label' : 'stories'
        });">Stories</a></li>
       <li><a href="#contactus" data-scrolltime="1500" onclick="gtag('event', 'click', {
          'event_category' : 'nav',
          'event_label' : 'contactus'
        });">Contact us</a></li>
        <li><a href="/blog">Blog</a></li>
     </ul>
   </nav>
    </div><!--mynavigation-->
 </section>



<!--homebanner-->
<!--home-app-play-->
<section class="home-app-play" id="download", style="visibility:hidden;height:0;">
   <ul class="pd0 mg0 text-center">
      <li><a href="https://www.thevoyapp.com/" class="slowHover"  onclick="gtag('event', 'click', {
              'event_category' : 'download',
              'event_label' : 'apple store'
            });"><i class="fa fa-apple" aria-hidden="true"></i> App Store</a></li>
      <li><a href="https://www.thevoyapp.com/" class="slowHover" onclick="gtag('event', 'click', {
               'event_category' : 'download',
               'event_label' : 'google play'
            });"><i class="fa fa-android" aria-hidden="true"></i> Play Store</a></li>
   </ul>
</section>
<!--home-app-play-->
<!--home-amazing-interface-->
<section class="home-amazing-interface" id="howitworks">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8 col-12 offset-md-2 offset-sm-4">
            <div class="home-headingbar text-center">
              <h4>FEATURES</h4>
               <h2>Stories about places</h2>
               <p>Every building you pass through is a special place for someone.</p>
               <p>Listen to stories, facts, and favorite memories from people who care most about that place</p>
        </div>
         </div>
      </div>
      <div class="hai-bottom">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="hai-content-wrap">
                  <div class="hai-content align-self-center">
                    <h3>Explore your neighborhood</h3>
                    <p>Our app lets your explore through audio tours created by those around you</p>
                 </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="hai-img text-center">
                  <img src="images/home-amazing-interface1.png" alt="images" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
      <!--hai-bottom-->
      <div class="hai-bottom">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobileview">
               <div class="hai-img text-left">
                  <img src="images/home-amazing-interface2.png" alt="images" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="hai-content-wrap">
                  <div class="hai-content align-self-center">
                    <h3>Hear from locals</h3>
                     <p>Learn about your surrounding through the experiences of people who grew up there</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--hai-bottom-->
      <div class="hai-bottom">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="hai-content-wrap">
                  <div class="hai-content align-self-center">
                    <h3>Find hidden gems</h3>
                    <p>Discover secrets and hiddens collectibles spread around the entire world</p>
                 </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="hai-img text-center">
                  <img src="images/home-amazing-interface3.png" alt="images" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
      <!--hai-bottom-->
      <div class="hai-bottom">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mobileview">
               <div class="hai-img text-left">
                  <img src="images/home-amazing-interface4.png" alt="images" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="hai-content-wrap">
                  <div class="hai-content align-self-center">
                    <h3>Add your own voice</h3>
                   <p>Record a story to share with others through our proprietary tour creator</p>
               </div>
               </div>
            </div>
         </div>
      </div>
      <!--hai-bottom-->
   </div>
</section>
<!--home-amazing-interface-->
<!--home-what-people-say-->
<section class="home-what-people-say" id="testimonials">
   <div class="container">
   <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-12 offset-md-2 offset-sm-4">
         <div class="home-headingbar text-center">
           <h4>STORIES</h4>
           <h2>Our Featured Tours</h2>
      </div>
      </div>
   </div>
   <div class="home-testimonial">
      <div class="owl-carousel" id="owl-home-testimonial">
         <div class="v-item">
            <div class="testimonial-box">
               <img src="images/testimonial1.png" alt="images">
               <div class="testimonial-box-content">
                  <div class="testimonial-box-cin text-center">
                    <p>“In order to capture Minnesota’s rootedness, Predock designed the building after a geode, a type of rock that is crude at first glance, but when split open...”</p>
                    <h4>McNamara: Inside the Geode</h4>
                    <h6>Minneapolis</h6>
                 </div>
               </div>
            </div>
         </div>
         <!--v-item-->
         <div class="v-item">
            <div class="testimonial-box">
               <img src="images/testimonial2.png" alt="images">
               <div class="testimonial-box-content">
                  <div class="testimonial-box-cin text-center">
                    <p>“And to rival the Kitten name, the other firefighter teams took up their own mascots. Then came the Rats of Engine 9, the Whales of Engine 4...”</p>
                    <h4>HISTORIC FIRESTATION 19</h4>
                    <h6>Stadium Village</h6></div>
               </div>
            </div>
         </div>
         <!--v-item-->
         <div class="v-item">
            <div class="testimonial-box">
               <img src="images/testimonial3.png" alt="images">
               <div class="testimonial-box-content">
                  <div class="testimonial-box-cin text-center">
                    <p>“It’s completely changed the development pattern and the ability for developers to do interesting work in the neighborhood..."</p>
                    <h4>IMPACT OF THE GREENLINE</h4>
                    <h6>Minneapolis</h6>
                  </div>
               </div>
            </div>
         </div>
         <!--v-item-->
      </div>
   </div>
</section>
<!--home-what-people-say-->
<!--home-getintouch-->
<section class="home-getintouch" id="contactus">
   <div class="container">
      <div class="row hgit-top">
         <div class="col-lg-7 col-md-7 col-sm-7 col-12">
            <div class="videoWrapper">
               <iframe width="560" height="349" src="https://www.youtube.com/embed/p32eiYDoa8A" frameborder="0" allowfullscreen></iframe>
            </div>
         </div>
         <div class="col-lg-5 col-md-5 col-sm-5 col-12">
            <div class="home-getintouch-in">
               <h4><span>CONTACT US</span></h4>
               <h2>Get In Touch</h2>
               <p>Leave us a message here or at </br> <a href="mailto:team@thevoyapp.com?Subject=Hello!" target="_blank" style="color: #FF5D5D;">team@thevoyapp.com</a></p>
               <p class="success-contact" style="color: #f33d8a;"><?php if ( $_SESSION['sucess-email'] ) { echo $_SESSION['sucess-email']; unset($_SESSION['sucess-email']);} ?></p>

          <span id="invalidEmail1" style="color: #FF5D5D;"><i class="fa fa-warning"></i> Invalid Email Address</span>
               <div class="hgit-form">
               <form action="https://voy-contact.prod.with-datafire.io/contact" method="post" target="_blank" class="validate" novalidate>
                     <div class="row">
                        <div class="col-sm-6 col-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="name" id="fname" placeholder="Your Name">
                           </div>
                        </div>
                        <div class="col-sm-6 col-12">
                           <div class="form-group">
                              <input type="email" class="form-control" name="emailAddress" id="email1" placeholder="Your Email">
                           </div>
                        </div>
                        <div class="col-sm-6 col-12">
                           <div class="form-group">
                              <textarea class="form-control" id="" name="message" placeholder="Message"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-12 col-12 v-two-buttons">
                           <div class="form-group hgit-submitnow">
                              <input type="submit" id="contact" class="form-control slowHover contact-button" name="submit" value="Submit Now">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="row text-center home-counter-wrap">
         <div class="col-lg-3 col-md-3 col-sm-3 col-12" >
            <div class="counter">
               <div class="counter-icon">
                  <i class="flaticon-rating"></i>
               </div>
               <div class="counter-content">
                  <h2 class="timer count-title count-number" data-to="20" data-speed="3000"></h2>
                  <p class="count-text ">Positive Reviews</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3 col-12" >
            <div class="counter">
               <div class="counter-icon">
                  <i class="flaticon-conversation-1"></i>
               </div>
               <div class="counter-content">
                  <h2 class="timer count-title count-number" data-to="10" data-speed="3000"></h2>
                  <p class="count-text ">Good Comments</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="counter">
               <div class="counter-icon">
                  <i class="flaticon-email"></i>
               </div>
               <div class="counter-content">
                  <h2 class="timer count-title count-number" data-to="100" data-speed="3000"></h2>
                  <p class="count-text ">App Downloads</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3 col-12" >
            <div class="counter">
               <div class="counter-icon">
                  <i class="flaticon-trophy"></i>
               </div>
               <div class="counter-content">
                  <h2 class="timer count-title count-number" data-to="5" data-speed="3000"></h2>
                  <p class="count-text ">Best Awards</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--home-getintouch-->




<?php include('footer.php'); ?>
