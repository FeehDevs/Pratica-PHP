<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Strings</h1>
    <?php 
    //abaixo o uso do double quoted
        $nome = "Robson";
        echo "Olá $nome <br>";

    //aqui não haverá interpretação
        $animal = 'Lagarto';
        echo 'Olá $animal <br>';

    //uso de constantes, que não irá funcionar pois não está sendo concatenado
        const PAIS = "Brasil";
        echo "Eu moro no PAIS <br>";
    // aqui o uso correto da concatenação
        const ESTADO = "sp";
        echo "Eu vivo em " . ESTADO
    ?>
</body>
</html>