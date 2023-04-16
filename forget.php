<?php ?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <head>
    <meta charset="utf-8">
   <title>Forget Password Page</title>
   <nav>
    
      <div class="nav-links1">
    <ul>
    <li> <a href="">HOME</a></li>
    <li> <a href="">Donate</a></li>
    <li> <a href="">Request</a></li>
    <li> <a href="">Contact Us</a></li>
    <li> <a href="">Login | Register</a></li>
    </ul>
    </div>
    </nav>
      </head>
   <div class="card3">
    <form method="post" >
       <h2 class="title"> Forget Password</h2>
          <div class="email-login">
          <label for="email"> Username or Email</label>
          <input type="text" placeholder="" name="Email" required>
                 </div>
                 <input class="cta-btn" type="submit" name="Add">
      </form>
 </div>
   </body>
</html>

<?php
require './class.phpmailer.php';

$db = mysqli_connect('localhost', 'root','', 'userlogin');

if ( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Add'])) {

    $token = (INT) rand(0,200);
    $email = mysqli_real_escape_string($db, $_POST['Email']);

    $query = "SELECT * FROM users WHERE email='$email' AND verfied = 1";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
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
        }else {
            array_push($errors, "email not found");
        }

        if(!$outlook_mail->send()) 
        {
        } 
        else { 
        }
          
            header('location: verify.php');
        }
  
  

?>