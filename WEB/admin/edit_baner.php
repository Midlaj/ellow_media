<?php
include("settings.php");  
include("include/dbconnect.php");
$id=$_GET['id'];

$stm = $link->prepare("SELECT * FROM tbl_banner WHERE pk_int_banner_id = $id");
$stm->execute();
$rw=$stm->fetch();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baner</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/validate1.js" type="text/javascript"></script>


</head>

<body>

    <div id="wrapper">
       <!-- Navigation -->
		<?php
		include('header.php'); 
		?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
               	<div class="col-md-8 col-md-offset-2">
                   	<h3 class="">Edit Baner</h3>
               		<div class="box-primary">
	               		<form method="post" action="update_baner.php" enctype="multipart/form-data">
	 					
                        <div class="form-group">
						<label>Image</label> 
						<?php  $img=$rw['vchr_banner_name']; 
						if(!empty($img)){ ?>
							<img src="uploads/<?php echo $img ?>" width="110" height="80" /><br />
	 					<?php } ?>
	 					<input name="image" type="file" id="image" class="form-control">
						</div>  

                        <div class="form-group">
                        <label>title</label>
                        <input class="form-control" name="title" type="text"  id="title" value="<?php echo $rw['vchr_title']; ?>" placeholder="title">
                        </div>      
	 					
	 					<div class="form-group">
	 					<input type="hidden" name="userid" value="<?php echo $id ?>" />
	 					<button type="submit" id="submit" name="update" class="btn btn-primary" 
	 					onClick="return edit(<?php echo $id?>);">Update</button>
	 					</div>	
	 					
                        </form>               
        			</div>
   				</div>
				</div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
