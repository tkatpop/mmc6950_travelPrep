//Packing List Season Dropdown Selection

var packingForm = document.getElementById('packingForm')
// var selectSeason = document.getElementById('season')
var packingListDisplay = document.getElementById('Packing-List-Display')
// var selectSpring = document.getElementById('Spring')
// var selectSummer = document.getElementById('Summer')
// var selectFall = document.getElementById('Fall')
// var selectWinter = document.getElementById('Winter')
// var selectChoose = document.getElementById('Choose')

document.getElementById('season').onchange = function seasonList(){

  var packingListSeason = document.getElementById('List-Title')
  packingListSeason.innerHTML = ("Packing List Recommended for Season: " + document.getElementById('season').value)

  var selected_season = document.getElementById('season').value

  if(document.getElementById('season').value == "Summer")
  {
    document.getElementById('summer-list').style.display="block",
    document.getElementById('spring-fall-list').style.display="none",
    document.getElementById('winter-list').style.display="none";
  } else if(document.getElementById('season').value == "Winter")
  {
    document.getElementById('winter-list').style.display="block",
    document.getElementById('spring-fall-list').style.display="none",
    document.getElementById('summer-list').style.display="none";
  }else
  {
    document.getElementById('spring-fall-list').style.display="block",
    document.getElementById('winter-list').style.display="none",
    document.getElementById('summer-list').style.display="none";
  }

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