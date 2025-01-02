
<html>
    <body>
        <?php 
            // print php version and configuration
            echo "PHP version: " . phpversion() . "<br>";
            echo "PHP configuration file (php.ini): " . php_ini_loaded_file() . "<br>";
            echo "PHP info" . phpinfo();
        ?>
    </body>
</html>