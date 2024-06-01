<?php
    include 'connection.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select * from admin;";
    $admin=mysqli_query($con,$sql);
     foreach($admin as $element){
        if($element["username"]==$username && $element["password"]==$password){
            header ("location:collections.php");
            die();
        }
     }
     if(true){
            header("location:index.php");
     }
    ?>