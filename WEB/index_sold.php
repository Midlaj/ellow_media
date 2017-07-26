<?php
  $stm =  $db->prepare("SELECT * FROM tbl_sold");
  $stm->execute();
?>

<!-- Display the Add Available place -->
    <div class="col-md-6">
<!-- Scroll image -->
<div class="scrolone">
<h3>sold</h3>
  <div id="availa" class="owl-carousel">              
    
  <?php
  //fetch the Sold images
  
  while($row= $stm->fetch()) 
  {
  ?>
    <div class="item">
    <a href="#">
    <figure class="snip1470">
    <img src="<?php echo $UPLOAD_PATH."sold/".$row['vchr_sold_pic'];?>" class="img-responsive"> 
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