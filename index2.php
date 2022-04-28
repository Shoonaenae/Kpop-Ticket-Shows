<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>shree</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a> </li>
                      <li> <a href=#carousel-caption>My Module</a> </li>
                      <li> <a href="#about">Enroll</a> </li>
                      <li> <a href="#vegetable">Update Modules</a> </li>
                     
                      <li><?php echo $_SESSION['login']; ?></li>
                     
                     
                     <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Welcome To LLC Learning Center</span>
                      <h1>Enroll Modules</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Modules" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Modules</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To LLC Learning Center</span>
                      <h1>Enroll Module</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Module" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Module</a>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Welcome To Shree</span>
                      <h1>Vegetables Shop</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                       <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>

<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>ENROLL</h2>
          <form method="POST">
          <h4>Modules :</h4>
            <select class="selectpicker" name="moduleOption" style="opacity:0" required>
            <options selected="selected" value="">Select an option</options>
            <?php
                $con =mysqli_connect("localhost","root","","trainingcenter");
                if($con){
                    $queryGet = "SELECT * from module";
                    $result = mysqli_query($con,$queryGet);
                    while($row = mysqli_fetch_assoc($result)){
                        echo"<option value='$row[ModuleId]' >".$row['ModuleName']."</option>
                        ";
                    }
                } else {
                    die("Error"); 
                }
            ?>
            </select>
            <br><br><br>
            <button type="submit" name="btnEnroll" class="btn btn-success" >Enroll</button>
            </form>


         
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="images/about.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->

<!-- vegetable -->
<div id="vegetable" class="vegetable">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div  class="titlepage">
          <h2> M<strong class="llow">odules</strong> </h2>
        </div>
        <div>
          <div class="vegetable_shop">
          <?php
             $con =mysqli_connect("localhost","root","","trainingcenter");
             $query="Select * from module";
             $result=mysqli_query($con,$query);

             echo "<table class='row'>";
                    
             while ($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td><h3>".$row['ModuleName']."</h3></td>
                </tr>";
              } 
              echo "</table>";
          ?>
        </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- end vegetable -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="#" class="logo_footer"> <img src="images/logo2.png" alt="#"/></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>It is a long established fact 
                        <br>that a reader will be  </li>
                        <li>
                          <a href="#"></a>(+71 1234567890) </li>
                          <li>
                            <a href="#"></a>demo@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     
                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Newsletter</h3>
                           <form class="news">
                           <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                            <button class="submit">Subscribe</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>

<?php
  $con =mysqli_connect("localhost","root","","trainingcenter");
  $err="";
  if($con){
    if(isset($_POST['btnSubmit'])){
      $uname=$_POST['username'];
      $pwd=$_POST['password'];
      $query="select * from trainee where username='$uname' and password='$pwd'";
      $result = mysqli_query($con,$query);
      $count = mysqli_num_rows($result);
      if($count ==0)
        echo "<script language='javascript'> alert('Incorrect username or password');</script>";
      else{
        $row=mysqli_fetch_assoc($result);
        $_SESSION['login']=$row['username'];
      }
    }

    if(isset($_POST['btnEnroll'])){
        $option = $_POST['moduleOption'];
        $queryCheckSched = "Select * from schedule where ModuleID = $option";
        $result = mysqli_query($con,$queryCheckSched);
        $countSched = mysqli_num_rows($result);
        if($countSched!=0){
          $row = mysqli_fetch_row($result);
          $schedule = $row[0];
          $un =  $_SESSION['login'];
          $queryAttendSched = "SELECT * from attend WHERE Username='$un' AND ScheduleID=$schedule";
          $resultAttend = mysqli_query($con,$queryAttendSched);
          $countRows = mysqli_num_rows($resultAttend);
          if($countRows==0){
            $queryEnroll = "INSERT INTO attend(`Username`, ScheduleId, Status) VALUES ('$un',$schedule,0)";
            $resultEnroll = mysqli_query($con,$queryEnroll);
            echo "<script language='javascript'> alert('Successfully enrolled to this module');</script>";
          } else {
            echo "<script language='javascript'> alert('You are currently enrolled in this module');</script>";
          }
        } else {
            echo "<script language='javascript'> alert('No schedule for this module');</script>";
        }
    }

  }
?>