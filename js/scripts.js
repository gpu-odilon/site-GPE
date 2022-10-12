function toggleNavFunction() {
  var x = document.getElementById("menuNavigation");
  var y = document.getElementById("activeNav");
  if (x.className === "menu-navigation row") {
    x.className += " responsive";
    y.className = "active-resp";
  } else {
    x.className = "menu-navigation row";
    y.className = "active";
  }
}

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}




