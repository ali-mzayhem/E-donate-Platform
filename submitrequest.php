<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {    
    $db = mysqli_connect('localhost', 'root','', 'userlogin');

    if (isset($_POST['submit'])){
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $mom = mysqli_real_escape_string($db, $_POST['mom']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $birth = mysqli_real_escape_string($db, $_POST['birth']);
        $description = mysqli_real_escape_string($db, $_POST['description']);
        $funds = mysqli_real_escape_string($db, $_POST['funds']);
        $category = mysqli_real_escape_string($db, $_POST['category']);
        $location = mysqli_real_escape_string($db, $_POST['location']);
        $query = "INSERT INTO medicial (name , mom, birth, description, funds, category, location, email)
        VALUES ('$name', '$mom','$birth', '$description', '$funds', '$category', '$location', '$email')";

        if(mysqli_query($db, $query)){
            move_uploaded_file($_FILES['file']['tmp_name'], "MedicalRecords/$file");
            header('location: main.php');
        }else{
            echo "<script>alert('file is not in the folder')</script>";
        }
    }
}

?>