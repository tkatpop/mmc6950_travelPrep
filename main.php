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
        
        <div class="hamburger">
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
        <div><a href="main.php"><img src="images/logo_darkB.png" alt="travelPrep Logo" class="main_logo"></a></div>

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
    </header>

    <body class="journal_container">
       <div>
        
            <!--This is where the content goes-->

            <h1>Welcome Traveller!</h1>

            <section> <!--Images associated with each page used here for links as background-->
                <h3><a class="menuItem" href="locationInfo.php">Location Information</a></h3>
                <h3><a class="menuItem" href="packingList.php">Packing List</a></h3>
            </section>

        </div> <!--Closing tag for #container-->


        <footer id="footer" class="welcome_footer">
             <!--Footer nav bar after logged in-->
                <a  href="main.php">HOME</a>
                <div class="large_footer_nav">
                    <a  href="packingList.php">PACKING LIST</a>
                    <a  href="locationInfo.php">LOCATIONS</a>
                    <a  href="addLinks.php">ADDITIONAL INFORMATION</a>
                </div>
                <a  href="logout.php">LOGOUT</a>


            <p>&copy;travelPrep <?php echo date('Y'); ?> </p>

        </footer>

        <script src="js/main.js"></script>
    </body>
</html>