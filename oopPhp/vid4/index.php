<?php
include 'person.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
    <body>

        <?php
            // $pet01 = new Pet();
            $pet01 = new Person();

            echo $pet01->owner();
        ?>

    </body>
</html>