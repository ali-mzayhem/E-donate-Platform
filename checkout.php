<?php
require './class.phpmailer.php';

$money = 0;
$db = mysqli_connect('localhost', 'root','', 'userlogin');


if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    if(isset($_POST['donate'])) {
        $sql = "SELECT money, email, funds, name FROM medicial WHERE id='$id'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
        $money = $row["money"];

        $money += $_POST["amount"];
        if($money >= $row["funds"]){
            echo $row["email"];

            $query = "UPDATE medicial SET money = '$money' WHERE id='$id'";
            $results = mysqli_query($db, $query);

            $query = "UPDATE medicial SET approved = 2 WHERE id='$id'";
            $results = mysqli_query($db, $query);

            $outlook_mail = new PHPMailer;
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
    

            //FOR USER
            $outlook_mail->From = 'husseinmsheik1@outlook.com';
            $outlook_mail->FromName = 'Support Med';// frome name
            $outlook_mail->AddAddress($row["email"], 'To Name');  // Add a recipient  to name
    
            $outlook_mail->IsHTML(true); // Set email format to HTML
            
            $outlook_mail->Subject = 'Collect Money for'.$row["name"];
            $outlook_mail->Body = '
            The money has been collected, come pick them up when you can!
      
            ';

            if(!$outlook_mail->send()) 
            {
            } 
            else { 
                echo "<script>alert('Thanks for donating!');
                window.open('http://localhost/project/donate.php', '_self');</script>";
            }

            //FOR ADMIN
            $outlook_mail->From = 'husseinmsheik1@outlook.com';
            $outlook_mail->FromName = 'Support Med';// frome name
            $outlook_mail->AddAddress("husseinmsheik1@outlook.com", 'To Name');
    
            $outlook_mail->IsHTML(true); // Set email format to HTML
            
            $outlook_mail->Subject = 'Collect Money for'.$row["name"];
            $outlook_mail->Body = "

                Contact ".$row["name"]." to come get his money that are worth $".$money." as he wanted $".$row["funds"]."<br>
                His email is ".$row["email"]." to remind him!
      
            ";

            if(!$outlook_mail->send()) 
            {
            } 
            else { 
                echo "<script>alert('Thanks for donating!');
                window.open('http://localhost/project/donate.php', '_self');</script>";
            }
            
        }else{
            $query = "UPDATE medicial SET money = '$money' WHERE id='$id'";
            $results = mysqli_query($db, $query);
            //header('location: donate.php');
        }
        }
        }
    }
}



?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
            background-color: #B6E3EC;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 10px;
            margin-top: 50px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #3E8FA3;
            color: white;
            padding: 13px;
            margin: 10px 0px 0px 0px;
            border: none;
            width: 20%;
            border-radius: 14px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #B6E3EC;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }
    </style>
</head>

<body>



    <div class="row">
        <div class="col-75">
            <div class="container">
                <form method="POST">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address:</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment:</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <br>
                    <label for="amount">How much you want to pay?</label>
                    <input type="text" id="amount" name="amount" placeholder="$0">
                    <button class="btn" type="submit" name="donate">Checkout </button>
                    <!--   <input onclick="move()" type="submit" value="Checkout" class="btn">-->
                </form>
            </div>
        </div>

    </div>
    </div>

</body>

</html>