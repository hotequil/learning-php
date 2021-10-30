<?php 
    require_once "connection.php";
    require_once "utils.php";

    $code = intval($_REQUEST['code']);

    $consult = "DELETE FROM $table WHERE code=$code";

    mysqli_query($connection, $consult) or die("error consult: " . mysqli_connect_error());

    redirect();
?>
