<?php
$testo = 'Io sono un albero molto grande, verde e folto.';
$lunghezzaTesto = strlen($testo);
$badword = $_GET['badword'];
$testoMod = str_replace($badword, '***', $testo);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php badwords</title>
</head>
<body>
<div>
    <p>
        <?php
        echo $testo;
        ?>
    </p>
    <p>
        Il testo è lungo <?php echo $lunghezzaTesto; ?> caratteri!
    </p>
    <p>
        La badword è <?php echo $badword ?>
    </p>
    <p>
        <?php echo $testoMod ?>
    </p>
</div>
<div>
    <form action="index.php">
        <label for="badword"></label><input id="badword" type="text" name="badword" placeholder="Inserisci Badword...">
        <input type="submit" value="Invia">
    </form>
</div>
</body>
</html>

