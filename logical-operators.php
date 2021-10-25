<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>logical operators</title>
    </head>
    <body>
        <?php
            $number = 5;

            if($number > 2 && $number <= 6) echo "is greater than 2 and less than or equal to 6";
            else echo "is smaller";

            echo "<br>";

            if($number != 5) echo "is different to 5";
            else echo "is equal to 5";
        ?>
    </body>
</html>
