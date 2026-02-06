<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Valor Convertido</h1>
    <section>
            <?php 
                $num = $_GET["valor"];
                $dol = $num / 5.27;
                $eur = $num / 6.21;
                $dol = number_format($dol, 2, ',', '.');
                $eur = number_format($eur, 2, ',', '.');
                echo "<h2>Dolar</h2><p>No dia 05/02/2026 seus R$$num equivalem a  US$$dol</p>";
                echo "<h2>Euro</h2><p>No dia 05/02/2026 seus R$$num equivalem a  EUR$$eur</p>";
            ?>
    </section>
</body>
</html>
