//Endpoint URL

var locationURL = "https://restcountries.com/v3.1/"

//Call items from HTML page

var locationInfo = document.getElementById('locationInfo')
var locationForm = document.querySelector('form')
var locationSearch = document.getElementById('locationInfo-search')
var locationInfoDisplay = document.getElementById('locationInfo-display')

//Input Submit

locationForm.onsubmit = function(e){
  e.preventDefault()

  //Define Input Value
  var inputValue = locationSearch.value

  //Fetch Information from REST Countries
  var queryString = "name/" + inputValue 
  // var queryString = inputValue + "?fields=name,region,currencies,languages,flag"
  var fetchURL = locationURL + queryString
  if (!inputValue) return
  fetch(fetchURL)

  //Location not found Error
  .then(function(res){
    if (res.status !== 200) throw new Error('Location Not Found')
    return res.json()
  })

  //If error is found
  .catch(function(err){
      locationInfo.innerHTML = err.message
      locationSearch.value = ""
  })

  //Show Location Information
  .then(showLocation)

}

//Function to show location information
function showLocation(location){
  console.log(location)
  locationInfoDisplay.innerHTML = ""
  locationSearch.value = ""

  //Country Common Name
  var countryCommonName = document.createElement('h2')
  countryCommonName.textContent = (location[0].name.common)
  locationInfoDisplay.appendChild(countryCommonName)

  //Country Official Name
  var countryOfficialName = document.createElement('h4')
  countryOfficialName.textContent = ("Official Name: " + location[0].name.official)
  locationInfoDisplay.appendChild(countryOfficialName)

  //Country Region
  var countryRegion = document.createElement('h4')
  countryRegion.textContent = ("Region: " + location[0].region)
  locationInfoDisplay.appendChild(countryRegion)

  //NEED LANGUAGES

  //NEED FLAG

  //NEED CAPITOL

  //NEED CURRENCY
}



//Hamburger Menu
const menu = document.querySelector(".hamburger-menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger = document.querySelector(".hamburger-btn");
const closeIcon = document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach(function (menuItem) {
  menuItem.addEventListener("click", toggleMenu);
});