<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "studentenrollment.db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error){
    
}
?>