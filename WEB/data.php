<?php
	include('includes/config.php');
	$stm =	$db->prepare("SELECT vchr_title, vchr_banner_name FROM tbl_banner");
	$stm->execute();	
?>