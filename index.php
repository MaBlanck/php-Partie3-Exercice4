<?php 
$number = 1;
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 4 Partie 3</title>
</head>
<body>
    <h1>Exercice 4 Partie 3</h1>
    <ul><?php 
        while($number < 10): ?>
        <li><?= $number ?></li>
        <?php $number += ($number / 2);
        endwhile; ?>
    </ul>

</body>
</html>