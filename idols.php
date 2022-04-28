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
        <!--Start Header-->
        <section class="sub-header">
            <nav>
                <a href="shows.html"><img class="logo" src="Images/logo.png"></a>
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

            <h1>IDOLS</h1>
        </section>
        <!--End Header-->

        <!-- Start Idols -->
        <section class="idols">
            <h1>Temp</h1>

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

            <div class="row">
                <div class="idols-col">
                    <img src="Images/IU.jpg">
                    <div class="layer">
                        <h3 class="names">IU</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/LOONA.jpg">
                    <div class="layer">
                        <h3 class="names">LOONA</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/NCT Dream.jpg">
                    <div class="layer">
                        <h3 class="names">NCT Dream</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="idols-col">
                    <img src="Images/Seventeen.jpg">
                    <div class="layer">
                        <h3 class="names">Seventeen</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/Stay C.jpg">
                    <div class="layer">
                        <h3 class="names">Stay C</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/The Boyz.jpg">
                    <div class="layer">
                        <h3 class="names">The Boyz</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="idols-col">
                    <img src="Images/Treasure.jpg">
                    <div class="layer">
                        <h3 class="names">Treasure</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/Twice.jpg">
                    <div class="layer">
                        <h3 class="names">Twice</h3>
                    </div>
                </div>

                <div class="idols-col">
                    <img src="Images/Weeekly.jpg">
                    <div class="layer">
                        <h3 class="names">Weekly</h3>
                    </div>
                </div>
            </div>
        </section>
        <!--End Start Idols -->

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