<!DOCTYPE html>

<head>
<link rel="stylesheet" href="main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<script src="https://kit.fontawesome.com/889f4678af.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">


  <meta charset="utf-8">
  <title>Main Page</title>
</head>

<body>

  <section class="header2">
    <nav>
      <div class="nav-links">
        <ul>
          <li> <a href="main.php">HOME</a></li>
          <li> <a href="donate.php">Donate</a></li>
          <li> <a href="request.php">Request</a></li>
          <li> <a href="contact.php">Contact Us</a></li>
          <li> <a href="login.php">Login | Register</a></li>
        </ul>
      </div>
    </nav>
    <div class="text-box">
      <h1>Is There Anything Wrong?<br> Let Us Know</h1><br>
    </div>
  </section>
  <section class="contactform">
    <h2>Contact Us</h2>
    <form action="contact.php">
      <div class="email-login">

        <label for="email"> Full Name</label>
        <input type="text" placeholder="" name="uname" required>
        <label for="email"> Email</label>
        <input type="text" placeholder="" name="uname" required>
        <div class="message">
          <label for="psw">Message</label>
          <input type="text" placeholder="" name="psw" required>
        </div>
      </div>
      <input class="cta-btn" type="submit" value="Submit">
    </form>
    </div>

  </section>


  <div class="section-title">
    <h2>Get In Touch</h2>
  </div>
  <div class="footer pt-5">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
          <div class="footer_section">
            <h4>Links</h4>
            <ul>
              <li><a href="main.php">Home</a></li>
              <li><a href="donate.php">Donate</a></li>
              <li><a href="request.php">Request</a></li>
              <li><a href="contact.php">Contact Us</a></li>

            </ul>


          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
          <div class="footer_section">
            <h4>About Support Med</h4>
            <ul>
              <li><a href="about.php">Our Story</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
              <li><a href="contact.php">Contact Us</a></li>

            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-3 mb-5">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12 footer_section footer_section_contact">
              <h4>Volunteer Now</h4>
              <div class="search">
                <form action="#" class="subscribe">
                  <input type="email" class="contact_input" placeholder="E-mail address" />
                  <button type="submit" class="submit_button">
                    <i class="fa fa-paper-plane"></i>
                  </button>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-12 social_media">
              <h4>Follow Up</h4>
              <ul>
                <li>
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href=""><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href=""><i class="fab fa-whatsapp"></i></a>
                </li>
                <li>
                  <a href=""><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="container footer-bottom clearfix">-->
  <div class="copyright">
    &copy; Copyrights <strong><span>Support Med</span></strong>. All Rights Reserved, Made by Hussain Msheik & Hussain
    Attris
  </div>



</body>

</html>