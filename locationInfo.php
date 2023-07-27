<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="all"/>
        <!--Adobe Fonts-->
        <link rel="stylesheet" href="https://use.typekit.net/uuu4lfb.css">
        <!--FontAwesome Link-->
        <script src="https://kit.fontawesome.com/864d9add69.js" crossorigin="anonymous"></script>
        <title>TravelPrep</title>
    </head>

    <header>
        
        <div class="topnav">
            <a href="javascript:void(0)" class="hamburger"><i class="fa fa-bars"></i></a>
            <div class="hamburger-menu">
                <a href="main.php">HOME</a>
                <a href="packingList.php">PACKING LIST</a>
                <a href="locationInfo.php">LOCATIONS</a>
                <a href="addLinks.php">ADDITIONAL INFO</a>
                <a href="logout.php">LOGOUT</a>
            </div>

        </div>

        <!--LOGO goes here-->
        <div id="journal_header_container">
            <a href="main.php"><img src="images/logo_darkB.png" alt="travelPrep Logo" class="main_logo"></a>

        <!--Header nav bar after logged in-->
            <nav>
                <ul id="main-menu">
                    <li><a href="main.php">HOME</a></li>
                    <li><a  href="packingList.php">PACKING LIST</a></li>
                    <li><a href="locationInfo.php">LOCATIONS</a></li>
                    <li><a href="addLinks.php">ADDITIONAL INFO</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <body class="journal_container">
       <div>
        
            <!--This is where the content goes-->

            <div>
                <h1>Location Information</h1>
            </div>
            
            <section id="locationInfo">
                <!--API location info search form-->
                <form>
                    <input name="search" id="locationInfo-search" type="text" placeholder="SEARCH FOR LOCATION"/>
                    <button type="submit">SEARCH</button>
                </form>

                <!--API location info shows up here-->
                <div id="locationInfo-display"></div>
            </section>  

            <section id="right_currencyInfo"><!--API currency info shows up here-->
                <h4>CURRENCY</h4>
                <div id="currencyInfo-display">
                    <h5 id="currencyInfo-title"></h5>
                </div>
            </section> 

        </div> <!--Closing tag for #container-->

        <footer id="footer">
             <!--Footer nav bar after logged in-->

            <a  href="main.php">HOME</a>
                <div class="large_footer_nav">
                    <a  href="packingList.php">PACKING LIST</a>
                    <a  href="locationInfo.php">LOCATIONS</a>
                    <a  href="addLinks.php">ADDITIONAL INFORMATION</a>
                </div>
            <a  href="logout.php">LOGOUT</a>

            <p>&copy;travelPrep <?php echo date('Y'); ?> </p>
            <br>
            <p>This website is for educational purposes only.</p>

        </footer>

        <script src="js/locationInfo.js"></script>
    </body>
</html>