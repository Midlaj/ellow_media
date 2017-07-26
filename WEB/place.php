<?php
include('includes/config.php');

include("settings.php");
//include("mainclass.php");
$stmt =	$db->prepare("SELECT * FROM tbl_place");
 $stmt->execute();

?>

<div class="container">

  <div class="scrolone">
    <div class="col-md-12">
      <!--  -->
      <!--      <div class='col-lg-4 col-md-6 col-xs-12 col-sm-6 wow slideInDown'> -->
      <!--                 <a class="fancybox" rel="ligthbox" href="images/gallery/avail02.jpg"> -->
      <!--                  -->
      <!--    -->
      <!--    -->
      <!--   <figure class="snip0058 red"><img src="images/gallery/avail02.jpg" alt="sample35"/> -->
      <!--   <figcaption> -->
      <!--     <p><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p> -->
      <!--     <h2>Sold Out</h2> -->
      <!--   </figcaption> -->
      <!-- </figure> -->
      <!--    -->
      <!--    -->
      <!--    -->

      <?php
        

        while ($row=$stmt->fetch()) {
        //echo $img['vchr_place'];
      ?>
        <div class='col-lg-4 col-md-6 col-xs-12 col-sm-6 wow slideInDown'>
          <a class="fancybox" rel="ligthbox" href="<?php echo $row['vchr_place_pic']; ?>">
          <figure class="snip0058 green">
            <img src="<?php echo $UPLOAD_PATH."place/".$row['vchr_place_pic']; ?>" style="width: 350px; height: 250px;">
            <figcaption>
                <p><span><?php echo $row['vchr_description']; ?> 
                Size : <?php echo $row['size_of_add']; ?></span></p>
            <h2>	<?php echo $row['vchr_place_name']; ?> </h2>
            </figcaption>
        </figure>
        </div>
      <?php   
        }
      ?>
    </div>
  </div>
</div>