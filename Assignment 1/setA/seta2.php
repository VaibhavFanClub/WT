<!DOCTYPE html>
<html>
<head>
    <title>set A - q2</title>
</head>
<body>
    <?php 
        $s_name = "Rahul";
        $s_rollNo = 1;
        $s_marks = array(45, 54, 60);
        echo "<h1>Student Info:</h1>";
        echo "Name: " . $s_name . "<br>";
        echo "Roll No: " . $s_rollNo . "<br>";
        echo "Marks: " . implode(", ", $s_marks) . "<br>";
    ?>
</body>
</html>