<?php
include("db_connect.php");

if($conn){
    if(isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO user(first_name,last_name,email,password) VALUES('$first_name','$last_name','$email','$password')";
        if(mysqli_query($conn,$sql)){
            echo "Data Inserted into user table";
        }else{
            echo "Unknown Error";
            header('location:index.php');
        }

    }
}
mysqli_close($conn);
?>
