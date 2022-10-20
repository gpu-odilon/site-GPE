
(function($){
        $(document).ready(function(){
            $(".menu-navigation .active").parent("li").css("{'background-color', '#ffeeee'}");
        })
    })
(jQuery);



//*   start sticker header top
window.onscroll = function () {
   myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
   if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
      document.getElementById("myHeader").style.padding = "5px 5% 0px 5%";
      document.getElementById("drop-subNav").style.top = "65px";
      document.getElementById("drop-subNav").style.left = "29%";
      document.getElementById("dropScroll").style.overflow = "hidden";
      document.getElementById("myLogo").style.height = "35px";
      document.getElementById("myLogo").style.margin = "10px 0px";

   } else {
      header.classList.remove("sticky");
      document.getElementById("myHeader").style.padding = "30px 5% 40px 5%";
      document.getElementById("drop-subNav").style.top = "90px";
      document.getElementById("myLogo").style.height = "50px";
      document.getElementById("myLogo").style.margin = "auto";
      document.getElementById("drop-subNav").style.left = "36%";
   }
}


// Get the modal 2 nav for mobile
var modal2 = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("closed1")[0];

btn.onclick = function () {
   modal2.style.display = "block";
}

span.onclick = function () {
   modal2.style.display = "none";
}

window.onclick = function (event) {
   if (event.target == modal2) {
      modal2.style.display = "none";
   }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
   acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
         panel.style.display = "none";
      } else {
         panel.style.display = "block";
      }
   });
}


