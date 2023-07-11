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
                <h1>Location Information</h1>
            </div>
            
            <!--Previous search sessions shows up here-->
            <section id="left_previous_searches"></section> 

            <section id="locationInfo">
                <!--API location info search form-->
                <form>
                    <label for="locationInfo-search">Enter Location Name</label>
                    <input name="search" id="locationInfo-search" type="text" placeholder="enter the country name here"
                    />
                    <button type="submit">Search</button>
                </form>

                <!--API location info shows up here-->
                <div id="locationInfo-display"></div>
            </section>  

            <section id="right_currencyInfo"><!--API currency info shows up here-->
                <h4>Currency</h4>
                <div id="currencyInfo-display">
                    <h5 id="currencyInfo-title"></h5>
                </div>
            </section> 

        </div> <!--Closing tag for #container-->

        <footer id="footer">
             <!--Footer nav bar after logged in-->

             <ul class="footer-menu">
                <li><a  href="main.php">Home</a></li>
                <li><a  href="packingList.php">Packing List</a></li>
                <li><a  href="locationInfo.php">Locations</a></li>
                <li><a  href="addLinks.php">Additional Info</a></li>
            </ul>

            &copy; <?php echo date('Y'); ?> 

            <h4><a href="logout.php">Logout</a></h4>
        </footer>

        <script src="js/locationInfo.js"></script>
    </body>
</html>