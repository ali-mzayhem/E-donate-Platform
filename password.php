<?php include('resetpass.php')?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <head>
    <meta charset="utf-8">
   <title>Login Page</title>
   <nav>
    
      <div class="nav-links1">
    <ul>
      <li> <a href="main.html">HOME</a></li>
      <li> <a href="">Donate</a></li>
      <li> <a href="">Request</a></li>
      <li> <a href="contact.html">Contact Us</a></li>
      <li> <a href="register.php">Login | Register</a></li>
    </ul>
    </div>
    </nav>

      </head>
     
      <body>


   <div class="card">
    <form method="post">
      <input type='text' value='<?php echo $email ?>' name='email'style="display:none"/>
       <h2 class="title"> New Password</h2>
          <div class="email-login">
          <label for="newpass"> New Password</label>
          <input type="text" placeholder="" name="newpass" required>
          <label for="psw">Repeat Password</label>
          <input type="password" placeholder="" name="newpass2" required>
           </div>
       <input class="cta-btn" type="submit" name="Reset">
      </form>
 </div>
   </body>
</html>