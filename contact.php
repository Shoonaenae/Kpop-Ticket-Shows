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
                <a href="about.html"><img class="logo" src="Images/logo.png"></a>
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

            <h1>CONTACT US</h1>
        </section>
        <!--End Header-->

        <!--Start Location-->
        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15703.033911116878!2d123.86110138368083!3d10.281034145779136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99c6cc38fde75%3A0xaf008cf87a33975d!2sBasak%20Pardo%2C%20Antuwanga%2C%20Cebu%20City%2C%20Cebu!5e0!3m2!1sen!2sph!4v1621679807433!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!--End Location-->

        <!--Start Contact-->
        <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Antuwanga Cebu City, Cebu</h5>
                            <p>544-Sto. Niño Community Kinasang-an Pardo Cebu City</p>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+639 273-055-666</h5>
                            <p>Monday to Friday, 9AM to 9PM</p>
                        </span>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <span>
                            <h5>engbinop@gmail.com</h5>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>

                <div class="contact-col">
                    <form action="form-handler.php" method="POST">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <input type="text" name="subject" placeholder="Subject" required>
                        
                        <textarea rows="8" name="message" placeholder="Message" required></textarea>

                        <button type="submit" class="book-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
        <!--End Contact-->

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