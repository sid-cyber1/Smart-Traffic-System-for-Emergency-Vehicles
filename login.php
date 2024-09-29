<?php


     $con=mysqli_connect('localhost','root');
     if($con){
        echo"connection successfully";
     }
     else{
        echo"nO CONNECTION";

     }
    mysqli_select_db($con,'subtle');
    $name=$_POST['uname'];
    $pass=$_POST['pass'];




    $quer="Select * from users where username ='$name' && password= '$pass'";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
      header("Location:index.html");

    }
     else{
     echo '<script type="text/javascript">
         alert("Wrong username or  password");
         window.location = "login.html";
         </script>';
      
      //header("Location:login.html");
//echo ' header("Location:login.html") <script>alert("Wrong Username and  password ")</script>';

     } 
    
     ?>