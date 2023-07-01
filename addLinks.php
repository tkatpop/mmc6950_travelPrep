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

            <h1>Additional Information</h1>


            <section class="addLinkNav">
                <!--Nav bar for page-->
                <p><a href="#healthInfo">Health</a></p>
                <p><a href="#transportInfo">Transportation</a></p>
                <p><a href="#hotelsInfo">Hotels/Housing</a></p>
            </section>

            <section>
                <div id="healthInfo">
                    <!--Health information section with outside links-->
                    <h3>Health Information</h3>
                </div>

                <div id="transportInfo">
                    <!--Transportation information section with outside links-->
                    <h3>Transportation Information</h3>
                </div>

                <div id="hotelsInfo">
                    <!--Hotels/Housing information section with outside links-->
                    <h3>Hotels and Housing Information</h3>
                </div>
            </section>

        </div> <!--Closing tag for #container-->

        <footer id="footer">
             <!--Footer nav bar after logged in--> &copy; <?php echo date('Y'); ?> 
        </footer>
        
    </body>
</html>

