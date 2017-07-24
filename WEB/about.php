<?php $thisPage="about"; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8" />
<meta name="author" content="Minor Solis" />
<title>Malabar Advertising</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" />
<link href="css/responsive.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />

      <link rel="stylesheet" href="css/jquery.fancybox.min.css" media="screen">

 <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
   <script src="owl-carousel/jquery-1.11.3.min.js"></script> 
    <script src="owl-carousel/owl.carousel.js"></script>
     <link href="css/animate.css" rel="stylesheet">
      <script src="js/wow.js"></script>
</head>
<body>


<?php include("header.php"); ?>

<div class="clearfix"></div>














<div class="abtbanner">




<div class="pagetitle">About us</div>


</div>


















<div class="clearfix"></div>




<div class="container">








<div class="aboutsection">


<div class="col-md-5"><img src="images/aboutinner.jpg" class="img-responsive"></div>

<div class="col-md-7">

<h3> <span class="pink bold">Malabar Advertising Industries</span></h3>
<p>Malabar Advertising Industries is one of the pioneers in the field of Outdoor Advertising in Kerala. The company has spread far and wide and now has branches across and beyond the boundaries. In the 29 years of its existence, it has build a strong base root and has been providing solutions to the top brands in the market through Hoardings and Billboards. </p><p>The dreamer and dynamic duo, Mr. A Balakrishnan and Mr. A Santhosh Kumar who founded this company, believe in the tag line 'Publicity Guaranteed'. Our hoardings are installed in the most prominent places within the city as well as in strategic places along highways and nodal points on highways and outskirts. </p><p>

</p>


</div>



</div>





<div class="clearfix"></div>


<div class="clearfix"></div>

<div class="vision">



<div class="col-md-6">
<h4 class="bold">Our Vision</h4>
<p>Our vision is to be the best Outdoor Advertising company and satisfy our customers to the fullest.<br></p>



</div>




<div class="col-md-6">


<h4 class="bold">Our Mission</h4>
<p> The company is focusing on using some of the latest technology in the field of outdoor advertising. It is our mission to ensure complete satisfaction to our clients.</p>


</div>



</div>

</div>



<div class="clearfix"></div>







<?php include("footer.php"); ?>




  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>





  

<script>
    $(document).ready(function() {

      //Sort random function
      function random(owlSelector){
        owlSelector.children().sort(function(){
            return Math.round(Math.random()) - 0.5;
        }).each(function(){
          $(this).appendTo(owlSelector);
        });
      }

      $("#owl-demo").owlCarousel({
		  autoPlay : false,
		  items : 1,
        navigation: true,
        navigationText: [
        "<i class='icon-chevron-left icon-white'></i>",
        "<i class='icon-chevron-right icon-white'></i>"
        ],
        //Call beforeInit callback, elem parameter point to $("#owl-demo")
        beforeInit : function(elem){
          random(elem);
        }

      });

    });
    </script>
    
    
    
  




<script>$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});</script> 




  <script>
  $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
   </script>



      <script src="js/jquery.fancybox.min.js"></script>



<script src="js/bootstrap.min.js"></script> 
<script src="js/main.js"></script>

 


</body>
</html>
