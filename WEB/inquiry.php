<?php $thisPage="inquiry"; ?>

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
 <link rel="stylesheet" href="css/datepicker.css" media="screen">
 <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
   <script src="owl-carousel/jquery-1.11.3.min.js"></script> 
    <script src="owl-carousel/owl.carousel.js"></script>
     <link href="css/animate.css" rel="stylesheet">
      <script src="js/wow.js"></script>
      <script src="js/bootstrap-datepicker.js"></script> 
</head>
<body>


<?php include("header.php"); ?>

<div class="clearfix"></div>













<div class="inquirybanner">




<div class="pagetitle">Inquiry</div>


</div>

















<div class="clearfix"></div>




<div class="container">








<div class="appointment">



<div class="col-md-8 col-md-offset-2">




<form>

<div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
  </div>
</div>

 
 
 <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
  </div>
  
  
   
  
  
  
  


</div>



<div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  
  

</div>


<div class="col-md-12">
    <div class="form-group">
    <label for="exampleInputEmail1">Your Message</label>
    <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
  </div>
</div>


 


<div class="col-md-6 col-md-offset-3"><br>

  <button type="submit" class="btn btn-lg btn-block btn-primary">SUBMIT YOUR ENQUIRY</button>
  </div>
</form>







</div>


</div>





<div class="clearfix"></div>



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

 
 
 
 
<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
			$('#dp2').datepicker();
			$('#dp3').datepicker();
			$('#dp3').datepicker();
			$('#dpYears').datepicker();
			$('#dpMonths').datepicker();
			
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>


</body>
</html>
