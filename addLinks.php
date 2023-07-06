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
                <ul>
                    <li><a href="#generalTravelInfo">General Travel Information</a></li>
                    <li><a href="#healthInfo">Health</a></li>
                    <li><a href="#transportInfo">Transportation</a></li>
                    <li><a href="#hotelsInfo">Hotels/Housing</a></li>
                </ul>
            </section>

            <section>

                <div id="generalTravelInfo">
                    <!--General Travel information section with outside links-->
                    <h3>General Travel Information</h3>
                        <ul>
                            <li><a href="https://travel.state.gov/content/travel/en/international-travel.html" target="_blank">Travel.State.Gov: U.S. Department of State Bureau of Consular Affairs- International Travel</a></li>
                                <p>This U.S. government website features a list of recommendations on traveling abroad including "Before You Go", "While Abroad", emergencies abroad, and information about destinations. </p>
                            <li><a href="https://step.state.gov/step/" target="_blank">STEP: Smart Traveler Enrollment Program</a></li>
                                <p>"The Smart Traveler Enrollment Program (STEP) is a free service to allow U.S. citizens and nationals traveling and living abroad to enroll their trip with the nearest U.S. Embassy or Consulate. "</p>
                            <li><a href="https://www.cbp.gov/travel/us-citizens/know-before-you-go" target="_blank">U.S. Customs and Border Protection- Ports of Entry</a></li>
                                <p>U.S. Customs and Border Protection website features port of entry information and document requirements for entry.</p>
                            <li><a href="https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/" target="_blank">Travel.State.Gov: U.S. Department of State Bureau of Consular Affairs- International Travel- Travel Advisories</a></li>
                                <p>This U.S. government website provides a list of destinations and the travel advisories for a selected destination and what precautions should be taken before or at the destination.</p>
                            <li><a href="https://www.dhs.gov/travel-overseas" target="_blank">Homeland Security- Travel Overseas</a></li>
                                <p>Homeland Security has a webpage regarding traveling overseas and what travel alerts or warnings are issued for a destination and what resources are available overseas if security emergency arises. </p>
                            <li><a href="https://www.state.gov/countries-and-areas-list/" target="_blank">U.S. Department of State- Countries and Areas</a></li>
                                <p>This U.S. government website features a list of countries and region areas and provides a list of information about that area along with quick advisories.</p>
                        </ul>
                    <h4>Passport Information</h4>
                        <ul>
                            <li><a href="https://www.usps.com/international/passports.htm" target="_blank">USPS: United States Postal Service- Passports</a></li>
                                <p>United States Postal Service has information about applying for a U.S. passport book, card, or both as well as information about renewing passports. Appointments and documents can be created and downloaded from this website. </p>
                            <li><a href="https://help.cbp.gov/s/article/Article-3618?language=en_US" target="_blank">U.S. Customs and Border Protection- Documents Needed For Entry</a></li>
                                <p>U.S. Customs and Border Protection provides information on which documents are needed to travel abroad, whether by air, land, or water, and what documents are needed for children. </p>
                            <li><a href="https://travel.state.gov/content/travel/en/passports.html/" target="_blank">Travel.State.Gov: U.S. Department of State Bureau of Consular Affairs- Passports</a></li>
                                <p>This U.S. government website features what to expect when applying for a passport, how to renew a passport, what countries require visas to enter, how to receive an emergency passport, and any legal matters regarding passports. </p>
                        </ul>
                </div>

                <div id="healthInfo">
                    <!--Health information section with outside links-->
                    <h3>Health Information</h3>
                    <ul>
                        <li><a href="https://www.who.int/countries/" target="_blank">World Health Organization- Health Travel Information</a></li>
                            <p>World Health Organization, also known as WHO, features a list of countries along with facts about any selected country as well as health emergency, including COVID-19 statistics.  </p>
                        <li><a href="https://wwwnc.cdc.gov/travel/" target="_blank">CDC: Centers for Diease Control and Prevention- Travel Information and Vaccinations</a></li>
                            <p>CDC provides a list of countries and the recommended vaccinations and medication  needed to travel to these countries as well as information about health advice for traveling and what to expect after your trip. There is a portion of this website that focuses on COVID-19 recommendations and travel requirements in regards to COVID-19. </p>
                        <li><a href="https://travel.state.gov/content/travel/en/international-travel/before-you-go/your-health-abroad.html" target="_blank">Travel.State.Gov: U.S. Department of State Bureau of Consular Affairs- Health Abroad</a></li>
                            <p>This U.S. government website covers what to expect when traveling abroad and experience a medical emergency, finding a doctor or hospital abroad, insurance abroad, and lists of U.S. emabssies and consulates.</p>
                        <li><a href="" target="_blank"></a></li>
                    </ul>
                </div>

                <div id="transportInfo">
                    <!--Transportation information section with outside links-->
                    <h3>Transportation Information</h3>
                    <h4>Airlines</h4>
                    <p>Here are a list of airlines that provide international travel from United States of America. There are several smaller airlines that are used at destinations to travel more locally.</p>
                        <ul>
                            <li><a href="https://www.united.com/en/us" target="_blank">United Airlines</a></li>
                            <li><a href="https://www.turkishairlines.com/" target="_blank">Turkish Airlines</a></li>
                            <li><a href="https://www.aa.com/homePage.do" target="_blank">American Airlines</a></li>
                            <li><a href="https://www.delta.com/" target="_blank">Delta Airlines</a></li>
                            <li><a href="https://www.alaskaair.com/" target="_blank">Alaska Airlines</a></li>
                            <li><a href="https://www.flyfrontier.com/" target="_blank">Frontier Airlines</a></li>
                        </ul>
                    <h4>Cruises</h4>
                    <p>Here are a list of cruiselines that provide international travel from United States of America. There are several smaller cruiselines that are used at destinations to travel more locally or provide a different cruise experience.</p>
                        <ul>
                            <li><a href="https://www.royalcaribbean.com/" target="_blank">Royal Caribbean Cruises</a></li>
                            <li><a href="https://www.princess.com/" target="_blank">Princess Cruises</a></li>
                            <li><a href="https://www.carnival.com/" target="_blank">Carnival Cruises</a></li>
                            <li><a href="https://www.ncl.com/" target="_blank">Norwegian Cruises</a></li>
                            <li><a href="https://disneycruise.disney.go.com/" target="_blank">Disney Cruises</a></li>
                        </ul>
                </div>

                <div id="hotelsInfo">
                    <!--Hotels/Housing information section with outside links-->
                    <h3>Hotels and Housing Information</h3>
                    <p>Whether you want to stay in a hotel or someone else's home there are several websites to help find a place to make yourself comfortable. Some of the websites below feature both hotels and housing/homes. There are several hotel chains that have international locations, typically choose your favourite hotel chain and give them a look to see if they have hotels are your chosen destinations.</p>
                    <h4>Hotels</h4>
                        <ul>
                            <li><a href="https://www.booking.com/" target="_blank">Booking.com</a></li>
                            <li><a href="https://www.expedia.com/" target="_blank">Expedia</a></li>
                            <li><a href="https://www.travelocity.com/" target="_blank">Travelocity</a></li>
                            <li><a href="https://www.hotels.com/" target="_blank">Hotels.com</a></li>
                        </ul>
                    <h4>Housing</h4>
                        <ul>
                            <li><a href="https://www.homestay.com/" target="_blank">Homestay.com</a></li>
                            <li><a href="https://www.airbnb.com/" target="_blank">AirBnb</a></li>
                            <li><a href="https://www.vrbo.com/?k_clickid=fcf6c2761c2411ee831900e40a82b82a&CID=a_cj_7241721&utm_source=aff_cj&utm_medium=partner&utm_campaign=Travel+Cats+Media+Ltd_7241721&utm_content=10697641_&CJEVENT=fcf6c2761c2411ee831900e40a82b82a&affcid=VRBO-US.NETWORK.CJ.7241721" target="_blank">Vrbo</a></li>
                            <li><a href="https://www.plumguide.com/?clickref=1101lwVkUfja&utm_source=lozula&utm_medium=affiliate&utm_campaign=PZUS" target="_blank">Plum Guide</a></li>
                            <li><a href="https://www.agoda.com/en-gb/?cid=1841944&tag=0a0d33f81c2511ee835c6bf90a82b820#homes" target="_blank">Agoda</a></li>
                        </ul>
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

        <script src="js/addLinks.js"></script>

    </body>
</html>

