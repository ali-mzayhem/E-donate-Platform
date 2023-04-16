<?php 

if($_SERVER['REQUEST_METHOD'] == "GET"){

    if(isset($_GET['id']) && isset($_GET['token'])) {
        $id = $_GET['id'];
        $token = $_GET['token'];
    }

    $db = mysqli_connect('localhost', 'root','', 'userlogin');

    $query = "SELECT * FROM verify WHERE email='$id' AND token='$token'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $query = "UPDATE users SET verfied = 1 WHERE email='$id'";
            $results = mysqli_query($db, $query);

            $query = "DELETE FROM verify WHERE email = '$id'";
            $results = mysqli_query($db, $query);

            header('location: login.php');
        }

}

?>

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
    <li> <a href="contact.php">Contact Us</a></li>
    <li> <a href="register.php">Login | Register</a></li>
  </ul>
  </div>
  </nav>

    </head>
    <body>
       This link is expired!
    </body>
</html>