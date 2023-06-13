<!DOCTYPE html>
<html lang="en">
<?php
require("db_config.php");
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login.com</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: bisque;
    }

    .container {
        background-color: aquamarine;
        color: blue;
        border: 3px solid black;
    }

    .main {
        margin: 60px;
    }

    table {
        border: 4px solid brown;
        border-radius: 4px;
    }

    tr {
        border: 0.5px solid black;
        border-radius: 4px;
        margin: 20px;
        padding: 16px;
    }

    td {
        border: 0.5px solid black;
        border-radius: 4px;
        margin: 20px;
        padding: 16px;
    }

    .btn {
        border-color: blue;
        border-radius: 4px;
        margin: 12px;
        padding: 5px;

    }

    .inp {
        border-color: blue;
        padding: 8px;
    }

    .mar{
        color: brown;
    }
</style>

<body>
    <center>
        <div class="container">
            <h2><i>LOGIN PAGE</i></h2>
        </div>
        <div class="mar">
            <h3><i><marquee width="60%" direction="left" height="2px">
                Give your valid email and password to login if you dont it then please signin <a href="signup.php">Click here to signup</a>
            </marquee></i></h3>
        </div>
        <br><br>
        <div class="main">
            <form action="operation36.php" method="post">
                <table>
                    <tr>
                        <th>
                            <label for="Email-Address">Email-Address: </label>
                        </th>
                        <td>
                            <input type="email" name="email" id="email" placeholder="Enter your email" required class="inp">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Password">Password: </label>
                        </th>
                        <td>
                            <input type="password" name="password" id="password" placeholder="Password" required class="inp">
                        </td>
                    </tr>
                </table>
                <!-- <br><br> -->
                <input type="submit" value="login" name="operation" class="btn">
            </form>
        </div>
    </center>
</body>

</html>