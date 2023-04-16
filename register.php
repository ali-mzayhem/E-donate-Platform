<?php include('server.php')?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <head>
    <meta charset="utf-8">
   <title>Register Page</title>
   <nav>
    <div class="nav-links1">
  <ul>
    <li> <a href="main.php">HOME</a></li>
    <li> <a href="">Donate</a></li>
    <li> <a href="">Request</a></li>
    <li> <a href="contact.html">Contact Us</a></li>
    <li> <a href="register.html">Login | Register</a></li>
  </ul>
  </div>
  </nav>

      </head>
      <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
   <div class="card2">
    <form method="post" action="register.php" >
      <?php include('errors.php') ?>
       <h2 class="title"> Register</h2>
         <div class="email-login">
          <label for="email">Username</label>
          <input style="display: none" name="Register" value="Register" />
          <input type="text" placeholder="" name="username" id="username" required>
          <label for="email">Email</label>
          <input type="text" placeholder="" name="Email" id="Email"  required>        
          <label for="psw">Password</label>
          <input type="password" placeholder="" name="password" id="password" required>
          <label for="psw">Repeat Password</label>
          <input type="password" placeholder="" name="password2" name="password2" required>
        </div> 
       <p class="subtitle">Already have an account? <a class="su" href="login.php">Login</a></p>
       <input class="cta-btn" type="submit" name="Register">
      </form>
 </div>
   </body>
</html>