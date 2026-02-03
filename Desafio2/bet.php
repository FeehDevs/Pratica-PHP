<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Boa sorte!</h1>
    </header>
    <section>
        <?php
        $menor = ($_GET['menor'] ?? '') === 'menor'; // ?? operador de coalesencia nula, faz uma condicional e determina um valor base
        $empate = ($_GET['empate'] ?? '') === 'empate'; // === operador logico identico, ele que gera o valor boleano
        $maior = ($_GET['maior'] ?? '') === 'maior';

        $num = rand(1, 100);
        echo "O valor sorteado foi <strong>$num</strong>";
        if ($num < 50 && $menor == true) {
            echo "<p><br>Você ganhou!!!</p>";
        } elseif ($num == 50 && $empate == true) {
            echo "<p><br>Você ganhou!!!</p>";
        } elseif ($num > 50 && $maior == true) {
            echo "<p><br>Você ganhou!!!</p>";
        } else {
            echo "Você Perdeu!!!";
        }
        ?>
    </section>
</body>

</html>