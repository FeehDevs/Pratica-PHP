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
                // Forma antiga de se converter valores monetarios 

               /*  $num = $_GET["valor"];
                $dol = $num / 5.27;
                $eur = $num / 6.21;
                $dol = number_format($dol, 2, ',', '.');
                $eur = number_format($eur, 2, ',', '.');
                $num = number_format($num, 2, ',', '.');
                echo "<h2>Dolar</h2><p>No dia 05/02/2026 seus <strong>R$$num</strong> equivalem a  <strong>US$$dol</strong></p>";
                echo "<h2>Euro</h2><p>No dia 05/02/2026 seus <strong>R$$num</strong> equivalem a <strong>EUR$$eur</strong></p>"; */

                // Forma mais profissional de intercionalizar os formatos de moedas
                
                $num = $_GET["valor"];
                $dol = $num / 5.27;
                $eur = $num / 6.21;

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 
                // Aqui define em qual lingua será feita a formatação

                echo "<h2>Dolar</h2><p>No dia 05/02/2026 seus <strong>" . numfmt_format_currency($padrao, $num, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dol, "USD") . "</strong></p>";
                // Formatação do dolar

                echo "<h2>Euro</h2><p>No dia 05/02/2026 seus <strong>" . numfmt_format_currency($padrao, $num, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $eur, "EUR") . "</strong></p>";
                // Formatação do euro
            ?>
    </section>
</body>
</html>
