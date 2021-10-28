<?php 
    header("Content-type: text/html; charset=ISO-88591");

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "graduation";
    $table = "subject";
    $connection = mysqli_connect($server, $user, $password, $database) or die("error in connection: ".mysqli_connect_error());

    mysqli_query($connection, 'SET character_set_results=utf8');
?>
