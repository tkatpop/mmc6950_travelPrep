<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="all"/>
        <title>TravelPrep</title>
    </head>

    <header>
        <!--LOGO goes here-->
        
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

    <body>
       <div id="container">
            <!--This is where the content goes-->

            <div>
                <h1>Need help packing?</h1>
            </div>

            <!--List of recommended clothes that changes with season drop down-->

            <!--Personalized note section-->
            

        </div> <!--Closing tag for #container-->
        <footer id="footer">
             <!--Footer nav bar after logged in--> &copy; <?php echo date('Y'); ?> 
        </footer>
    </body>
</html>