<?php include('submitrequest.php')?>
<?php session_start(); ?>
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="main.css">
  <script src="https://kit.fontawesome.com/889f4678af.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>


  <meta charset="utf-8">
  <title>Request Donation</title>
</head>

<body>

  <section class="header3">
    <nav>
      <div class="nav-links">
        <ul>
          <li> <a href="main.php">HOME</a></li>
          <li> <a href="donate.php">Donate</a></li>
          <li> <a href="request.php">Request</a></li>
          <li> <a href="contact.php">Contact Us</a></li>
          <?php
    if (!isset ($_SESSION["username"])) {
  ?>
          <li> <a href="login.php">Login | Register</a></li>
          <?php } else { ?>
          <li> <a href="profile.php">Profile</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <div class="text-box">
      <h1>Dont Worry!<br>We Are Here To Help You!</h1><br>
    </div>
  </section>
  <section class="contactform">
    <h2>Request</h2>
    <form method="post" action="request.php">
      <div class="email-login">
        <label for="email"> Patient's Full Name:</label>
        <input type="text" placeholder="" name="name" required>
        <label for="email">Their Mother's Full Name:</label>
        <input type="text" placeholder="" name="mom" required>
        <label for="email">Email to Contact:</label>
        <input type="text" placeholder="" name="email" required>
        <label for="email">Their Date of Birth:</label>
        <input type="date" placeholder="dd/mm/yyyy" name="birth" required>
        <label for="email"> Condition Description: </label>
        <input type="text" placeholder="" name="description" required>
        <div class="row">
          <div class="column1">
            <label for="number">Funds: </label>
            <input type="number" placeholder="" name="funds" required>
          </div>
          <label for="category">Category:</label>
          <div class="row">
            <div class="box">
              <select name="category" id="category">
                <option value="1">Medicine</option>
                <option value="0">Hospital Entrance</option>
                <option value="2">Surgery</option>
                <option value="3">Medical Equipment</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="column1">
            <label for="file">Report:</label>
            <input type="file" id="file" name="file">
          </div>
          <label for="location">Location:</label>
          <div class="row">
            <div class="box">
              <select name="location" id="location">
                <option value="Beirut">Beirut</option>
                <option value="South">South</option>
                <option value="North">North</option>
                <option value="Baalbackk">Baalback</option>
              </select>
            </div>
          </div>
        </div>
        <?php
    if (!isset ($_SESSION["username"])) {
  ?>
        <h2>Login to request a donation</h2>
        <?php } else { ?>
        <input class="cta-btn" type="submit" value="submit" name="submit">
        <?php } ?>

      </div>
    </form>
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