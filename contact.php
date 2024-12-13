<?php ;
$meta = [
    'title' => "Contact Us | ASW Digital Marketing Services in Hyderabad",
    'description' => "Contact us for digital marketing, branding, and SEO, SMM, Email, PPC, Ads campaigns, website design services. Fill out our form today and let’s start your project!",
    'keywords' => "Digital marketing company address near me,Address,digital marketing services,marketing solutions,Advertising,advertising company,search engine advertising,PPC services,search marketing agency,PPC services,google ads management,PPC management,Adwords agency,PPC services india,PPC Company.",


]; 
include('includes/header.php')

    ?>


<!--page title start-->

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <h1>
          Contact Us
        </h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ul >
            <li >
              <a href="index.php">
                <i class="bi bi-house-door me-1"></i>Home</a>
            </li>
            
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="page-title-wave">
    <img src="images/page-bg.svg" alt="">
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--contact start-->

<section class="pb-lg-0 z-index-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12 ps-lg-10 order-lg-1">
        <div class="theme-title">
          <h6>Get In Touch</h6>
          <h2>Drop A Line!</h2>
        </div>
        <form  method="post" action="form.php">
          <div class="messages"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input id="form_name" type="text" pattern="[A-Za-z]+" name="name" class="form-control" placeholder="Name" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input id="form_email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"  name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input id="form_phone" type="phone-number" pattern="\+?[1-9]\d{1,14}"  name="number" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea id="form_message" name="message" pattern="[A-Za-z]+" class="form-control" placeholder="Write Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <button type="submit" class="themeht-btn primary-btn mt-4">
            <span>Send Message</span>
            <i class="bi bi-arrow-right"></i>
          </button>
        </form>
      </div>
      <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
        <div class="contact-box">
          <div class="theme-title">
            <h6>Contact Details</h6>
            <h2>Main Office</h2>
            <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
          </div>
          <ul class="contact-info list-unstyled">
            <li>
              <i class="flaticon flaticon-gps-1"></i>
              <span>Visit Our Location</span>
              <p>G8, Ground floor, Amrutha Ville, Raj Bhavan Rd, opposite Yashoda Hospital Road, Somajiguda, Hyderabad, Telangana 500082</p>
            </li>
            <li>
              <i class="flaticon flaticon-email"></i>
              <span>Send Us Email</span>
              <a href="mailto:asdigitalmarketingpvtltd@gmail.com">support@aswdigitalmarketing.com</a>
            </li>
            <li>
              <i class="flaticon flaticon-mobile"></i>
              <span>Looking For Project</span>
              <a href="tel:+91 93902 29056">+91 93902 29056</a>
            </li>
          </ul>
          <div class="social-icons mt-5">
          <ul class="list-inline">
        <li class="list-inline-item">
                <a href="https://wa.me/+919390229056" target="_blank" >
                  <i class="bi-whatsapp"></i>
                </a>

              </li>
          <li>
            <a href="#">
              <i class="flaticon-facebook-app-symbol"></i>
            </a>
          </li>
          
          <li>
            <a href="https://www.instagram.com/p/DDZi5GszK7l/?igsh=MTY0dnJ2bWdqeXNrdg==">
              <i class="flaticon-instagram" target="_blank"></i>
            </a>
          </li>
          <li class="list-inline-item">
                <a href="https://www.youtube.com/@ASWDIGITALMARKETINGSERVICES" target="_blank">
                  <i class="bi-youtube"></i>
                </a>

              </li>
        </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="overflow-hidden pt-0 mt-lg-n10">
  <div class="container-fluid px-lg-10">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="map iframe-h">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3177.227474383783!2d78.45512437421044!3d17.424982001722935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97f1145d796f%3A0xcabdc983c88ef0eb!2sASWGroupIndia%20-%20Somajiguda%20Head%20Office!5e1!3m2!1sen!2sin!4v1729147389700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!--contact end-->

</div>

<!--body content end--> 


<?php ;
 
 include('includes/footer.php')
 
     ?>
 
 </html>
