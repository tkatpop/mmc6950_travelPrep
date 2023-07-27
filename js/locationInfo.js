//Location Info and Currency

//Endpoint URL

var locationURL = "https://restcountries.com/v3.1/"

//Call items from HTML page

var locationInfo = document.getElementById('locationInfo')
var locationForm = document.querySelector('form')
var locationSearch = document.getElementById('locationInfo-search')
var locationInfoDisplay = document.getElementById('locationInfo-display')
var currencyInfoDisplay = document.getElementById('currencyInfo-display')


//Input Submit

locationForm.onsubmit = function(e){
  e.preventDefault()

  //Define Input Value
  var inputValue = locationSearch.value

  //Fetch Information from REST Countries
  var queryString = "name/" + inputValue 
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

  //Show Location and Weather Information
  .then(showLocation)
  
}

//Function to show location information
function showLocation(location){
  locationInfoDisplay.innerHTML = ""
  locationSearch.value = ""


  //Country Common Name
  var countryCommonName = document.createElement('h2')
  countryCommonName.textContent = (location[0].name.common)
  locationInfoDisplay.appendChild(countryCommonName)


  //Country Official Name
  var countryOfficialName = document.createElement('h4')
  countryOfficialName.textContent = ("OFFICIAL NAME: " + location[0].name.official)
  locationInfoDisplay.appendChild(countryOfficialName)


  //Country Flag
  var flagImg = document.createElement('img')
  flagImg.src = (location[0].flags.png)
  flagImg.alt = (location[0].flags.alt)
  locationInfoDisplay.appendChild(flagImg)


  //Country Region
  var countryRegion = document.createElement('h4')
  countryRegion.textContent = ("REGION: " + location[0].region)
  locationInfoDisplay.appendChild(countryRegion)


  //Country Capital
  var countryCapital = document.createElement('h4')
  countryCapital.textContent = ("CAPITAL: " + location[0].capital)
  locationInfoDisplay.appendChild(countryCapital)

  //Country Language
  var countryLang = document.createElement('h4')
  var country_languages = []
  let count = 0

  for (let properties in location[0].languages) {
    country_languages[count] = location[0].languages[properties]
    count = count + 1
  }

  countryLang.textContent = ("LANGUAGE(S): " + country_languages)
  locationInfoDisplay.appendChild(countryLang)

  //Google Map Link
  var googleMap = document.createElement('a')
  googleMap.target = '_blank'
  googleMap.href = ("https://www.google.com/maps/search/?api=1&query=" + location[0].latlng[0] + "," + location[0].latlng[1]) 
  googleMap.textContent = "Click to view location on Google maps"
  locationInfoDisplay.appendChild(googleMap)


  //Country Currency
  var countryCurrency = document.getElementById('currencyInfo-title')
  var country_moneys = []
  let count1 = 0
  
  for (let properties in location[0].currencies) {

    country_moneys[count1] = location[0].currencies[properties].name
    count1 = count1 + 1

  }

  countryCurrency.textContent = ("PRIMARY CURRENCY: " + country_moneys)
  currencyInfoDisplay.appendChild(countryCurrency)
  document.getElementById('currencyInfo-display').style.backgroundColor="#8FA698"
  document.getElementById('currencyInfo-display').style.padding="50px"

}


