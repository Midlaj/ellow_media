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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/sample.js" type="text/javascript"></script>
  <script language="javascript" src="js/datepicker.js"></script>
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
                <h3 class="">
                </h3>
            </div>
          </div>
          <!-- /.row -->
          
          <div class="row">
            <div class="col-md-6">
              <div class="box-primary">
                
                <form method="post" action="save_available.php" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label>Image</label>
                    <input name="image" id="image" type="file" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" name="title" type="text"  id="title" placeholder="">
                  </div>                           
                  <div class="form-group">
                    <button type="submit" id="submit" name="save" class="btn btn-primary" onClick="return reg();">Save</button>
                  </div>
                </form>               
              </div>
            </div>

            <div class="col-md-6">
              <div class="box-warning">
                <ul class="pagination">
                  <li>
                  <?php
                    $stm = $link->prepare("SELECT count(pk_int_available_id) as cnt FROM tbl_available");
                    $stm->execute();
                    $rw1=$stm->fetch();
                    //echo $img['vchr_place'];
          
                    $totalrow= (int)$rw1['cnt'];
                    $stm = $link->prepare("SELECT * FROM tbl_available");
                    $stm->execute();
                    while ($rw=$stm->fetch()) 
                    {
                  ?>
                  <div class="clearfix"></div>
                    <div class="lastresult">
                      <div class="col-md-3">
                      <img class="featurette-image img-responsive" src="<?php echo $UPLOAD_PATH."available/".$rw['vchr_available_pic'];?>">
                      </div>
                      <div class="col-md-7">
                      <?php echo $rw['vchr_title']; ?>
                      </div>
                      <div class="col-md-2">
                      <a class="" href="edit_available.php?id=<?php echo $rw['pk_int_available_id']; ?>" role="button">
                      <span class="glyphicon glyphicon-edit"></span></a><br>
                      <a class="" href="delete_available.php?id=<?php echo $rw['pk_int_available_id']; ?>">
                      <span class="glyphicon glyphicon-remove"></span></a>
                      </div>
                      </div>
                      <?php } ?> 
                      <?php
                      // $option['counter'] = $counter;
                      // $option['limit'] = $limit;
                      // $option['totalrow'] = $totalrow;

                      // if(!@$search){ 
                      //     $option['url'] = "";
                      // }else{
                      //     $option['url'] = "";
                      // }
                      include('paginate.php');
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
