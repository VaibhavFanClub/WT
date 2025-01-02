<!DOCTYPE html>
<html>
<head>
    <title>set C - q3</title>
</head>
<body>
    <?php
        $num = 25;
        echo "Number = " . $num . "<br>";
        $res;
        ($num > 30) ? ($res = "Number greater that 30") : (($num > 20) ? ($res = "Number greater than 20") :(($num > 10) ? ($res = "Number greater than 10") : ($res = "Number less than 10")));
        echo $res;
    ?>
</body>
</html>