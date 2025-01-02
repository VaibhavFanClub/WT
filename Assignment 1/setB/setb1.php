<!DOCTYPE html>
<html>
<head>
    <title>set B - q1</title>
</head>
<body>
    <?php
        $a = 4;
        $b = 5;
        $c = 6;
        echo "Three values are = " . $a . "," . $b . "," . $c . "<br>";
        if($a > $b && $a > $c){
            echo "a is the largest number<br>";
        } else if($b > $a && $b > $c){
            echo "b is the largest number<br>";
        } else {
            echo "c is the largest number<br>";
        }
    ?>
</body>
</html>