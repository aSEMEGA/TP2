<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        .container {
            width: 50%;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        table {
            border-collapse: collapse;

        }

        th {

            padding: 3px;
        }

        td {
            text-align: center;
            font-size: 18px;
            padding: 2px;
        }

        p {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php
    $tab = array(
        "fact1" => 12000,
        "fact2" => 27000,
        "fact3" => 11500,
        "fact4" => 65000,
        "fact5" => 18500,
        "fact6" => 35000,
        "fact7" => 42800,
        "fact8" => 13000,
        "fact9" => 57000,
        "fact10" => 60000
    );
    ?>
    <div class="container">
        <table border="1">
            <tr>
                <th>FACTURE</th>
                <th>MONTANT</th>
            </tr>
            <?php
            foreach ($tab as $key => $value) {
                echo "  <tr> 
            <td>$key</td> 
            <td>$value</td>
            </tr>";
            }
            ?>
        </table>
        <?php
        $sum = 0;
        foreach ($tab as $key => $value) {
            $sum += $value;
        } ?>
        <p><?= "Le montant total est: " . $sum; ?></p>
        <p><?= "Le montant moyen d'une facture est: " . $sum / count($tab); ?></p>

    </div>
</body>

</html>