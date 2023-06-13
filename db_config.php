<?php
# Here we will connect the webpage to the database

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "theory";

# Connecting it ....
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);


# Checking the connection is done or not !
if(!$conn){
    echo "404 database not connected".mysqli_connect_error();
}
// else{
//     echo "Connected successfully";
// }
// Connected successfully !
?>