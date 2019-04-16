<?php

$con= mysqli_connect("localhost", "root", "", "cms");

?>
<?php
if(isset($_GET['del']))
{
    $del_id=$_GET['del'];
    $query ="DELETE FROM `users` WHERE `users`.`id` = $del_id";
        if(mysqli_query($con,$query))
        {
           echo"<script>alert('user deleted successfully !!')</script>";
         echo"<script>window.open('user.php','_self')</script>";
}
    else
    {
   echo"<script>alert('Something Went Wrong. Please Try Again !!')</script>";
         echo"<script>window.open('user.php','_self')</script>";
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fitwellgym</title>
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
                        <a href="paid.php" class="list-group-item"> <i class="fa fa-user"></i> All Fee Paid Members <span class="badge">**</span> </a> <a href="unPaid.php" class="list-group-item"> <i class="fa fa-user"></i> All Fee <strong>Unpaid</strong> Members <span class="badge">**</span> </a> > </div>
                </div>
            <div class="col-md-9">
                <h1><i class="fa fa-user"></i> Paid Users<hr>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html" class="active"> <i class="fa fa-tachometer"></i> Dashboard</a>
                    </li>
                    <li class="active"> <i class="fa fa-users"></i>Paid Users</li>
                </ol>
                
              
                
                <div class="row">
                
                 
                 <div class="col-sm-8">
                    
                 <a href="add_user.php" class="btn btn-warning">Add New</a>
                 </div>
                  
                    </div><hr>
                    
                    
                    <table class="table table-hower table-border table-stripped">
                        <thead>
                            <tr>
                              
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Fees</th>
                                <th>Edit info</th>
                                <th>Delete user</th>

                                
                            </tr>
                        </thead>
                        <tbody>
                     <?php
          $query='SELECT * FROM users  WHERE fees="Paid"';
                $run =mysqli_query($con,$query);
                if(mysqli_num_rows($run)>0)
                {
                    
                ?>
                      
                            
                 <?php
                    while($row = mysqli_fetch_array($run))
                    {
                        $id=$row['id'];
                        $first_name=$row['first_name'];
                        $last_name=$row['last_name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $fees=$row['fees'];
                        
                
    
                    ?>
                           
                           
                            <tr>
                               
                               
                                
                                <td><?php echo $first_name; ?></td>
                                <td><?php echo $last_name; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><?php echo $email; ?></td>
                                
                               
                                <td><?php echo $fees; ?></td>
                               
                                <td><a href="edit_info.php?view=<?php echo $id;?>"<i class="fa fa-pencil"></i></a></td>
                                <td><a href="paid.php?del=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
                            </tr>
                      <?php 
                    }
                            ?>
                        </tbody>
                        
                    </table>
                    
                    
                    <?php
                }
                else
                    echo "<h2><center> NO data Available</center></h2>"
                ?>
                    
                    
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>