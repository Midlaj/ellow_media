<?php $thisPage="gallery"; ?>
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







<div class="clientbanner">




<div class="pagetitle">Our Clients</div>


</div>







<div class="clearfix"></div>




<div class="container">








<div class="scrolone">


<div class="col-md-12">














 <!----------gallery-single----------------------->



       <div class='col-md-4 col-xs-12 col-sm-6 col-lg-4 wow slideInUp'>
                
                
                <figure class="snip1300 blue">
   <img class="img-responsive" alt="" src="images/clients/MIMS.jpg" />
</figure>
                
               
                                   
                    <div class='text-right'>
                        <small class='text-muted'></small>
                    </div> <!-- text-right / end -->
               <div class="galerytitl"><h4>Aster MIMS</h4></div>
            </div>
            
            
            
             <div class='col-md-4 col-xs-12 col-sm-6 col-lg-4 wow slideInUp'>
                
           
           
                        <figure class="snip1300 blue">
   <img class="img-responsive" alt="" src="images/clients/atlas.jpg" />
</figure>
           
                    <div class='text-right'>
                        <small class='text-muted'></small>
                    </div> <!-- text-right / end -->
               <div class="galerytitl"><h4>Atlas jewllery</h4></div>
            </div>
            
            
            
            
              <div class='col-md-4 col-xs-12 col-sm-6 col-lg-4 wow slideInUp'>
                
                       <figure class="snip1300 blue">
   <img class="img-responsive" alt="" src="images/clients/ithaca.jpg" />
</figure>
                    <div class='text-right'>
                        <small class='text-muted'></small>
                    </div> <!-- text-right / end -->
               <div class="galerytitl"><h4>Ithaca Energy</h4></div>
            </div>
            
            
            
            
            
                 <div class='col-md-4 col-xs-12 col-sm-6 col-lg-4 wow slideInUp'>
                
                            <figure class="snip1300 blue">
   <img class="img-responsive" alt="" src="images/clients/bsnl.jpg" />
</figure>
                    <div class='text-right'>
                        <small class='text-muted'></small>
                    </div> <!-- text-right / end -->
               <div class="galerytitl"><h4>BSNL</h4></div>
            </div>



 
               <div class='col-md-4 col-xs-12 col-sm-6 col-lg-4 wow slideInUp'>
                
                            <figure class="snip1300 blue">
   <img class="img-responsive" alt="" src="images/clients/preethi.jpg" />
</figure>
                    <div class='text-right'>
                        <small class='text-muted'></small>
                    </div> <!-- text-right / end -->
               <div class="galerytitl"><h4>Preethi Silks</h4></div>
            </div>
            
            
            
            
            
            
           <div class='col-md-4 col-xs-12 col-sm-6 col-lg-4 wow slideInUp'>
                
               <figure class="snip1300 blue">
   <img class="img-responsive" alt="" src="images/clients/alukkas.jpg" />
</figure>
                    <div class='text-right'>
                        <small class='text-muted'></small>
                    </div> <!-- text-right / end -->
               <div class="galerytitl"><h4>Alukkas Jewllery</h4></div>
            </div>

<!----------/gallery--single---------------------->   




















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
		  items : 4,
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
