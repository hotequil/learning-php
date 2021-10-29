<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista</title>
        <style>
            td, table{
                border:1px solid #000;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Curso</td>
                    <td>Semestre</td>
                    <td>Carga horária</td>
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>
            </thead>
            <thbody>
                <?php 
                    require_once "connection.php";

                    $consult = "SELECT code, name, course, semester, workload FROM $table ORDER BY code";
                    $result = mysqli_query($connection, $consult);

                    while(list($code, $name, $course, $semester, $workload) = mysqli_fetch_row($result)){
                        echo "<tr>
                            <td>$code</td>
                            <td>$name</td>
                            <td>$course</td>
                            <td>$semester</td>
                            <td>$workload</td>
                            <td><a href='save.php?code=$code' target='_self'>Editar</a></td>
                            <td><a href='delete.php?code=$code' target='_self'>Excluir</a></td>
                        </tr>";
                    }
                ?>
            </thbody>
        </table>
        <a href='save.php' target='_self'>Criar</a>
    </body>
</html>
