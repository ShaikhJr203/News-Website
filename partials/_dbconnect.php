<?php
$server = "localhost";
$usernam = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $usernam, $password, $database);
if(!$conn){
//     echo "Succeess";
// }else{
    die("Error".mysqli_connect_error());
}

?>