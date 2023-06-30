<?php 
$paragrafSer = $_GET["paragraf"];
$censoredServ = $_GET["censored"];
$chenge
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>
        <?php echo str_replace($censoredServ,"****",$paragrafSer)?>
    </h1>
</body>
</html>