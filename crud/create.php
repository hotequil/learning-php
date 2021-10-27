<?php
    header("Content-type: text/html; charset=ISO-88591");
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "graduation";
    $table = "subject";
    $name = $_POST['name'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $workload = $_POST['workload'];
    $connection = mysqli_connect($server, $user, $password, $database) or die("error in connection: ".mysqli_connect_error());
	
    mysqli_query($connection, 'SET character_set_results=utf8');
    
    echo $consult = "INSERT INTO $table(name, course, semester, workload) VALUES ('$name', '$course', '$semester', '$workload')";
    
    $result = mysqli_query($connection, $consult) or die("error in consult: ".mysqli_connect_error());

    echo "<br>";

    echo "data salved in database";
?>
