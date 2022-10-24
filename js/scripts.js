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


//*  Jquery navigation 
(function($){
        $(document).ready(function(){
            $(".menu-navigation .active").parent("li").css("{'background-color', '#f7d30b'}");
        })
        pageActive =window.location.href;
        if('http://groupe-externalisation/index.php'== pageActive)
        {
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");

        }
        else if(http://groupe-externalisation/nos-services.php){
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");   
        }
        else if(http://groupe-externalisation/nous-recrutons.php){
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");  
        }
        else if(http://groupe-externalisation/centre-de-relation-client.php){
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");  
        }
        else if(http://groupe-externalisation/comptabilite.php){
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");  
        }
        else if(http://groupe-externalisation/bpo-processus-metiers.php){
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");  
        }
        else if(http://groupe-externalisation/webmarketing.php){
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");  
        }
        else if(http://groupe-externalisation/pao-conception-graphique.php){
            $(".menu-navigation .active").removeClass('active');
            $(".menu-navigation #activeNav").addClass("active");  
        }
})(jQuery);




    



