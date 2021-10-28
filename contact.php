<?php
session_start();

if(!isset($_SESSION['email'])){
header('location: login.php');
}

$email = $_SESSION['email'];
require_once('contact_form_connection.php');

$sql = "SELECT name, email, phoneNumber FROM usertable WHERE email = '$email'";



$result = mysqli_query($db_conn, $sql);
$num = mysqli_num_rows($result);

if($num){
  $row = mysqli_fetch_assoc($result);
  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>law-firm.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- local links  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- mycustom css -->
    <link rel="stylesheet" type="text/css" href="css/myCustomStyle.css">
    <!-- card carousel silk  -->
    <script src="js/slick.js"></script>
    <!-- animation scroll -->
    <link href="css/aos.css" rel="stylesheet">
    <script src="js/aos.js"></script>
    <style type="text/css">
      .dropdown:hover .dropdown-menu{
    display: block;
    }
    form{
    margin-left: 10%;
    }
    form button{
    border-radius: 0px!important;
    background: #009688de!important;
    color: white!important;
    max-width: 480px!important;
    }
    form button:hover{
    background: #ff9800cf!important;
    }
    form h6{
    color: white;
    }
    label{
    color: white!important;
    }
    .get_bg{
    background-image: url('images/contact/mikhail-pavstyuk-8436-unsplash.jpg');
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    padding:50px;
    }
    .banner{
    border-bottom: 2px solid #009688;
    }
    form input , select{
    background: transparent!important;
    border:none!important;
    border-bottom: 1px solid white!important;
    width: 83%;
    color: white;
    position: relative;
    padding: 0px 0px 5px 25px;
    }
    form select{
    /*  background-color: #7e797970!important;*/
    /*background: transparent!important;*/
    background: rgba(0,0,0,0.3)!important;
    color: white!important;
    text-shadow: 0 1px 0 rgba(0,0,0,0.4)!important;
    }
    form input {
    color: white;
    }
    form .fa , .fas{
    position: absolute;
    font-size: 20px;
    color: #e6e5e5;
    }
    form input::placeholder{
    margin-left: 20px;
    color: white;
    }
    .anim span{
    /* width: 10%!important;*/
    }
    /*.right-aligned-form-part{
    position: relative;
    }*/
    .right-aligned-form-part ul li input[type=checkbox] , input[type=radio]{
    width: 19px!important;
    height: 19px!important;
    position: relative;
    top: 3px;
    background: rgb(84, 84, 84)!important;
    }
    .right-aligned-form-part li{
    position: relative!important;
    }
    .right-aligned-form-part .client-detail  li label{
    position: absolute!important;
    font-size: 16px!important;
    }
    .client-detail li span{
    font-size: 16px;
    color: white;
    }
    .client-detail2 label{
    font-size: 16px!important;
    }
    .right-aligned-form-part h6{
    font-size: 21px;
    }
    .p2-outline{
    /* border: 3px solid #e91e63c2;*/
    border: 3px solid white;
    padding-left: 30px;
    padding-bottom: 20px;
    }
    .getBorder{
    border: 2px solid white;
    padding: 5px 0px;
    max-width: 350px;
    margin: 0 auto;
    }
    input[type=checkbox] , input[type=radio]:hover{
    cursor: pointer;
    }
    .welcomeText{
    max-width: 250px;
    color: white;
    border: 1px solid white;
    padding: 5px 10px;
    box-sizing: border-box;
    }
    .logout{
    border: 1px solid white;
    max-width: 200px;
    font-size: 22px;
    font-family: Rubic;
    padding: 3px 20px;
    display: block;
    text-align: center;
    }
    .logout:hover{
    background: #009688de;
    }
    
.alert{    width: 100%;
    border: none;
    border-radius: 0px!important;
    background: #4caf50bf!important;
    color: white!important;
    padding: 10px 0px;
  }
</style>
  </head>
  <body>
    <!-- header open -->
    <section class="top_head d-none d-md-block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-6">
            <div class="e_email">
              <ul>
                <!--  -->
                <li>Call Us:<a href="tel:+1234667879"> 123-456-789</a></li>
                <!--  -->
                <li>
                  Email Us:
                  <a href="mailto:info@example.com" target="_top"> magfoor03dec@gmail.com</a>
                </li>
                <!--  -->
              </ul>
            </div>
          </div>
          <!--  -->
          <div class="col-md-6 col-6">
            <span class="icon_socal">
              <ul>
                <li><i class="fab fa-google-plus-g"></i></li>
                <li><i class="fab fa-facebook-f"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-vimeo-v"></i></li>
              </ul>
            </span>
          </div>
        </div>
      </div>
    </section>
    <!-- header close -->
    <!-- header nav open -->
    <section class="banner" style="height: 280px;">
      <div class="row no-gutters abcd">
        <div class="col-md-12">
          <nav class="navbar navbar navbar-expand-lg  navbar-dark" id="banner">
            <div class="container">
              <!-- Brand -->
              <a class="navbar-brand" href="#"><h3>DigitalAdvisor</h3></a>
              <!-- Toggler/collapsibe Button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Navbar links -->
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="service.php" id="navbardrop">
                      Services <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="legal-service-consultation.php">LEGAL SERVICES AND CONSULTATION</a>
                      <a class="dropdown-item" href="business-and-finance-service.php">BUSINESS SERVICES AND FINANCIAL SERVICES</a>
                      <a class="dropdown-item" href="website-designing.php">WEBSITE DESIGNING</a>
                      <a class="dropdown-item" href="personal-doc.php">PERSONAL DOCUMENT ASSISTANCE
                      </a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        
        <!--  -->
        <!--  -->
      </div>
      
    </section>
    <!-- header nav close -->
    
    <section class="get_bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="welcomeText">Welcome <?php echo $_SESSION['name'] ?></h3>
          </div>
          <div class="col-md-4">
            <h3 class="text-center text-white getBorder">Make your oppointment here</h3>
          </div>
          <div class="col-md-4">
          </div>
        </div>
        
        <!----------------------form part 1 starts------------------------->
        <form action="contact_form_database.php" method="POST">
          <!-- container -->
          <div class="container">
            <!-- row -->
            <div class="row mb-5">
              <!-- col-md-6 -->
              <div class="col-md-6 p1-outline">
                <label class="mt-3">Full Name</label>
                <div class="form-text">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" name="fullName" value="<?php echo $_SESSION['name'] ?>">
                </div>
                <label class="mt-3">Email</label>
                <div class="form-text">
                  <i class="fas fa-envelope" aria-hidden="true"></i>
                  <input type="email" name="email" placeholder="Enter Email" value="<?php echo $_SESSION['email'] ?>">
                </div><br>
                <label class="">Phone</label>
                <div class="form-text">
                  <i class="fas fa-phone" aria-hidden="true"></i>
                  <input type="text" name="phone" placeholder="Enter Phone number">
                </div>
                <label class="mt-3">Location</label>
                <div class="form-text">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <input type="text" name="loc" placeholder="Enter location">
                </div>
                <!--  -->
                <div class="span1_of_1">
                  <!-- start_section_room -->
                  <label class="mt-3">Type of Case : </label>
                  <div class="section_room">
                    <i class="fa fa-gavel" aria-hidden="true"></i>
                    <select id="country" onchange="change_country(this.value)" class="frm-field required" name="type_of_case">
                      <option value="Legal Service and Consultation">Legal Service and Consultation</option>
                      <option value="Business Services">Business Services</option>
                      <option value="IT Legal Services">IT Legal Services</option>
                      <option value="Personal Document Assistance">Personal Document Assistance</option>
                    </select>
                  </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="span1_of_1">
                  <!-- start_section_room -->
                  <label class="mt-3">Consulting Person</label>
                  <div class="section_room">
                    <i class="fas fa-user-tie" aria-hidden="true"></i>
                    <select id="country" onchange="change_country(this.value)" class="frm-field required" name="consult_person">
                      <option value="Select Person" disabled=""></option>
                      <option value="Unsha Uzma">Unsha Uzma(Legal Services and Consunltation)</option>
                      <option value="Uroosa Uzma">Uroosa Uzma(Business and Financial Services)</option>
                      <option value="Shahnawaz Akhtar">Shahnawaz Akhtar(IT Legal Services)</option>
                      <option value="Magfoor Ahmad">Magfoor Ahmad(Legal Services and Consultation)</option>
                      <option value="Shubham Thakur">Shubham Thakur(Personal Document Assistance)</option>
                    </select>
                  </div>
                </div>
                <!-- /col-md-6 -->
              </div>
              <!-------------------------------form part 1 end---------------------------->
              <!------------------------------form part 2 starts--=============================-->
              <!-- col-md-6 -->
              <div class="col-md-6 p2-outline">
                <div class=" right-aligned-form-part">
                  <h6 class="mt-3">About Client</h6>
                  <ul class="client-detail list-unstyled">
                    <li>
                      <input type="radio" class="checkbox mr-2" name="about_client" value="New Client">
                      <label>New Client</label>
                    </li>
                    <li>
                      <input type="radio" class="checkbox mr-2" name="about_client" value="Existing Client">
                      <label>Existing Client</label>
                    </li>
                  </ul>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h6 class="mt-3">What Is The Best Way To Reach You</h6>
                    <ul class="client-detail2 list-unstyled">
                      <li>
                        <input type="radio" class="checkbox mr-2" name="reach_client" value="Phone">
                        <label>Phone</label>
                      </li>
                      <li>
                        <input type="radio" class="checkbox mr-2" name="reach_client" value="Email">
                        <label>E-mail</label>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class=" right-aligned-form-part">
                      <h6 class="mt-3">Days Available For Appointment</h6>
                      <ul class="client-detail list-unstyled">
                        <li>
                          <input type="checkbox" class="checkbox" name="appoint_day1[]" value="Monday">
                          <span>Monday</span>
                        </li>
                        <li>
                          <input type="checkbox" class="checkbox" name="appoint_day1[]" value="Tuesday">
                          <span>Tuesday</span>
                        </li>
                        <li>
                          <input type="checkbox" class="checkbox" name="appoint_day1[]" value="Wednesday">
                          <span>Wednesday</span>
                        </li>
                        <li>
                          <input type="checkbox" class="checkbox" name="appoint_day1[]" value="Thursday">
                          <span>Thursday</span>
                        </li>
                        <li>
                          <input type="checkbox" class="checkbox" name="appoint_day1[]" value="Friday">
                          <span>Friday</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class=" right-aligned-form-part">
                  <h6 class="mt-3">Time Of Day For Appointment</h6>
                  <ul class="client-detail list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox" name="day_time_appoint_1" value="Morning">
                      <span>Morning</span>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox" name="day_time_appoint_1" value="Afternoon">
                      <span>Afternoon</span>
                    </li>
                  </ul>
                </div>
                <!-- /col-md-6 -->
              </div>
              <!--------------------------form part 2 end----------------------------->
              <!-- /row -->
            </div>
            <!-- /container -->
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <button type="submit" name="submit" class="form-control">Submit</button><br><br>
              </div>
              <div class="col-md-6">
                <a href="logout.php" class="text-white text-decoration-none float-right logout">Log out</a>
              </div>
            </div>
            <?php if(isset($_GET['q'])): ?>
            <div class="row">
              <div class="col-md-12">
                  <div class="alert text-center" role="alert">
                         <?php echo $_GET['q']; ?>
                  </div>
              </div>
            </div>
             <?php endif; ?>
          </div>
        </form>
      </div>
    </section>
    <!--  -->
    <footer class="footer-bg">
      <div class="container pb-5">
        <div class="row">
          <!--  -->
          <div class="col-md-6  col-lg-3">
            <div class="a_abot pb-4">
              <h6>About Us</h6>
              <p>We’re on a mission to build a better future where justice creates good jobs for everyone.</p>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div class="col-md-6  col-lg-3">
            <!-- ######### -->
            <div class="a_abot pb-4">
              <h6>Important Links</h6>
              <!--  -->
              <div class="i_important">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="gallery.php">Careers</a></li>
                  <li><a href="contact.php">Home</a></li>
                </ul>
              </div>
              <!--  -->
            </div>
            <!-- ######### -->
          </div>
          <!--  -->
          <!--  -->
          <div class="col-md-6  col-lg-3">
            <!-- ######### -->
            <div class="a_abot pb-4">
              <h6>Featured Services</h6>
              <!--  -->
              <div class="i_important">
                <ul>
                  <li><a href="">Legal Services And Consultation</a></li>
                  <li><a href="">Business Services And Financial Services</a></li>
                  <li><a href="">Website Designing</a></li>
                  <li><a href="">RPersonal Document Assistance</a></li>
                </ul>
              </div>
              <!--  -->
            </div>
            <!-- ######### -->
          </div>
          <!--  -->
          <!--  -->
          <div class="col-md-6  col-lg-3">
            <!-- ######### -->
            <div class="a_abot pb-4">
              <h6>Contact Us</h6>
              <!--  -->
              <div class="i_important">
                <address>
                  Office <a href="mailto:wyz@example.com">Address</a>.<br>
                  Boys hostel 2, Maulana Azad National Urdu University, Gachibowli, Hyderabad - 500032<br>
                  Example.com<br>
                  <ul>
                    <li>phone : <a href="tel:123456789">123456789</a></li>
                    <li>Email : <a href="mailto: info@law.com"> info@example.com</a></li>
                  </ul>
                </address>
              </div>
              <!--  -->
            </div>
            <!-- ######### -->
          </div>
          <!--  -->
        </div>
      </div>
      <!--  -->
      <section class="border-top f_footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-7">
              <div class="copy_right">
                <a href=""> Copyright 2019 . All Rights Reserved.</a>
              </div>
            </div>
            <!--  -->
            <div class="col-md-6 col-5">
              <div class="icon_socal_footer">
                <ul>
                  <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                  <li><A href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-vimeo-v"></i></a></li>
                </ul>
              </div>
            </div>
            <!--  -->
          </div>
        </div>
      </section>
    </footer>
    <!-- AOS script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
  </body>
</html>