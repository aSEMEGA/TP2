<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $noms = array("Jean", "Pierre", "Paul", "Mohamed", "Helene", "Aicha", "Mariam", "Malik", "Issiaka");
    ?>
    <table border="">
        <tr>
            <th>NUMERO</th>
            <th>NOM</th>
        </tr>
        <?php
        foreach ($noms as $key => $value) {
            echo "<tr>
            <td>" . $key . "</td>
            <td>$value</td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>