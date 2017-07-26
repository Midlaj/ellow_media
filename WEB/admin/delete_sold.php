<?php
 include("include/dbconnect.php");
                               
 $id=$_GET['id'];
 $stm = $link->prepare("DELETE FROM tbl_sold where pk_int_sold_id = $id");
 $stm->execute();

 ?>
 
 
 <script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.location="sold_out.php"; ',500);
     // -->
 </script>