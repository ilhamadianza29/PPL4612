<?php
include("../../config.php");

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];


    $sql = "INSERT INTO user(username, email, password, confirm_password)VALUES('$username','$email','$password','$confirm_password')";
    $query=mysqli_query($conn,$sql);    
    if($query){
        echo"<script>alert('Register sukses!')</script>";
        echo "<script>top.location='../../pages/login.php'</script>";
    }else{
        echo"<script>alert('Register gagal!')</script>";
        echo "<script>top.location='../../pages/login.php'</script>";
    }


?>
