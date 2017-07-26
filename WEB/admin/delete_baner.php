<?php
 include("include/dbconnect.php");
                               
 $id=$_GET['id'];
 $stm = $link->prepare("DELETE FROM tbl_banner where pk_int_banner_id = $id");
 $stm->execute();

 
 ?>
 
 
 <script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.location="baner.php"; ',500);
     // -->
 </script>