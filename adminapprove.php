<html>


 <head>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <?php
    $cat="";
    $app="";
    if($_SERVER['REQUEST_METHOD'] == "GET"){

      if(isset($_GET['cat'])) {
          $cat = $_GET['cat'];
      }

      if(isset($_GET['app'])) {
        $app = $_GET['app'];
    }
    }

    ?>
 </head>

<style>
    ::selection {
  background: #05bc55;
  color: #fff;
}
* {
  margin: 0;
  padding: 0;
}
body {
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 1.6;
  color: #1a1a1a;
}

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

main {
  margin: 50px 0 0 220px;
  padding: 20px;
}
main p {
  color: #6c757d;
}
main h1 {
  font-size: 60px;
}
a {
  text-decoration: none;
  color: inherit;
}
li {
  list-style-type: none;
}
.sideBar {
  z-index: 1000;
  background: #fff;
  position: fixed;
  top: 40px;
  left: 40px;
  padding: 40px 30px;
  box-shadow: 0 10px 20px #00000030;
  border-radius: 10px;

  height: 100vh;
  width: 60px;

  display: flex;
  flex-direction: column;

  transition: width 0.2s ease;
}
.sideBar.dark {
  background: #141414;
  color: #eee;
}
body.dark {
  background: #222;
  color: #eee;
}
.sideBar.dark * .link-icon {
  color: #ccc;
}
.profile {
  color: #222;
  font-size: 40px;
  margin-bottom: 30px;
  background: #eee;
  width: 60px;
  height: 60px;
  border-radius: 10px;

  display: flex;
  justify-content: center;
  align-items: center;
}

.navLinks {
  width: 100%;
}
.navLinks li {
  border-radius: 15px;
}
.navLinks li a {
  padding: 15px;
}

.navLinks:last-child {
  margin-top: auto;
  margin-bottom: 100px;
}

.link {
  display: flex;
  height: 30px;
}

.link-text {
    margin:auto;
  color: #6c757d;
  font-weight: 500;
  font-size: 18px;
  transform: scaleX(0);
  transform-origin: left;
  transition: all 0.2s ease;
}

.link-icon {
  color: #222;
  flex-basis: 30px;
  font-size: 28px;
  margin-right: 15px;
}

.text-muted {
  color: #ccc;
  font-size: 15px;
  padding: 20px 0;
}

.navLinks li:hover {
  background: #eee;
}

.navLinks li:hover .link > * {
  color: #3E8FA3;
}

.sideBar:hover .link-text {
  transform: scaleX(1);
}

.sideBar:hover {
  width: 200px;
  align-items: flex-start;
}

figure img {
  width: 100%;
}
figure {
  text-align: center;
}
.like-color {
  color: #3E8FA3;
}
.like-anim {
  animation: like 0.6s;
}

.navLinks li:hover .link-like > * {
  color: #3E8FA3;
}

@keyframes like {
  50% {
    transform: scale(2) rotate(-45deg);
  }
}

</style>

