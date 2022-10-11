

//*   start sticker header top
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
     document.getElementById("myHeader").style.padding = "5px 5% 0px 5%";
     document.getElementById("drop-subNav").style.top = "65px";
     document.getElementById("dropScroll").style.overflow = "hidden";
  } else {
    header.classList.remove("sticky");
    document.getElementById("myHeader").style.padding = "30px 5% 40px 5%";
    document.getElementById("drop-subNav").style.top = "90px";
  }
}







                



