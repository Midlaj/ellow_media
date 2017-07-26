<?php
 include("include/dbconnect.php");
                               
 $id=$_GET['id'];
 $stm = $link->prepare("DELETE FROM tbl_available where pk_int_available_id = $id");
 $stm->execute();

 ?>
 
 
 <script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.location="available.php"; ',500);
     // -->
 </script>