<?php
    include("../../config.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    session_start();
    $_SESSION['email']=$data['email'];
    $_SESSION['password']=$data['password'];
    if($row==1){
        echo"<script>alert('Login Sukses!!!')</script>";
        echo"<script>top.location='../../pages/dashboard.php'</script>";
    }else{
        echo"<script>alert('Login Gagal!!!')</script>";
        echo"<script>top.location='../../pages/login.php'</script>";
    }
?>