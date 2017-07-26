<?php
ob_start();
include("include/dbconnect.php");
include("settings.php");
include("resize-class.php");

if(isset($_POST['update'])) {
	$title		=		$_POST['title'];
	$description=		$_POST['description'];	
	$id=$_POST['userid'];
	
	$statement = $link->prepare("UPDATE tbl_news SET vchr_title='$title', vchr_description ='$description' WHERE pk_int_news_id=$id");
	$statement->execute();	
}

/*
$array=array("username"=>$username,"pwd"=>$pwd,"sex"=>$sex,"area"=>$areacode);
$lastid=$main->saveArray($table,$array,0);
*/
// 
header("Location:news.php?id=$id");	
?>