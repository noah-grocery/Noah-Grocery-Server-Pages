<?php 

    $host = "localhost";
    $username = "root";
    $password = "Nlo_9820";
    $database = "noahgrocery";

    // Creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    // Check database connection
    if(!$con)
    {
        die("Connection Failed: ". mysqli_connect_error());
    }


?>