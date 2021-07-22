<?php

// connecting parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "crudyoutube";

// connecting to the server

$conn = mysqli_connect($servername,$username,$password);

// connecting to the db

mysqli_select_db($conn,$database);

?>



