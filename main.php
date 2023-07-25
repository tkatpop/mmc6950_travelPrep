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
        <title>TravelPrep</title>
    </head>

    <header>
        <!--LOGO goes here-->
        <img src="images/logo_darkB.png" alt="travelPrep Logo" class="main_logo"> 
        
        <!--Header nav bar after logged in-->
        <nav>
            <button class="hamburger-btn">
                <i class="menuIcon material-icons">menu</i>
                <i class="closeIcon material-icons">close</i>
            </button>

            <ul class="hamburger-menu" id="main-menu">
                <li><a class="menuItem" href="main.php">Home</a></li>
                <li><a class="menuItem" href="packingList.php">Packing List</a></li>
                <li><a class="menuItem" href="locationInfo.php">Locations</a></li>
                <li><a class="menuItem" href="addLinks.php">Additional Info</a></li>
                <li><a class="menuItem" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <body class="journal_container">
       <div>
        
            <!--This is where the content goes-->

            <h1>Welcome Traveller!</h1>

            <section> <!--Images associated with each page used here for links as background-->
                
                <a class="menuItem" href="locationInfo.php">Location Information</a>
                <a class="menuItem" href="packingList.php">Packing List</a>
            </section>





        </div> <!--Closing tag for #container-->


        <footer id="footer">
             <!--Footer nav bar after logged in-->
             <ul class="footer-menu">
                <li><a  href="main.php">Home</a></li>
                <li><a  href="packingList.php">Packing List</a></li>
                <li><a  href="locationInfo.php">Locations</a></li>
            </ul>

            &copy; <?php echo date('Y'); ?> 

            <h4><a href="logout.php">Logout</a></h4>
        </footer>

        <script src="js/main.js"></script>
    </body>
</html>