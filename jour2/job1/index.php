<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>
    <?php
        $nombre = 0;
        while ($nombre <= 1337) {
            if ($nombre == 42) {
                echo "<strong><u>$nombre</u></strong> <br>";
            }
            else {
                echo "$nombre<br>";
            }
            $nombre++;
        }
    ?>
</body>
</html>