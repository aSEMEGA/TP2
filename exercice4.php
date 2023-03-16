<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
    <style>
        table {
            border-collapse: collapse;

        }

        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $notes = array(8, 20, 17, 13.75, 15.85, 16, 11, 19, 18, 10);
    ?>
    
        <table border="1" width="100">
            <tr>
                <th>Les Notes</th>
            </tr>
            <?php
            foreach ($notes as $key => $value) {
                echo "<tr>
                <td>$value</td>
                </tr>";
            }
            ?>
        </table>
    
    <?php
    $sum = 0;
    foreach ($notes as $key => $value) {
        $sum += $value;
    }
    $moyenne = $sum / count($notes);
    ?>
    <p><?= "La moyenne de la classe est: $moyenne"; ?></p>
    <?php
    $i = 0;
    foreach ($notes as $key => $value) {
        if ($value > $moyenne) {
            $i++;
        }
    }
    ?>
    <p><?= "Le nombre de note superieure a la moyenne est: $i"; ?></p>
</body>

</html>