<nav class="sideBar">
    <div class="profile">
      <i class="fa-solid fa-user"></i>
    </div>
    <p class="text-muted">Categories</p>
    <ul class="navLinks">
      <li>
            <a href="http://localhost/project/adminapprove.php" class="link link-like">
                <i class="fa-solid fa-border-all fa-2x"></i>
              <span class="link-text">All Cases</span>
            </a>
      </li>
      <li>
        <a href="http://localhost/project/adminapprove.php?cat=0" class="link">
          <i class="fa-sharp fa-solid fa-hospital fa-2x"></i>
          <span class="link-text">Entrance</span>
        </a>       
      </li>
      <li>
        <a href="http://localhost/project/adminapprove.php?cat=1" class="link">
          <i class="fa-sharp fa-solid fa-pills fa-2x"></i>
          <span class="link-text">Medicine</span>
        </a>       
      </li>
      <li>
        <a href="http://localhost/project/adminapprove.php?cat=2" class="link">
          <i class="fa-sharp fa-solid fa-stethoscope fa-2x"></i>
          <span class="link-text">Surgery</span>
        </a>       
      </li>
      <li>
        <a href="http://localhost/project/adminapprove.php?cat=3" class="link">
          <i class="fa-solid fa-microscope fa-2x"></i>
          <span class="link-text">Equipment</span>
        </a>       
      </li>
      <li>
        <a href="http://localhost/project/adminapprove.php?app=0" class="link">
          <i class="fa-solid fa-clipboard link-icon fa-2x"></i>
          <span class="link-text">History</span>
        </a>       
      </li>
      
    </ul>
    <ul class="navLinks">
      <li>
        <a href="#" class="link" data-theme>
            <i class="fa-solid fa-handshake-angle fa-2x "></i>
          <span class="link-text">Volunteers</span>
        </a>
      </li>
      <li>
        <a href="#" class="link">
          <i class="fa-solid fa-gear link-icon"></i>
          <span class="link-text">Settings</span>
        </a>
      </li>
      <li>
        <a href="http://localhost/project/profile.php" class="link" data-theme>
            <i class="fa-sharp fa-solid fa-arrow-right-from-bracket fa-2x "></i>
          <span class="link-text">Log Out</span>
        </a>
      </li>
    </ul>
  </nav>
  
  <main>
    <h2><?php 
    if ($cat == 0) echo "Category: Hospital Entrance";
    else if ($cat == 1) echo "Category: Medicine";
    else if ($cat == 2) echo "Category: Surgery";
    else if ($cat == 3) echo "Category: Equipment";
    else echo "Showing All";
    ?></h2>
    <table id="customers">
        <tr>
          <th>Patient's Full Name</th>
          <th>Mother's Name</th>
          <th>Date of Birth</th>
          <th>Funds Needed</th>
          <th>Funds Collected</th>
          <th>Location</th>
          <th>Description</th>
          <th>Status</th>
          <th>Action</th>
          
        </tr>
        <?php
          $conn = mysqli_connect("localhost", "root", "", "userlogin");
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          if($cat != NULL){
          $sql = "SELECT id, name, mom, birth, funds, location, category, description, approved, money FROM medicial WHERE category='$cat' AND approved != 2";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          if($row["approved"] == 0){
            echo "<tr><td>" . $row["name"]. "</td><td>" . $row["mom"] . "</td><td>"
            . $row["birth"] . "</td><td>"
            . $row["funds"] . "</td><td>"
            . $row["money"] . "</td><td>"
            . $row["location"] . "</td><td>"
            . $row["description"] . "</td><td>Pending</td><td><button class='b1' onclick='approve_id(".$row["id"].")'></button> <button class='b2' onclick='deny_id(".$row["id"].")'></button></td></tr>";
          }else{
            echo "<tr><td>" . $row["name"]. "</td><td>" . $row["mom"] . "</td><td>"
          . $row["birth"] . "</td><td>"
          . $row["funds"] . "</td><td>"
          . $row["money"] . "</td><td>"
          . $row["location"] . "</td><td>"
          . $row["description"] . "</td><td>Ongoing</td><td><button class='b2' onclick='deny_id(".$row["id"].")'></button></td></tr>";
          }
          }
          } else { echo "0 results"; }
          } else{
            if($app == NULL){
          $sql = "SELECT id, name, mom, birth, funds, location, category, description,approved, money FROM medicial WHERE approved = 1 OR approved = 0";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if($row["approved"] == 0){
              echo "<tr><td>" . $row["name"]. "</td><td>" . $row["mom"] . "</td><td>"
              . $row["birth"] . "</td><td>"
              . $row["funds"] . "</td><td>"
              . $row["money"] . "</td><td>"
              . $row["location"] . "</td><td>"
              . $row["description"] . "</td><td>Pending</td><td><button class='b1' onclick='approve_id(".$row["id"].")'></button> <button class='b2' onclick='deny_id(".$row["id"].")'></button></td></tr>";
            }else{
              echo "<tr><td>" . $row["name"]. "</td><td>" . $row["mom"] . "</td><td>"
            . $row["birth"] . "</td><td>"
            . $row["funds"] . "</td><td>"
            . $row["money"] . "</td><td>"
            . $row["location"] . "</td><td>"
            . $row["description"] . "</td><td>Ongoing</td><td><button class='b2' onclick='deny_id(".$row["id"].")'></button></td></tr>";
            }
          }

          } else { echo "0 results"; }
        }else{
          $sql = "SELECT id, name, mom, birth, funds, location, category, description,approved,money FROM medicial WHERE approved = 2 OR approved = 3";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if($row["approved"] == 2){
              echo "<tr><td>" . $row["name"]. "</td><td>" . $row["mom"] . "</td><td>"
              . $row["birth"] . "</td><td>"
              . $row["funds"] . "</td><td>"
              . $row["money"] . "</td><td>"
              . $row["location"] . "</td><td>"
              . $row["description"] . "</td><td>Ready to Collect</td><td><button class='b1' onclick='collect_id(".$row["id"].")'></td></tr>";
            }else{
              echo "<tr><td>" . $row["name"]. "</td><td>" . $row["mom"] . "</td><td>"
            . $row["birth"] . "</td><td>"
            . $row["funds"] . "</td><td>"
            . $row["money"] . "</td><td>"
            . $row["location"] . "</td><td>"
            . $row["description"] . "</td><td>Collected</td><td>No Action</td></tr>";
            }
          }

          } else { echo "0 results"; }
        }
      }

        ?>
      </table>
      
      <script>
        function approve_id(user){
          window.open("http://localhost/project/approverequest.php?id=" + user + "&cat=" + "" + <?php if($cat != NULL) echo $cat; else echo "'all'"; ?>, "_self");
        }
        function deny_id(user){
          window.open("http://localhost/project/denyrequest.php?id=" + user + "&cat=" + "" + <?php if($cat != NULL) echo $cat; else echo "'all'"; ?>, "_self");
        }
        function collect_id(user){
          window.open("http://localhost/project/collectrequest.php?id=" + user + "&cat=" + "" + <?php if($cat != NULL) echo $cat; else echo "'all'"; ?>, "_self");
        }
      </script>


  </main>
  </html>

<!--#B6E3EC;-->