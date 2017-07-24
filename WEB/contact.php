<?php $thisPage="contact"; ?>
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



<div class="contactbanner">




<div class="pagetitle">Contact us</div>


</div>














<div class="clearfix"></div>














<div class="clearfix"></div>




<div class="container">








<div class="scrolone">


<div class="col-md-12">











<div class="col-md-9">


<div class="">



		<form role="form" id="contact-form" class="contact-form">
        
        
        	<div class="col-md-12">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
                  		</div>
                  	</div>
                    
                    
                		<div class="col-md-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Phone">
                  		</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                  		</div>
                  	</div>
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="2" name="Message" id="Message" placeholder="Message"></textarea>
                  
                  	</div>
                    </div>
                
                    <div class="col-md-12"><br>

                  <button type="submit" class="btn main-btn pull-right">SEND MESSAGE</button>
               
                          </div>

</form>







</div>











</div>







<div class="col-md-3">

<h4>Malabar Advertising</h4>
<h5>1st Floor, FCC Building, Nr. Federal Bank Tower, Arayidathupalam, Calicut-673016</h5>
<p><strong>Phone : 9447054124</strong></p>
<p><strong>Phone : 9447886128</strong></p>
<p><strong>Email : info@malabaradvertising.com</strong></p>














</div>












<div class="clearfix"></div>



<div class="col-md-12">
<div class="map">
<div id="mapouter"><div id="gmap_canvas">
<iframe width="100%" height="360" frameborder="0" scrolling="no" marginheight="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d978.2590537814336!2d75.7946659926597!3d11.258746231891331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1497069363442" marginwidth="0"></iframe> 




</div><style>#gmap_canvas{height:300px;width:100%;}#mapouter{overflow:hidden;height:300px;width:100%;}</style></div>

</div>
 


</div>








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
