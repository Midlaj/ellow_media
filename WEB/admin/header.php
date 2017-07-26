<?php

 //Db connection    
 require_once('includes/config.php'); 
 //if not logged in redirect to login page
 if(!$user->is_logged_in()){ header('Location: index.php'); } 

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <div class="col-sm-12 col-xs-12">
            <div class="newlogo">
            <a href="index.php">
            <center>
            <img src="images/logo.png" class=" img-responsive" style="width:155px;"></a>
            </div>
            </div>
        </div>
        
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
            </li>
            <li class="message-preview">
                <a href="#">
                <div class="media">
                    <span class="pull-left">
                        <img class="media-object" src="" alt="">
                    </span>
                    <div class="media-body">       
                        <p></p>
                    </div>
                </div>
                </a>
            </li>
            <li class="message-preview">
                <a href="#">
                <div class="media">
                    <span class="pull-left">
                        <img class="media-object" src="" alt="">
                    </span>
                    <div class="media-body">
                        <p class="small text-muted"><i class="fa fa-clock-o"></i></p>
                        <p></p>
                    </div>
                </div>
                </a>
            </li>
            <li class="message-footer">
                <a href="#"></a>
            </li>
            </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">    
                   Logout <i class="fa fa-user"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                        <a href="logout.php" > LogOut</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dash.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="dropdown">
                        <a href="dash.php" class="dropdown-toggle" data-toggle="dropdown">HOME PAGE <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="baner.php">Banner</a>
                            </li>
                            <li>
                                <a href="news.php">News</a>
                            </li>
                            <li>
                                <a href="sold_out.php">Sold out</a>
                            </li>
                            <li>
                                <a href="available.php">Available</a>
                            </li>
                        </ul>
                    </li>

                   
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">ABOUT US<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="categories.php">Add Courses</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">CLIENTS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="placements.php">Add Placements</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">AVAILABILTY<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="place.php">Add Place</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">ENQUIRY<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="placements.php">Add Placements</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">CONTACT<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="placements.php">Add Placements</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="active">
                        <a href="portfolio.php">GALLERY</a>
                    </li>


        
                      <!--
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    -->
                    
              
                </ul>
            </div>
    <!-- /.navbar-collapse -->
</nav>