<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>

<body>
    <?php
    //Tableau
    $tab = array(13, 10, 3, 7, 6, 5, 0, 34, 9, 05);
    ?>
    <table border="1">
        <tr>
            <?php
            foreach ($tab as $key => $value) {
                echo '<td>' . $value . '</td>';
            }
            ?>
        </tr>
    </table>
    <?php
    //Recherche du minimum
    $min = $tab[0];
    foreach ($tab as $key => $value) {
        if ($min > $value) {
            $min = $value;
        }
    }
    echo "Le minimum est: $min <br>";
    //Recherche du maximun
    $max = $tab[0];
    foreach ($tab as $key => $value) {
        if ($max < $value) {
            $max = $value;
        }
    }
    echo "Le maximum est: $max <br>";

    //calcul de la somme
    $sum = 0;
    foreach ($tab as $key => $value) {
        $sum += $value;
    }
    $moyenne = $sum / count($tab);
    echo "La moyenne est: $moyenne";

    ?>
</body>

</html>