<?php
 include("include/dbconnect.php");
                               
 $id=$_GET['id'];
 $stm = $link->prepare("DELETE FROM tbl_place where pk_int_place_id = $id");
 $stm->execute();

 
 ?>
 
 
 <script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.location="place.php"; ',500);
     // -->
 </script>