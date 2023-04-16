<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/889f4678af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/889f4678af.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">


    <meta charset="utf-8">
    <title>Main Page</title>
</head>

<body>

    <section class="header4">
        <nav>
            <div class="nav-links">
                <ul>
                    <li> <a href="main.php">HOME</a></li>
                    <li> <a href="donate.php">Donate</a></li>
                    <li> <a href="request.php">Request</a></li>
                    <li> <a href="contact.php">Contact Us</a></li>
                    <li> <a href="login.php">Login | Register</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>Make The World<br>A Better Place!</h1><br>
        </div>
    </section>

    <section>
        <div class="main-container">
            <h2>Donations</h2>

            <div class="filter-container">
                <div class="category-head">
                    <ul>
                        <div class="category-title active" id="all">
                            <li>Show All</li>

                        </div>
                        <div class="category-title" id="Hospital Entrance">
                            <li>Hospital Entrance</li>

                        </div>
                        <div class="category-title" id="Medicine">
                            <li>Medicine</li>

                        </div>
                        <div class="category-title" id="Surgery">
                            <li>Surgery</li>

                        </div>
                        <div class="category-title" id="Equipment">
                            <li>Equipment</li>

                        </div>

                    </ul>
                </div>
                <div class="posts-collect">
                    <div class="posts-main-container">

                        <?php 
                    $conn = mysqli_connect("localhost", "root", "", "userlogin");
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    $cat = "";
                    $sql = "SELECT id, name, mom, birth, funds, location, category, description, approved, money FROM medicial WHERE approved=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    switch ($row["category"]){
                        case 0: $cat = "Hospital Entrance";
                        break;
                        case 1: $cat = "Medicine";
                        break;
                        case 2: $cat = "Surgery";
                        break;
                        default: $cat = "Equipment";
                    }
                    echo "<div class='all ".$cat."'>
                            <div class='post-img'>
                            </div>
                            <div class='post-content'>
                                <div class='row'>
                                    <div class='column22'>
                                        <p>
                                            <b>Patient's Name: </b>".$row["name"]."<br>
                                            <b>Condition: </b>".$cat."<br>
                                            <b>Location: </b>".$row["location"]."<br>
                                            <b>Target: </b>".$row["funds"]."<br>
                                            <b>Description: </b>".$row["description"]."<br>
                                            <b>Raised: </b> <br>
                                        </p>
                                    </div>
                                    <div class='column3'>
                                        <div class='profileicon'>
                                            <i class='fa-solid fa-user fa-6x'></i>
                                        </div>
                                    </div>
                                </div>
                                <progress id='progressbar' class='progress is-large is-info' max='".$row["funds"]."'
                                    value='".$row["money"]."'></progress>
                                </br>

                                <div class='row'>
                                    <div class='column3'>
                                    </div>
                                    <div class='column3'>
                                        <button type='button' class='read-btn' name='donate' onclick='donate(".$row["id"].")')>Donate</button>
                                    </div>
                                </div>
                            </div>
                        </div>";
                            }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS file -->
        <script src="script.js"></script>
        <script>
            function donate(user){
                window.open("http://localhost/project/checkout.php?id=" + user);
            }
        </script>
    </section>

    <div class="section-title">
  <h2>Get In Touch</h2>
</div>
<div class="footer pt-5">
  <div class="container">
    <div class="row">
      <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
        <div class="footer_section">
          <h4>Links</h4>
          <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="request.php">Request</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            
          </ul>

          
        </div>
      </div>

      <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
        <div class="footer_section">
          <h4>About Support Med</h4>
          <ul>
            <li><a href="about.php">Our Story</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="contact.php">Contact Us</a></li>

          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-12 col-lg-3 mb-5">
        <div class="row">
          <div
            class="col-sm-12 col-md-6 col-lg-12 footer_section footer_section_contact"
          >
            <h4>Volunteer Now</h4>
            <div class="search">
              <form action="#" class="subscribe">
                <input
                  type="email"
                  class="contact_input"
                  placeholder="E-mail address"
                />
                <button type="submit" class="submit_button">
                  <i class="fa fa-paper-plane"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-12 social_media">
            <h4>Follow Up</h4>
            <ul>
              <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-whatsapp"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--<div class="container footer-bottom clearfix">-->
  <div class="copyright">
    &copy; Copyrights <strong><span>Support Med</span></strong>. All Rights Reserved, Made by Hussain Msheik & Hussain Attris
  </div>


</body>

</html>