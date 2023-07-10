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

            <h1>Need help packing?</h1>

            
            <form id="packingForm">
                <!--List of recommended clothes that changes with season drop down-->
                <label for="season">Which season are you packing for? </label>
                <select name="season" id="season">
                    <option value="choose" id="Choose" selected>Choose A Season</option>
                    <option value="Spring" id="Spring">Spring</option>
                    <option value="Summer" id="Summer">Summer</option>
                    <option value="Fall/Autumn" id="Fall">Fall/Autumn</option>
                    <option value="Winter" id="Winter">Winter</option>
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
        <footer id="footer">
            <ul class="footer-menu">
                <li><a  href="main.php">Home</a></li>
                <li><a  href="packingList.php">Packing List</a></li>
                <li><a  href="locationInfo.php">Locations</a></li>
                <li><a  href="addLinks.php">Additional Info</a></li>
            </ul>

            &copy; <?php echo date('Y'); ?> 

            <h4><a href="logout.php">Logout</a></h4>
        </footer>

        <script src="js/packingList.js"></script>
    </body>
</html>