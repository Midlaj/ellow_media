<?php
include('include/dbconnect.php');
include("settings.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Malabar Advertise</title>
    <link rel="icon" href="image/image.ico" type="image/ico" sizes="24x24">

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
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class=""> </h3>
                    </div>  
                </div>
                <!-- /.row -->
                <div class="row">
               	
               	<div class="col-md-6">
	               	<div class="box-primary">
					<form method="post" action="save_baner.php" enctype="multipart/form-data" class="">
	 				<div class="form-group">
						<label>Image</label>
	 					<input name="image" id="image" type="file" class="form-control" />
					</div>             
	 				<div class="form-group">
	 				<button type="submit" name="add" id="submit" class="btn btn-primary"  
	 				onClick="return reg();">Save</button>
	 				</div>
 					</form>               
        			</div>
    			</div>
    			
    			<div class="col-md-6">
     				<div class="box-warning">
						<ul class="pagination">
    					<li>
							<table width="101%" class="table table-bordered">
            				<tr>
            					<th width="28%">Image</th>
								<th width="9%"></th>
							</tr>
							<form>
                			<?php
			 
			                $stm = $link->prepare("SELECT count(pk_int_banner_id) as cnt FROM tbl_banner");
							  $stm->execute();
							  $rw1=$stm->fetch();
							  //echo $img['vchr_place'];
	
			               	$totalrow= (int)$rw1['cnt'];

			            	$stm = $link->prepare("SELECT * FROM tbl_banner");
			                $stm->execute();
			                while ($rw=$stm->fetch()) 
			                {
                    		?>
                    		<tr>
                        	<td height="40">
                            <img class="featurette-image img-responsive" src="<?php echo $UPLOAD_PATH.$rw['vchr_banner_name'];?>" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                        	</td>	
                        	<td><div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="edit_baner.php?id=<?php echo $rw['pk_int_banner_id']; ?>" role="button">EDIT</a>
                                </li>
                                <li>
                                    <a href="delete_baner.php?id=<?php echo $rw['pk_int_banner_id']; ?>');" role="button">DELETE
                                    </a>
                                </li>
                            </ul>
                        </div></td>
                    </tr>
                     <?php } ?>
            </form>
        </table>


        <?php
        // $option['counter'] = $counter;
        // $option['limit'] = $limit;
        // $option['totalrow'] = $totalrow;

        // if(!@$search){
        //     $option['url'] = "";
        // }else{
        //     $option['url'] = "";
        // }

        // include('paginate.php');

        ?>

    </li>
  
</ul>
 
  
  
  

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
