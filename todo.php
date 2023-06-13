<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo.com</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-color: bisque;
    }
    .btn{
        /* border-color: 2px solid blue; */
        margin: 26px;
        padding: 6px;
        border-radius: 5px;
    }
</style>
<body>
    <?php
    session_start();
        //  print_r($_SESSION);   
        if(!$_SESSION){
            $location = "login.php";
            header("Location:$location");
        }
        require("db_config.php");
    ?>
    <center>
    <form action="operation36.php" method="post">
        <input type="submit" value="logout" name="operation" class="btn">
    </form>
    </center>
</body>
</html>