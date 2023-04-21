<?php

//var_dump($_GET);

$badword = $_GET['badword'];
$text = $_GET['text-start'];
//echo $badword;
//echo $text;
$length_text = strlen($text);

$text_censure = str_ireplace($badword, '***', $text);
//echo $text_censure;die;

$length_text_censure = strlen($text_censure);
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
    <h2>Il nostro testo: </h2>
        <p>
        <?php echo $text;
        ?>
    </p>
    <p>Parola da censurare: 

        <?php echo $badword;
        ?>
    </p>
    <p>Lunghezza del nostro testo: 
    <?php echo $length_text;
        ?> caratteri.
    </p>
    <h2>Testo censurato:</h2>
    <p>
    <?php echo $text_censure;
        ?>
    </p>
    <p>Lunghezza del testo censurato: 
    <?php echo $length_text_censure;
        ?> caratteri.
    </p>

</body>
</html>