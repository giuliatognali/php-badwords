<?php

var_dump($_GET);

$badword = $_GET['badword'];
$text = $_GET['text-start'];
//echo $badword;
//echo $text;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>Bad Words</h1>
    <p>Parola da censurare: 
        <?php echo $badword;
        ?>
    </p>
    <p>Testo: 
        <?php echo $text;
        ?>
    </p>
    
</body>
</html>