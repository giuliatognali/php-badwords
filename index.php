<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <!-- chiamata alla pagina badwords.php -->
    <form action="badwords.php" method="GET">
        <div>
            <label for="badword">Parola da censurare</label>
            <input type="text" id="badword" name="badword">
        </div>
        <div>
            <label for="text-start">Testo</label>
            <textarea name="text-start" id="text-start" cols="30" rows="10"></textarea>
        </div>
        <button>Invio</button>
    </form>
</body>

</html>