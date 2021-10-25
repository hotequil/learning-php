<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>control structures</title>
    </head>
    <body>
        <?php
            define('OF_AGE', 18);
            define('CAN_VOTE', 16);

            $age = 19;

            if($age < CAN_VOTE) echo "underage and cannot vote";
            else if($age >= OF_AGE) echo "is of legal age";
            else echo "is underage and can vote";

            echo "<br>";

            $color = 'blue';
            $phrase = 'the color is';

            switch($color){
                case 'red':
                    echo "$phrase red";
                    break;
                case 'green':
                    echo "$phrase green";
                    break;
                case 'blue':
                    echo "$phrase blue";
                    break;
                default:
                    echo 'unknown color';
            }
        ?>
    </body>
</html>
