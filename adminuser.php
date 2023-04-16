<!DOCTYPE html>
<html>
<head>
<style>

#customers {
    font-family: 'Poppins', sans-serif;
      border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 15px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: left;
  background-color:  #3E8FA3;
  color: white;
}
#title{
    text-align: left;
    font-family: 'Poppins', sans-serif;
    font-size: 280%;
    color:  #3E8FA3;
}
.b1{
    background-color: #04AA6D;
  border: none;
  color: white;
  padding: 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 15px;
  border-radius: 50%;
}
.b1:hover{
    background-color: #026943; 
}
.b2{
    background-color: rgb(219, 5, 5);
  border: none;
  color: white;
  padding: 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 15px;
  border-radius: 50%;
}
.b2:hover{
    background-color:rgb(110, 7, 7);
}

nav{
    float: right;
    display: flex;
    padding: 2%,6%;
    justify-content: space-between;
    align-items: center;
  
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a
{
color: #3E8FA3;
text-decoration: none;
font-size: 17px;
} 
.nav-links ul li ::after{
    content: '';
    width: 0%;
    height: 3px;
    background:#B6E3EC;
    display: block;
    margin: auto;
    transition: 0.2;
}
.nav-links ul li :hover::after{
    width: 100%;
}
</style>

<nav>
  <div class="nav-links">
<ul>
  <li> <a href="adminapprove.php">Approve Requests</a></li>
  <li> <a href="">Ongoing Requests</a></li>
  <li> <a href="">History</a></li>
  <li> <a href="adminuser.php">Users</a></li>

</ul>
</div>
</nav>

</head>
<body>

<h1 id="title">Admin Panel</h1>

<table id="customers">
  <tr>
    <th>Username</th>
    <th>Email</th>  
  </tr>
  <?php
    $conn = mysqli_connect("localhost", "root", "", "userlogin");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT username, email FROM users WHERE id > 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["username"]. "</td><td>" . $row["email"] . "</td></tr>";
    }
    } else { echo "0 results"; }
?>
  
</table>

</body>
</html>

<!--#B6E3EC;-->