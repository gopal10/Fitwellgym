<?php

$con= mysqli_connect("localhost", "root", "", "cms");

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>FitWellAdmin </title>
        <!-- Bootstrap -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/g.png">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="css/animated.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <marquee style="color: red"> This Admin  panel belongs to fitwellgym</marquee>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="index.php">FitWellAdmin </a> </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="user.php"><i class="fa fa-plus-square" aria-hidden="true"></i> View Total members</a></li>
                        <li><a href="add_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Member</a></li>
                        <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item active"> <i class="fa fa-tachometer"></i> Dashboard </a>
                        <a href="user.php" class="list-group-item"> <i class="fa fa-user"></i> All Members <span class="badge">**</span> </a>
                        <a href="paid.php" class="list-group-item"> <i class="fa fa-user"></i> All Fee Paid Members <span class="badge">**</span> </a> <a href="Unpaid.php" class="list-group-item"> <i class="fa fa-user"></i> All Fee <strong>Unpaid</strong> Members <span class="badge">**</span> </a> > </div>
                </div>
                <div class="col-md-9">
                    <h1>
          
  <i class="fa fa-tachometer"></i>  Dashboard <small>Statitics Overview</small><hr>
 
                </h1>
               
                    <div class="row tag-boxes">
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3"> <i class="fa fa-file-text fa-5x"></i> </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">**</div>
                                            <div class="text-right">All Members</div>
                                        </div>
                                    </div>
                                </div>
                              
                               <a href="user.php">
                                    <div class="panel-footer"> <span class="pull-left"><i class="fa fa-arrow-circle-right"></i> click here to view</span> <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    </a>
                            </div>
                        </div>
                                

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3"> <i class="fa fa-users fa-5x"></i> </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">**</div>
                                            <div class="text-right">Paid members</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="paid.php">
                                    <div class="panel-footer"> <span class="pull-left"><i class="fa fa-arrow-circle-right"></i> click here to View All</span> <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                 
                    


                    <div class="row tag-boxes">
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3"> <i class="fa fa-file-text fa-5x"></i> </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">**</div>
                                            <div class="text-right">Unpaid Members</div>
                                        </div>
                                    </div>
                                </div>
                               <a href="Unpaid.php">
                                    <div class="panel-footer"> <span class="pull-left"><i class="fa fa-arrow-circle-right"></i> click here to view</span> <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    </a>
                            </div>
                        </div>
                      

                      <div class="col-md-6 col-lg-3">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3"> <i class="fa fa-user-plus fa-5x"></i> </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">*</div>
                                            <div class="text-right">Add Member</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="add_user.php">
                                    <div class="panel-footer"> <span class="pull-left"><i class="fa fa-arrow-circle-right"></i> click here to Add</span> <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>          

</div>


                  
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>