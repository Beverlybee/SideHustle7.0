<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Hustle Week 3</title>
</head>
<body>
    <?php
        include "connect.php";
    ?>
    <?php
        function multiply($num1, $num2, $num3 = 5) {
            $result = $num1 * $num2 * $num3;
            return $result;
        }
        if ($db_connect){
            echo "connected";
        }
    ?>
</body>
</html>