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

            <h1>Need help packing?</h1>

            
            <form id="packingForm">
                <!--List of recommended clothes that changes with season drop down-->
                <label for="season">Which season are you packing for? </label>
                <select name="season" id="season">
                    <option value="choose" id="Choose" selected>Choose A Season</option>
                    <option value="Spring" >Spring</option>
                    <option value="Summer" >Summer</option>
                    <option value="Fall/Autumn" >Fall/Autumn</option>
                    <option value="Winter" >Winter</option>
                </select>

                <!--NEED TO ADD THE SELECTION PAcKING LIST HERE-->
                <section id="Packing-List-Display">
                    <h4 id="List-Title"></h4>
                    
                    <ul id="spring-fall-list">
                        <li>Short sleeve shirts</li>
                        <li>Sweater/cardigan</li>
                        <li>Long sleeve shirts</li>
                        <li>Blouse/buttondown shirt</li>
                        <li>Jeans/Pants</li>
                        <li>Dress/Dinnerwear</li>
                        <li>Walking shoes</li>
                        <li>Dress shoes</li>
                        <li>Optional: Scarf</li>
                        <li>Optional: Hat</li>
                    </ul>

                    <ul id="summer-list">
                        <li>Shorts</li>
                        <li>Short sleeve shirts</li>
                        <li>Lightweight layer/windbreaker</li>
                        <li>Short sleeve blouse/buttondown shirt</li>
                        <li>Dress/Dinnerwear</li>
                        <li>Jean/Pant</li>
                        <li>Walking shoes</li>
                        <li>Dress shoes</li>
                        <li>Sandals/Flip flops</li>
                        <li>Optional: Swimwear</li>
                        <li>Optional: Sunshield hat</li>
                    </ul>

                    <ul id="winter-list">
                        <li>Long sleeve shirts</li>
                        <li>Sweaters/cardigans</li>
                        <li>Coat</li>
                        <li>Thermal base layer</li>
                        <li>Jeans/Pants</li>
                        <li>Thick dinnerwear/Sweater dress</li>
                        <li>Walking Boots</li>
                        <li>Dress Boots</li>
                        <li>Scarf</li>
                        <li>Gloves</li>
                        <li>Warm hat</li>
                    </ul>
                    

                </section>

                <!--Personalized note section-->
                <textarea id="noteSection" cols="30" rows="10" placeholder="Write down notes of additional packing items or reminders here."></textarea>
            </form>
            

        </div> <!--Closing tag for #container-->
        <footer id="footer" class="welcome_footer">
            <a  href="main.php">HOME</a>
            <div class="large_footer_nav">
                <a  href="packingList.php">PACKING LIST</a>
                <a  href="locationInfo.php">LOCATIONS</a>
                <a  href="addLinks.php">ADDITIONAL INFORMATION</a>
            </div>
            <a  href="logout.php">LOGOUT</a>

            <p>&copy;travelPrep <?php echo date('Y'); ?> </p>

        </footer>

        <script src="js/packingList.js"></script>
    </body>
</html>