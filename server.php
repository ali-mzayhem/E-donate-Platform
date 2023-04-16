<?php

//Used to make the code send an Email!
require './class.phpmailer.php';

//If we got an order to run this code!
if ($_SERVER['REQUEST_METHOD'] == "POST") {    
    $username = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost', 'root','', 'userlogin');

    if (isset($_POST['Register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['Email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password2 = mysqli_real_escape_string($db, $_POST['password2']);

        if(empty($username)) {array_push($errors, "Username is required");}
        if(empty($email)) {array_push($errors, "Email is required");}
        if(empty($password)) {array_push($errors, "Password is required");}
        if($password2 != $password) {array_push($errors, "Passwords dont match");}
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['username'] === $username){
            array_push($errors, "Username is taken");
        }

        else if($user['email'] === $email){
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) === 0) {

        $password = md5($password2);

        $token = (INT) rand(0,200);
        $query = "INSERT INTO users (username, email, password) 
                VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);

        $query = "INSERT INTO verify (email, token) 
        VALUES('$email', '$token')";
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
    $outlook_mail->Username = 'mahmoud-hmra@outlook.com';
    $outlook_mail->Password = 'Mahmoudhmra0934628877@';
    
    $outlook_mail->From = 'mahmoud-hmra@outlook.com';
    $outlook_mail->FromName = 'Contact';// frome name
    $outlook_mail->AddAddress($email, 'To Name');  // Add a recipient  to name
    
    $outlook_mail->IsHTML(true); // Set email format to HTML
    
    $outlook_mail->Subject = 'Verification Email';
        $outlook_mail->Body = '
  
    Thanks for signing up!
    Your account has been created, you can login with your credentials after you have activated your account by pressing the url below.
    
    
    
    Please click this link to activate your account:
    http://localhost/project/verifing.php?id='.$email.'&token='.$token.'
      
    ';
    if(!$outlook_mail->send()) 
    {
    } 
    else { 
    }
      
        echo "<script>alert('Check your email to verify your account');
        window.open('https://mail.google.com');
        window.open('http://localhost/project/login.php', '_self');</script>";
    }
}  
  ?>