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

        <!-- Shows -->
        <section class="shows">
            <h1>Upcoming Shows</h1>
            <p>Schedules</p>

            <div class="row">
                <div class="show-col">
                    <h3 class="date">June 9, 2021</h3>
                    <img src="Images/Staples Center.jpg" class="images">
                    <a href="ticket.php" class="book-btn">
                        Book Now <!--To Final Ticket Page-->
                    </a>
                </div>

                <div class="show-col">
                    <h3 class="date">June 16, 2021</h3>
                    <img src="Images/Jeju.jpg" class="images">
                    <a href="ticket.php" class="book-btn">
                        Book Now <!--To Final Ticket Page-->
                    </a>
                </div>

                <div class="show-col">
                    <h3 class="date">June 23,2021</h3>
                    <img src="Images/Saitama.jpg" class="images">
                    <a href="ticket.php" class="book-btn">
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
            
            <a href="idols.php" class="idols-btn">See More</a>
        </section>
        <!--End Start Idols -->

        <!-- Contact -->
        <section class="contact">
            <h1>CONTACT US</h1>
            <a href="contact.php" class="contact-btn">CONTACT US</a>
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