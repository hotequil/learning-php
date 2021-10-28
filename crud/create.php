<?php
    require_once "connection.php";

    $name = $_POST['name'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $workload = $_POST['workload'];
	    
    echo $consult = "INSERT INTO $table(name, course, semester, workload) VALUES ('$name', '$course', '$semester', '$workload')";
    
    $result = mysqli_query($connection, $consult) or die("error in consult: ".mysqli_connect_error());

    echo "<br>";

    echo "data salved in database";
?>
