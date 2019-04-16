<?php
if(isset($_GET['view']))
{
    $view_id=$_GET['view'];
$con= mysqli_connect("localhost", "root", "", "cms");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FitwellGym</title>
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
                        <a href="user.php" class="list-group-item"> <i class="fa fa-user"></i> All Members <span class="badge">14</span> </a>
                        <a href="category.php" class="list-group-item"> <i class="fa fa-user"></i> All Fee Paid Members <span class="badge">14</span> </a> <a href="category.php" class="list-group-item"> <i class="fa fa-user"></i> All Fee <strong>Unpaid</strong> Members <span class="badge">14</span> </a> > </div>
                </div>
            <div class="col-md-9">
                <h1><i class="fa fa-user-plus"></i> EDIT Users<hr>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html" class="active"> <i class="fa fa-tachometer"></i> Dashboard</a>
                    </li>
                    <li class="active"> <i class="fa fa-user-plus"></i> Add new Users</li>
                </ol>
           
                 <?php
            if(isset($_POST['submit']))
            {
               $id = mysqli_real_escape_string($con,$_POST['id']);
                $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
                $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
                $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $fees = mysqli_real_escape_string($con,$_POST['fees']);
               
               
                    
               echo $sql ="UPDATE users SET `first_name`='$first_name',`last_name`='$last_name',`mobile`='$mobile',`email`='$email',`fees`='$fees' WHERE id='$id'";

if (mysqli_query($con, $sql)) 
    {
                      echo"<script>alert('Successfully Updated!!')</script>";
         echo"<script>window.open('user.php','_self')</script>";  
              
                    }
                   else{
                         
                     echo"<script>alert('Something Went Wrong. Please Try Again !!')</script>";
         echo"<script>window.open('user.php','_self')</script>"; 
                    }
                
            }
            ?>
                          
            <div class="col-md-8">
                
                  <form action="" method="post" enctype="multipart/form-data">
                    <?php
                $query="SELECT * FROM users where id='$view_id'";
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
                  <div class="form-group">


                      <label for="first_name">
                        First Name:*  
                      </label>
                      <?php 
                      if(isset($error))
                      {
                          echo "<span
                        class='pull-right' style='color:red;'>$error</span>"
    ;                      
                      }?>


                      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="<?php echo$first_name; ?>" required="first required">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="last_name">
                        last Name:*  
                      </label>
                      <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name"value="<?php echo$last_name; ?>">
                  </div>
                  
                 <div class="form-group">
                      <label for="mobile">
                        Mobile Number:*  
                      </label>
                      <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Last Name" value="<?php echo $mobile; ?>" required="mobile number required">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="eamil">
                       Email:*  
                      </label>
                      <input type="email" name="email" id="email" value="<?php echo$email; ?>" class="form-control" placeholder="Email Address">
                  </div>
                  
                  
                  
                  
                  
                   <div class="form-group">
                      <label for="first_name">
                        Fee Paid 
                      </label>
                      <select name="fees" id="fees" class="form-control">
                        <option value="<?php echo$fees; ?>"> <?php echo$fees; ?></option>
                          <option value="Paid">Yes</option>
                          <option value="Unpaid">No</option>
                          
                      </select>
                  </div>
                  
                  <input type="text" name="id" id="id"  placeholder="First Name" value="<?php echo$id; ?>" readonly >
                  
                  
                  
            
                  
                  <input type="submit" value="Update Information" name="submit" class="btn btn-primary">
              </form>
         
                <?php
              }
            }
            }
            ?>
            </div>
           
            <div class="col-md-4"></div>
                    
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>