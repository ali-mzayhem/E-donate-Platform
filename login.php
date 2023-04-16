<?php include('server2.php')?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <head>
    <meta charset="utf-8">
   <title>Login Page</title>
   <nav>
    
      <div class="nav-links1">
    <ul>
      <li> <a href="main.php">HOME</a></li>
      <li> <a href="">Donate</a></li>
      <li> <a href="request.php">Request</a></li>
      <li> <a href="contact.php">Contact Us</a></li>
      <li> <a href="register.php">Login | Register</a></li>
    </ul>
    </div>
    </nav>

      </head>
     
      <body>


   <div class="card">
    <form method="post" action="login.php" >

       <h2 class="title"> Login</h2>
       <?php include('errors.php') ?>
          <div class="email-login">
          <label for="email"> Username or Email</label>
          <input type="text" placeholder="" name="username" required>
          <label for="psw">Password</label>
          <input style="display: none" name="Login" value="Login" />
          <input type="password" placeholder="" name="password" required>
           </div>
            <a class="forget-pass" href="forget.php">Forgot password?</a>
       <p class="subtitle">Don't have an account? <a class="su" href="register.php">Create Account</a></p>
       <input class="cta-btn" type="submit" name="Login">
      </form>
 </div>
   </body>
</html>