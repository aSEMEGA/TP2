<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <style>
        .tables {
            display: flex;

        }

       

        p {
            font-size: 20px;
        }

        table {
            border-collapse: collapse;
        }

        th {
            background: black;
            padding: 4px;
            color: white;
        }

        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $cfa =   array(17500, 18000, 20000, 380500, 62800, 12500, 4100, 22300, 345000, 15300);
    $euro = array();
    $i = 0;
    foreach ($cfa as $value) {
        $euro[$i] = $value / 655.5;
        $i++;
    }
    ?>

    <div class="tables">
        
            <table border="" cellspâcing="0" width="300">
                <tr>
                    <th>MONTANT EN FCFA</th>

                </tr>
                <?php
                foreach ($cfa as $key => $value) {
                    echo "<tr>
                    <td>  $value</td>
                    
                    </tr>";
                }

                ?>
            </table>
            <table border="" cellspâcing="0" width="300">
                <tr>
                    <th>MONTANT EN EURO</th>

                </tr>
                <?php
                foreach ($euro as $key => $value) {
                    echo "<tr>
                    <td>  $value </td>
                    
                    </tr>";
                }
                ?>
            </table>
    
        <?php
        $sumCFA = 0;
        foreach ($cfa as $key => $value) {
            $sumCFA += $value;
        }
        $sumEuro = 0;
        foreach ($euro as $key => $value) {
            $sumEuro += $value;
        }
        ?>
    </div>

    <div class="rst">
        <p><?= "La somme des montants en franc CFA est: $sumCFA"; ?></p>
        <p><?= "La somme des montants en Euro est: $sumEuro"; ?></p>
    </div>
</body>

</html>