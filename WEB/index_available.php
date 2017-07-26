<?php
  $stm =  $db->prepare("SELECT * FROM tbl_available");
  $stm->execute();
?>

 <!-- Display the  Sold place -->
    <div class="col-md-6"> 
<!-- Scroll image -->
<div class="scrolone">
<h3>available</h3>
  <div id="owl-demo" class="owl-carousel">              
  <?php
  //fetch the Sold images
  while($row= $stm->fetch()) 
  {
  ?>
    <div class="item">
    <a href="#">
    <figure class="snip1470">
    <img src="<?php echo $UPLOAD_PATH."available/".$row['vchr_available_pic'];?>" class="img-responsive"> 
      <figcaption>
        <h2><?php echo $row['vchr_title']; ?></h2>
      </figcaption>
    </figure>
    </a>
    </div>
    <?php 
  } 
  ?>    
</div>
</div>
</div>
