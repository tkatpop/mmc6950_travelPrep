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
            <h1>Additional Information</h1>
        </div>

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

