<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resulotado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_GET); exibe informações detalhadas sobre uma variável, mostrando seu tipo e valor, sendo usada para depuração.

            //$_REQUEST ele pega informação dos metodos get, post e cookkies, porém consome mais memoria.

            $nom = $_GET["nome"] ?? "Não te";
            $snom = $_GET["sobrenome"] ?? "Conheço";
                //"??" operador de coalescência nula, neste caso, se não houver informação do $_GET ele usa a informação definida
            echo "É um prazer te conhecer,<strong> $nom $snom!</strong> Este é o me site";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>

    </main>
</body>
</html>
