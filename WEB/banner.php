<?php
include("data.php");

include("settings.php");
//include("mainclass.php");
?>
<section class="banner">


<div class="slider">

            
<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
  <div class="carousel-inner">
		<?php 
	  $count=0;

  
        while($row= $stm->fetch())
        {
	      if($count==0)
  	    {
		?>
            <div class="item active">
		<?php
	      }
	      else
	      {
    ?>
        <div class="item">
    <?php
	       }
	   ?>
        <img src="<?php echo $UPLOAD_PATH.$row['vchr_banner_name'];?>" alt="First slide">
        <div class="carousel-caption wow fadeInLeft">                       
         <h3 class="wow fadeInUp">
        <span class=""><?php echo $row['vchr_title'];?></span> <br>
        </h3>
                          
                             
                             
                             
            </div>
						</div>
						<?php
		$count++;
}
?>
                    </div>
                    
                    
                    
                  <!-- <div class="item">
                        <img src="images/slider_02.jpg" alt="Second slide">
                        <div class="carousel-caption">
                        
                        
           
                  
                            <h3 class="wow fadeInUp">
                  <span class="pink">Lorem Ipsum</span> <br>
<span class="white light">is simply dummy text</span></h3>
                
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_03.jpg" alt="Third slide">
                        <div class="carousel-caption">
                        
             
                        
       
                            <h3 class="wow fadeInUp">
                  <span class="pink">Lorem Ipsum</span> <br>
<span class="white light">is simply dummy text</span></h3>
                    <!--         <p class="wow fadeInUp">
                          own a branded website</p>-->
                       <!-- </div>
                    </div>-->
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <div class="leftarrow"><img src="images/slideleft.png" class="img-responsive"></div></a>
                    
                    
              <a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next">
                         <div class="rightarrow"><img src="images/slideright.png" class="img-responsive"></div>
              </a>
            </div>
  
  







</div>





























</section>