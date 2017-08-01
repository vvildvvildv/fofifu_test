function wcc(){
  var w = window.innerWidth;
  var h = window.innerHeight;
  document.getElementById("demo").innerHTML = "Width: " + w + "<br>Height: " + h;
};
function scrollTrack() {
    var elmnt = document.getElementById("scroller");
    var y = elmnt.scrollTop;
    /*var x = elmnt.scrollLeft;
    document.getElementById ("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";*/
    if (y > 75) {
      
      document.getElementById("theHeader").style.position ="fixed";
      document.getElementById("theHeader").style.top="-30px";
      
    } else if (y < 77){
      
      
      document.getElementById("theHeader").style.position ="absolute";
      document.getElementById("theHeader").style.top="45px";
      
    }
}


function w3_open() {
  var x = document.getElementsByClassName("w3-sidenav")[0].style.display;
  if (x != "block"){
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
  } else {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
  }
}