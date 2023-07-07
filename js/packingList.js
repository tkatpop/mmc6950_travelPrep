//Packing List Season Dropdown Selection

var packingForm = document.getElementById('packingForm')
var selectSeason = document.getElementById('season').value
var packingListDisplay = document.getElementById('Packing-List-Display')
// var selectSpring = document.getElementById('Spring')
// var selectSummer = document.getElementById('Summer')
// var selectFall = document.getElementById('Fall')
// var selectWinter = document.getElementById('Winter')

function seasonList(){
  var packingListSeason = document.createElement('h4')
  packingListSeason.textContent = ("Packing List Recommended for Season: " + selectSeason)
  packingListDisplay.appendChild(packingListSeason)

  if(selectSeason = "Spring" || "Fall/Autumn"){
    document.getElementById('spring/fall-list').style.display="block"
  }if(selectSeason = "Winter"){
    document.getElementById('winter-list').style.display="block"
  }if(selectSeason = "Summer"){
    document.getElementById('summer-list').style.display="block"
  }else(
    document.getElementById('spring/fall-list').style.display="none",
    document.getElementById('winter-list').style.display="none",
    document.getElementById('summer-list').style.display="none"
  )
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