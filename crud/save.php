<!DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Save</title>
    </head>
    <body>
        <?php
            require_once "connection.php";
            require_once "utils.php";

            function hasCode($value){
                return $value !== 0;
            }

            $isSubmitted = isset($_POST['submit']);
            $code = intval($_REQUEST['code']);
            $name = $_POST['name'];
            $course = $_POST['course'];
            $semester = $_POST['semester'];
            $workload = $_POST['workload'];

            if(hasCode($code) && $isSubmitted){
                $consult = "UPDATE $table SET name='$name', course='$course', semester='$semester', workload='$workload' WHERE code=$code";
                
                mysqli_query($connection, $consult) or die("error consult: " . mysqli_connect_error());

                redirect();
            } else if(hasCode($code)){
                $consult = "SELECT code, name, course, semester, workload FROM $table WHERE code=$code";
                $result = mysqli_query($connection, $consult) or die("error consult: " . mysqli_connect_error());

                list($code, $name, $course, $semester, $workload) = mysqli_fetch_row($result);
            } else if($isSubmitted){
                $consult = "INSERT INTO $table(name, course, semester, workload) VALUES ('$name', '$course', '$semester', '$workload')";
                
                mysqli_query($connection, $consult) or die("error consult: " . mysqli_connect_error());

                redirect();
            }
       ?>

        <form name="form" action="save.php" method="POST">
            <fieldset>
                <legend>Subject</legend>
                
                <div>
                    <label for="name">Name</label>
                    <input value="<?php echo $name ?>" type="text" name="name" id="name" maxlength="50">
                </div>

                <div>
                    <label for="course">Course</label>
                    <input value="<?php echo $course ?>" type="text" name="course" id="course" maxlength="50">
                </div>

                <div>
                    <label for="semester">Semester</label>
                    <input value="<?php echo $semester ?>" type="number" max="99" min="1" name="semester" id="semester">
                </div>

                <div>
                    <label for="workload">Workload</label>
                    <input value="<?php echo $workload ?>" type="number" max="999" min="1" name="workload" id="workload">
                </div>

                <input value="Salvar" name="submit" type="submit">
                <input value="<?php echo $code ?>" type="hidden" name="code" id="code">
                <a href="list.php" target="_self">Voltar</a>
            </fieldset>
        </form>
    </body>
</html>
