<?php
if ( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Login'])) {
    $db = mysqli_connect('localhost', 'root','', 'userlogin');
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $errors = [];
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND verfied = 1 OR email='$username'  AND password='$password' AND verfied = 1";
        echo $query;
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            if($username == "admin") header('location: adminapprove.php');
            else header('location: main.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>