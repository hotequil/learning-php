<?php
    header("Content-type: text/html; charset=ISO-88591");

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "subject";
    $name = $_POST['name'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $workload = $_POST['workload'];
    $connection = mysqli_connect($server, $user, $password, $database);

    mysqli_set_charset($connection, 'utf8');

    if(!$connection) die("error in connection".mysqli_connect_error());

    echo $consult = "INSERT INTO $database(name, course, semester, workload) VALUES ('$name', '$course', '$semester', '$workload')";

    $result = mysqli_query($connection, $consult) or die("error in consult".mysqli_connect_error());

    echo "data salved in database";
?>
