<?php
$servername = "localhost";
$username = "fahmid";
$password = "123456";
$dbname = "ajax_user_crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




    // if (!defined('DB_HOST')) define('DB_HOST','localhost');
    // if (!defined('DB_USER')) define('DB_USER','root');
    // if (!defined('DB_PASS')) define('DB_PASS','');
    // if (!defined('DB_NAME')) define('DB_NAME','ajax_user_crud');

    // $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // if($conn){
    //     // echo "Successfull";
    // } else {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
?>