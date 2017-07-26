<?php
include("include/dbconnect.php");

$id=$_GET['id'];
$stm = $link->prepare("DELETE FROM tbl_news where pk_int_news_id = $id");
$stm->execute();

?> 


<script language="javascript" type="text/javascript">
    <!--
    window.setTimeout('window.location="news.php"; ',500);
    // -->
</script>