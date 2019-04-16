<?php

$con= mysqli_connect("localhost","root","","cms");
            if(isset($_POST['submit']))
            {
               $id = mysqli_real_escape_string($con,$_POST['id']);
                $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
                $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
                $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $fees = mysqli_real_escape_string($con,$_POST['fees']);
               
               
                    
               echo $sql ="UPDATE user SET `first_name`=$first_name,`last_name`=$last_name,`mobile`=$mobile,`email`=$email,`fees`=$fees WHERE id='$id'";

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