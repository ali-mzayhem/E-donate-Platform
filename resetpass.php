<?php 
 $db = mysqli_connect('localhost', 'root','', 'userlogin');

$email = '';

if($_SERVER['REQUEST_METHOD'] == "GET"){

    if(isset($_GET['email'])) {
        $email = $_GET['email'];
    }
}

if ( $_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['Reset'])) {

    $password = mysqli_real_escape_string($db, $_POST['newpass']);
    $password1 = mysqli_real_escape_string($db, $_POST['newpass2']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    if($password != $password1){
        die("Password 1 = $password & Password 2 = $password1");
    }
    $password = md5($password1);
    $query = "UPDATE users SET password='$password'  WHERE email='$email'";
    $results = mysqli_query($db, $query);

    session_start();
    $_SESSION['id'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: main.php');
    }
?>