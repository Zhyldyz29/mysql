<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Choisissez des fruits</p>
    <form action="checkbox.php" method="GET">
        <?php
        $fruit = fopen("fruits.txt", "r");

        while (!feof($fruit)) {
            $ligne = rtrim(fgets($fruit),"\n\r"); ?>
            <input type="checkbox" name="fruit[]" value="<?= $ligne ?>"><?= $ligne ?> <br>
        <?php }
        ?>
        <input type="submit" value="envoyer">

    </form>
</body>

</html>