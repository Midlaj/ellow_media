<?php $thisPage="index"; ?>
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

  <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="owl-carousel/owl.theme.css" rel="stylesheet">
  <script src="owl-carousel/jquery-1.11.3.min.js"></script> 
  <script src="owl-carousel/owl.carousel.js"></script>
  <link href="css/animate.css" rel="stylesheet">
  <script src="js/wow.js"></script>
</head>

<body>
    <!-- header -->
    <?php include("header.php"); ?>
    <!-- Show Banner Image -->
    <?php include("banner.php"); ?>

<div class="clearfix"></div>

    <div class="container">
    <!-- News Feed -->
    <?php include("index_news.php"); ?>     
    </div>

    <div class="col-lg-6">
    <div class="abtimg">
    <img src="images/abtimg.jpg" class="img-responsive">
    </div>
</div>
</div>

<div class="clearfix"></div>

    <div class="tabsection">
    <div class="container">
        <!-- Show Available images -->
        <?php include("index_available.php"); ?>
        <!-- Show Sold Images -->
        <?php include("index_sold.php"); ?> 
    </div>
    </div>

<div class="clearfix"></div>

  <div class="container">

  <div class="col-md-12">
    <div class="clients">
      <h3>Our <span class="pink">Clients</span></h3>      
      <div id="owl-clients" class="owl-carousel">               
        
        <div class="item">
        <a href="#">
          <img src="images/clients/MIMS.jpg" class="img-responsive"> 
        </a>
        </div>
          
        <div class="item">
        <a href="#">
          <img src="images/clients/atlas.jpg" class="img-responsive"> 
        </a>
        </div>
         
        <div class="item">
        <a href="#">
        <img src="images/clients/ithaca.jpg" class="img-responsive"> 
        </a>
        </div>
       
        <div class="item">
        <a href="#">
        <img src="images/clients/bsnl.jpg" class="img-responsive"> 
        </a>
        </div>
    
        <div class="item">
        <a href="#">
        <img src="images/clients/preethi.jpg" class="img-responsive"> 
        </a>
        </div>
 
        <div class="item">
        <a href="#">
        <img src="images/clients/alukkas.jpg" class="img-responsive"> 
        </a>
        </div>

        <div class="item">
        <a href="#">
        <img src="images/clients/cresent.jpg" class="img-responsive"> 
        </a>
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

      $("#availa").owlCarousel({
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

      $("#owl-clients").owlCarousel({
		  autoPlay : true,
		  items : 5,
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
<script src="js/bootstrap.min.js"></script> 
<script src="js/main.js"></script>

</body>
</html>
