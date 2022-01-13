<?php
$db_host="127.0.0.1";
$db_user="root";
$db_password="";
$db_name="e-shop_service";

// $db_host="db4free.net";
// $db_user="harikesh";
// $db_password="12345678";
// $db_name="es_servic";


//creating connection
$conn = new mysqli($db_host,$db_user,$db_password,$db_name);

//checking connection
if($conn->connect_error){
    die("connection faild");
}
?>