<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup.com</title>
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

    .mar {
        color: brown;
    }
</style>

<body>
    <center>
        <div class="container">
            <h2><i>SIGNUP PAGE</i></h2>
        </div>
        <div class="mar">
            <h3><i>
                    <marquee width="60%" direction="left" height="2px">
                        Fill the form to make you as a member , Thankyou :) <a href="login.php">Click here to go to login page</a>
                    </marquee>
                </i></h3>
        </div>
        <br><br>
        <div class="main">
            <form action="operation36.php" method="post">
                <table>
                    <tr>
                        <th>
                            <label for="Name">Your Name: </label>
                        </th>
                        <td>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required class="inp">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Email">Your Email: </label>
                        </th>
                        <td>
                            <input type="email" name="email" id="email" placeholder="Email" required class="inp">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Password">Your Password: </label>
                        </th>
                        <td>
                            <input type="password" name="password" id="password" placeholder="Password" required class="inp">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Number">Your Number: </label>
                        </th>
                        <td>
                            <input type="text" name="number" id="number" placeholder="Phone Number" required class="inp">
                        </td>
                    </tr>
                </table>
                <!-- <br><br> -->
                <input type="submit" value="SIGNUP" name="operation" class="btn">
            </form>
        </div>
    </center>
</body>

</html>