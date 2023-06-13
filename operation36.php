<?php
require("db_config.php");
session_start();

# To insert in the database we will use

if($_POST){
    if($_POST['operation'] == 'signup')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];

        $sql = "insert into student(name,email,password,number)values('$name','$email','$password','$number')";

        if(mysqli_query($conn , $sql)){
            $location = "login.php";
            header("Location:$location");
        }
    }
}




?>