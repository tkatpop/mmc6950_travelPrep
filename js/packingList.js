//Packing List Season Dropdown Selection

var packingForm = document.getElementById('packingForm')

var packingListDisplay = document.getElementById('Packing-List-Display')


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
