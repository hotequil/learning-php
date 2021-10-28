<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>repeating loops</title>
    </head>
    <body>
        <?php
            $index = 0;

            echo "<strong>while</strong> <br>";

            while($index <= 10){
                echo "$index <br>";

                $index++;
            }

            $index = 0;

            echo "<br> <strong>do while</strong> <br>";

            do{
                echo "$index <br>";

                $index++;
            } while($index < 5);

            echo "<br> <strong>for</strong> <br>";

            for($index = 0; $index <= 8; $index++) echo "$index <br>";

            echo "<br> <strong>for and break</strong> <br>";

            for($index = 0; $index < 1000; $index++){
                echo "$index <br>";

                if($index === 15) break;
            }

            echo "<br> <strong>foreach</strong> <br>";

            $list = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

            foreach($list as $number) echo "$number, "
        ?>
    </body>
</html>
