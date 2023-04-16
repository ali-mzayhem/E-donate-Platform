<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){

    if(isset($_GET['id']) && isset($_GET['cat'])) {
        $id = $_GET['id'];
        $cat = $_GET['cat'];
    }

    $db = mysqli_connect('localhost', 'root','', 'userlogin');

    $query = "SELECT * FROM medicial WHERE id='$id'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $query = "DELETE FROM medicial WHERE id = '$id'";
        $results = mysqli_query($db, $query);
        if ($cat != "all") { header("location: adminapprove.php?cat=".$cat); }
        else {header("location: adminapprove.php");}
    }
}
?>