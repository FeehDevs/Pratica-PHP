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
                echo "<h2>Dolar</h2><p>O valor do dolar no dia 05/02/2026 é de R$$dol</p>";
                echo "<h2>Euro</h2><p>O valor do eur no dia 05/02/2026 é de R$$eur</p>"

            ?>
    </section>
</body>
</html>