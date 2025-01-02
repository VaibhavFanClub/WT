<!DOCTYPE html>
<html>
<head>
    <title>set B - q3</title>
</head>
<body>
    <?php
        $num = 5;
        $flag = 1;
        for($i = 2; $i < $num; $i++){
            if ($num % $i == 0){
                $flag = 0;
                break;
            }
        }
        if($flag){
            echo $num . " number is prime<br>";
        } else {
            echo $num . " number is not prime<br>";
        }
    ?>
</body>
</html>