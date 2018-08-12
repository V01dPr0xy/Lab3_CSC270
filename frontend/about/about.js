var request = new XMLHttpRequest();

loadData();

function getUrlParameter(sParam){
  var sPageURL = window.location.search.substring(1);
  var sParameterName = sPageURL.split('?');
  return sParameterName;
}

function loadData(){
  request.open('GET', 'localhost/backend/reusable_code/reusablenavbar.php');
  request.onload = loadComplete;
  request.send();
}

function loadComplete(evt) {
  if (getURLParameter() == "light_theme"){
    document.getElement
  }
}