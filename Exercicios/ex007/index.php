<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        var_dump ("3" . "3"); // Concatenação
        var_dump ("3" + "3"); // Adição; mesmo sendo string o php converte > int
        var_dump("10 reais" + "20 euros"); // O php converte para INT
        var_dump("nota 10" + "20 reais"); // ERRO; pois o "nota" o php não converte
    ?>
</body>
</html>
