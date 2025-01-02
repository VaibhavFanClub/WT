<!DOCTYPE html>
<html>
<head>
    <title>set C - q2</title>
</head>
<body>
    <?php
        $source_code = file('https://www.google.com/');
        foreach ($source_code as $line_number => $last_line) {
            echo nl2br(htmlspecialchars($last_line) . "\n");
        }
    ?>
</body>
</html>