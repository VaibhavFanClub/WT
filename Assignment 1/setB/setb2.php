<!DOCTYPE html>
<html>
<head>
    <title>set B - q2</title>
</head>
<body>
    <?php
        $num = 153;
        $temp=$num;
        echo "Number = " . $num . "<br>";
        if($num > 0){
            $sum = 0;
            while($num > 0){
                $rem = $num % 10;
                $sum += $rem * $rem * $rem;
                $num = intval($num / 10);
            }
            if($sum == $temp){
                echo "armstrong number<br>";
            } else {
                echo "not an armstrong number<br>";
            }
        } else {
            echo "number cannot be negative<br>";
        }
    ?>
</body>
</html>
