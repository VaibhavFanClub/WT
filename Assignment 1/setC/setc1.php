<!DOCTYPE html>
<html>
<head>
    <title>set C - q1</title>
</head>
<body>
    <?php
        $cnt = 1;
        for($i = 1; $i <= 4; $i++){
            for($j = 1; $j <= $i; $j++){
                echo $cnt . " ";
                $cnt += 1;
            }
            echo "<br>";
        }
    ?>
</body>
</html>