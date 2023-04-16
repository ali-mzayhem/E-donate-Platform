<?php include('submitrequest.php')?>
<?php session_start();
require './class.phpmailer.php';
$db = mysqli_connect('localhost', 'root','', 'userlogin');
$user = $_SESSION["username"];
$username = "";
$email = "";
$number = "";
$sql = "SELECT username, email, number FROM users WHERE username='$user' ";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $username = $row["username"];
            $email = $row["email"];
            $number = $row["number"];
        }
    }

?>
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="main.css">
  <script src="https://kit.fontawesome.com/889f4678af.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">


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
          <li> <a href="logout.php">Logout</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <div class="text-box">
    <?php
    if (!isset ($_SESSION["username"])) {
  ?>
  <h1>We Are Here To Help People Out</h1><br>
  <?php } else { ?>
    <h1>What is wrong, <?php echo $_SESSION["username"]?>?</h1><br>
  <?php } ?>

    </div>
  </section>
  <section class="contactform">
    <h2>Profile</h2>
    <form method="post">
      <div class="email-login">
        <label for="email"> Username:</label>
        <input type="text" value="<?php echo $username;?>" name="username" >
        <label for="email">Email:</label>
        <input type="text" value="<?php echo $email;?>" name="email" >
        <label for="email">Phone Number:</label>
        <input type="text" value="<?php echo $number;?>" name="number" >

        <input class="cta-btn" type="submit" value="Change Password" name="PasswordChange">
        <input class="cta-btn" type="submit" value="Submit Changes" name="submit">

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

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['PasswordChange'])) {
        $token = (INT) rand(0,200);
        $query = "INSERT INTO resetpassword (token, email) 
          VALUES('$token', '$email')";
          mysqli_query($db, $query);

          $outlook_mail = new PHPMailer; //From email address and name 

        $outlook_mail->IsSMTP();
        // Send email using Outlook SMTP server
        $outlook_mail->Host = 'smtp-mail.outlook.com';
        // port for Send email
        $outlook_mail->Port = 587;
        $outlook_mail->SMTPSecure = 'tls';
        $outlook_mail->SMTPDebug = 1;
        $outlook_mail->SMTPAuth = true;
        $outlook_mail->Username = 'husseinmsheik1@outlook.com';
        $outlook_mail->Password = 'Mm03996920';
    
        $outlook_mail->From = 'husseinmsheik1@outlook.com';
        $outlook_mail->FromName = 'Support';// frome name
        $outlook_mail->AddAddress($email, 'To Name');  // Add a recipient  to name
    
        $outlook_mail->IsHTML(true); // Set email format to HTML
    
        $outlook_mail->Subject = 'Reset Email';
        $outlook_mail->Body = '
  
    Password Reset! <br>
    Your Password has been resetted <br>
    
    Please click this link to add your new password:
    http://localhost/project/checkpass.php?email='.$email.'&token='.$token.'
      
    ';
    if(!$outlook_mail->send()) 
        {
        } 
        else { 
            echo "<script> alert('Check your email to change your password')</script>";
        }
    }

    if(isset($_POST['submit'])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $number = $_POST["number"];

        $query = "UPDATE users SET username='$username'  WHERE username='$user'";
        mysqli_query($db, $query);

        $query = "UPDATE users SET email='$email'  WHERE username='$username'";
        mysqli_query($db, $query);

        $query = "UPDATE users SET number='$number'  WHERE username='$username'";
        mysqli_query($db, $query);

        $_SESSION["username"] = $username;
        $_SESSION['success'] = "You are now logged in";
        header("Refresh:0");

    }
}

?>