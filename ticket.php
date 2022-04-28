<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Kpop Concerts 2021</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!-- font awesome 4 cdn--> 

        <!--Do CSS here-->
        <style>
          .container
          {
              background-color: whitesmoke;
              box-shadow: 1px 1px 2px 1px grey;
              padding: 50px 8px 20px 38px;
              width: 30%;
              height: 50%;
              margin-left: 35%;
              margin-top: 5%;
          }

          .txt
          {
            width: 90%;
            height: 5%;
            border: 1px solid brown;
            border-radius: 05px;
            padding: 20px 15px 20px 15px;
            margin: 10px 0px 15px 0px;
          }

          select 
          {
            width: 90%;
            border: 1px solid brown;
            border-radius: 05px;
            box-shadow: 1px 1px 2px 1px grey;
            padding: 10px 15px 10px 15px;
          }
        </style>
        <!--End CSS -->
    </head>

    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img class="logo" src="Images/logo.png" ></a>
                    <div class="nav-links" id="navLinks">
                        <i class="fa fa-times-circle" onclick="hideMenu()"></i> <!-- exit icon-->
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="idols.php">IDOLS</a></li>
                            <li><a href="show.php">SHOWS</a></li>
                            <li><a href="ticket.php">TICKET</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </div>
                <i class="fa fa-minus-circle" onclick="showMenu()"></i> <!-- menu icon -->
            </nav>

            <div class="text-box">
                <h1>MUSIC FOR MILLIONS</h1>
                <p>Bop to Korean Pop with other fans and get to see your favourite <br>Korean artists perform on live stage.</p>
            </div>
        </section>

        <!--Start Tickets-->
        <div class="container">
          <form action="" method="POST">
            <label>Username: </label><br>
            <input type="text" class="txt" name="ticketID" placeholder="Enter username"/><br><br>
            <label>First Name: </label><br>
            <input type="text" class="txt" name="firstname" placeholder="Enter your first name"/><br><br>

            <label>Last Name: </label><br>
            <input type="text" class="txt" name="lastname" placeholder="Enter your last name"/><br><br>

            <label>Location of Show: </label>
            <select name="location">
            <?php
                $con =mysqli_connect("localhost","root","","kpopshowtickets");
                if($con){
                    $queryGet = "SELECT * from location";
                    $result = mysqli_query($con,$queryGet);
                    while($row = mysqli_fetch_assoc($result)){
                        echo"<option value='$row[Location_ID]' >".$row['Name of Venue']."</option>
                        ";
                    }
                } else {
                    die("Error"); 
                }
            ?>
            </select><br>

            <input type="submit" class="txt" name="insert" value="Book Ticket"/>
          </form>
        </div>
        <!--End Tickets-->

        <!-- Shows -->
        <section class="shows">
            <h1>Upcoming Shows</h1>
            <p>Schedules</p>

            <div class="row">
                <div class="show-col">
                    <h3 class="date">June 9, 2021</h3>
                    <img src="Images/Staples Center.jpg" class="images">
                    <a href="" class="book-btn">
                        Book Now <!--To Final Ticket Page-->
                    </a>
                </div>

                <div class="show-col">
                    <h3 class="date">June 16, 2021</h3>
                    <img src="Images/Jeju.jpg" class="images">
                    <a href="" class="book-btn">
                        Book Now <!--To Final Ticket Page-->
                    </a>
                </div>

                <div class="show-col">
                    <h3 class="date">June 23,2021</h3>
                    <img src="Images/Saitama.jpg" class="images">
                    <a href="" class="book-btn">
                        Book Now    <!--To Final Ticket Page-->
                    </a>
                </div>
            </div>

            <!--<a href="" class="shows-btn">See More</a>--> 
        </section>
        <!-- End Shows -->

        <!-- Start Idols -->
        <section id="idols" class="idols">
            <h1>Idols</h1>
            <p>Temp</p>

            <div class="row">
                <div class="idols-col">
                    <img src="Images/ATEEZ.jpg">
                    <div class="layer">
                        <h3 class="names">ATEEZ</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/Brave Girls.jpg">
                    <div class="layer">
                        <h3 class="names">Brave Girls</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/Red Velvet.jpg">
                    <div class="layer">
                        <h3 class="names">Red Velvet</h3>
                    </div>
                </div>
            </div>  
            
            <a href="idols.html" class="idols-btn">See More</a>
        </section>
        <!--End Start Idols -->

        <!-- Contact -->
        <section class="contact">
            <h1>CONTACT US</h1>
            <a href="contact.html" class="contact-btn">CONTACT US</a>
        </section>

        <!-- Footer -->
        <section class="footer">
            <h4>About Us</h4>
            <p>Temp</p>

            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>

            <p>Made by KCS</p>
        </section>

        <!-- JavaScript Toggle Menu -->
        <script>
            var navLinks = document.getElementById("navLinks");

            function showMenu()
            {
                navLinks.style.right = "0";
            }

            function hideMenu()
            {
                navLinks.style.right = "-200px";
            }
        </script>
    </body>
</html>

<?php
  $server_name = "localhost";
  $username = "root";
  $password = "";
  $databse_name = "kpopshowtickets";

  $conn = mysqli_connect($server_name, $username, $password, $databse_name);

  if(isset($_POST['insert']))
  {
  	$ticketID = $_POST['ticketID'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $location = $_POST['location'];

    $query1 = "select * from location where name of venue = '$location'";
    $result = mysqli_query($con,$query1);
    
    $queryTickets = "INSERT INTO tickets(ticketID, firstname, lastname, location) VALUES ('$ticketID', '$fname', '$lname', '$location')";

    $resultTickets = mysqli_query($con,$queryTickets);
$count = mysqli_num_rows($result);
      if($count ==0)

    
        echo "<script language='javascript'> alert('Ticket Reserved!');</script>";
      else{
        echo "<script language='javascript'> alert('ERROR: Ticket not Reserved!');</script>";
      }
 



      /*$query = "INSERT INTO 'tickets'('ticketID', 'Idol_ID', 'Show_ID', 'Location_ID', 'FirstName', 'LastName') VALUES('$ticketID', '1', '1', '1', '$fname', '$lname')" ;
      $query_run = mysqli_query($con, $query);

      if($query_run)
      {
        echo '<script type="text/javascript">alert("Success")</script>';
      }
      else
      echo '<script type="text/javascript">alert("Invalid")</script>';*/
    
    
  }


  /*$dv
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

  }*/
?>