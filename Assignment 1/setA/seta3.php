<!DOCTYPE html>
<html>
<head>
    <title>set A - q3</title>
</head>
<body>
    <?php
        echo "<h1>Time Table</h1>";
        $timeTable = array(
            "Monday" => array("CPP", "WT", "SE", "PP"),
            "Tuesday" => array("WT", "SE", "PP", "CPP"),
            "Wednesday" => array("SE", "WT", "PP", "CPP"),
            "Thursday" => array("PP", "CPP", "WT", "SE"),
            "Friday" => array("CPP", "WT", "SE", "PP"),
            "Saturday" => array("SE", "WT", "PP", "CPP")
        );
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        echo "<tr><th>Day</th><th>8:00</th><th>8:45</th><th>9:30</th><th>10:15</th></tr>";
        foreach($timeTable as $day => $lectures){
            echo "<tr><td>" . $day . "</td>";
            foreach($lectures as $lecs){
                echo "<td>" . $lecs . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>