<?php session_start();?>
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

     <section class="header">
      <!-- NAVIGATION BAR -->
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
 <!-- NAVIGATION BAR -->

<div class="text-box">
<?php
    if (!isset ($_SESSION["username"])) {
  ?>
  <h1>We Are Here To Help People Out</h1><br>
  <?php } else { ?>
    <h1>Hello, <?php echo $_SESSION["username"]?></h1><br>
  <?php } ?>

<a class="hero-btn" href="donate.php">Donate Now</a>
</div>
</section> 


<!-- ABOUT -->
<section class=" About">

 <div class="section-title">
          <h2>Why Choose Us?</h2>
        </div>
<p>Lorem ipsum dolor sit amet, no pri primis repudiare intellegat,
   ne ius possit petentium.<br> Novum inermis menandri sit an , sea quidam intellegat mediocritatem eu.<br> 
   Ridens feugait ex usu, id audiam commune ullamcorper nec. <br> No offendit argumentum suscipiantur vel,
    congue antiopam  euripidis eu vis...... </p>
    <a class="hero-btn1" href="about.php">Read Our Story</a>



    <img class="indeximg" src="/images/IndexPic.png" >
</section>


<section  id="testimonials">
  <div class="section-title">
    <h2 >Testimonials</h2>
  </div>
<div class="row">
<div class="test-col">
  <img src="/images/user1.jpg">
  <div>
    <p>
     Lorem ipsum dolor sit amet, no pri primis repudiare intellegat,
        ne ius possit petentium.<br> Novum inermis menandri sit an  </p>
        <h3>Reem Chehadeh</h3>
        <i class="fa-solid fa-star"></i> 
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
       </div>
</div>

<div class="test-col">
  <img src="/images/user2.jpg">
  <div>
    <p>
     Lorem ipsum dolor sit amet, no pri primis repudiare intellegat,
        ne ius possit petentium.<br> Novum inermis menandri sit an
        <h3>Hussain Wehbe</h3>
        <i class="fa-solid fa-star"></i> 
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
    </p>
  </div>
</div>
</div>
<div class="row">
  <div class="test-col">
    <img src="/images/user1.jpg">
    <div>
      <p>
       Lorem ipsum dolor sit amet, no pri primis repudiare intellegat,
          ne ius possit petentium.<br> Novum inermis menandri sit an  </p>
          <h3>Reem Chehadeh</h3>
          <i class="fa-solid fa-star"></i> 
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
         </div>
  </div>
  
  <div class="test-col">
    <img src="/images/user2.jpg">
    <div>
      <p>
       Lorem ipsum dolor sit amet, no pri primis repudiare intellegat,
          ne ius possit petentium.<br> Novum inermis menandri sit an
          <h3>Hussain Wehbe</h3>
          <i class="fa-solid fa-star"></i> 
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
      </p>
    </div>
  </div>
  </div>
</section>
<!-- ABOUT END -->


<!-- STATISTICS -->

<section  class="stat">
  <div class="row2">
  <div class="stat-col">
    
    <div class="icons2">

    <i class="fa-solid fa-heart-pulse fa-10x"></i>
  </div>
    <span class="sp1"><b> 30+ </b></span><br>
    <span class="sp2">Lives Saved</span>
  </div>
  <div class="stat-col">
    <h2>Statistics</h2>

    <div class="fig2">
<div class="icons2">
    <i class="fa-solid fa-money-bill-trend-up fa-10x"></i>
  </div>
    <span class="sp1"><b> $10,000+ </b> </span><br>
    <span class="sp2">Raised Funds</span>
  </div>
      </div>
      <div class="stat-col">
        <div class="icons2">
        <i class="fa-solid fa-earth-americas fa-10x"></i>
      </div>
        <span class="sp1"> <b> 12+ </b></span><br>
    <span class="sp2">Regions</span>   
          </div> 
  </div>
</section>
<!-- STATISTICS END -->


<!-- FOOTER -->
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
          <div
            class="col-sm-12 col-md-6 col-lg-12 footer_section footer_section_contact"
          >
            <h4>Volunteer Now</h4>
            <div class="search">
              <form method="POST" class="subscribe">
                <input
                  type="email"
                  class="contact_input"
                  name = "contact"
                  placeholder="Email or Phone Number"
                />
                <button type="submit" name="volunteer" class="submit_button">
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
    &copy; Copyrights <strong><span>Support Med</span></strong>. All Rights Reserved, Made by Hussain Msheik & Hussain Attris
  </div>


<!-- FOOTER END -->
</body>
</html> 

<?php 

$db = mysqli_connect('localhost', 'root','', 'userlogin');

if($_SERVER['REQUEST_METHOD'] == "POST"){

  if(isset($_POST['volunteer']) && isset ($_SESSION["username"])) {
     $contact = $_POST["contact"];
     $username = $_SESSION["username"];

     $query = "INSERT INTO volunteers (username, contact) 
                VALUES('$username', '$contact')";
      mysqli_query($db, $query);
      echo "<script>alert('Thanks for volunteering ".$username."! We wil contact if your help is needed!')</script>";
  }else{
    echo "<script>alert('Login or Create Account to Volunteer')</script>";
  }
}

?>
