<?php
ob_start();
error_reporting(0);
if(!empty($_POST) && isset($_POST)) {

	include('include/dbconnect.php');
	include("resize-class.php");

	$title			=	$_POST['title'];
	$description	=	$_POST['description'];

	$stm	=	$link->prepare("INSERT INTO tbl_news (vchr_title, vchr_description) VALUES(?,?)");
	$stm->bindParam(1, $title);
	$stm->bindParam(2, $description);
	$stm->execute();

	$stm = $link->query("SELECT LAST_INSERT_ID()");
	$lastId = $stm->fetchColumn();
	header("Location:news.php?id=$lastId");
}
else
{
	header('Location:../index.php');
}
?>