<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="all"/>
        <title>TravelPrep</title>
    </head>

    <header>
        <nav></nav>
    </header>

    <body>
       <div id="container">
        
            <!--This is where the content goes-->

            <div>
                <h1>Location Information</h1>
            </div>

            <section id="left_previous_searches"></section> <!--Previous search sessions shows up here-->

            <section id="locationInfo"></section> <!--API location info shows up here-->

            <section id="right_weatherInfo"></section> <!--API weather info shows up here-->

            <section id="right_currencyInfo"></section> <!--API currency info shows up here-->

        </div> <!--Closing tag for #container-->
        <footer id="footer">
             <!--Footer nav bar after logged in--> &copy; <?php echo date('Y'); ?> 
        </footer>
    </body>
</html>