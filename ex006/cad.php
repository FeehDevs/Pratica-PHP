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
            //var_dump($_GET); | $_REQUEST ele é a junção da superglobal get, post e cookkies
            $nom = $_GET["nome"];
            $snom = $_GET["sobrenome"];
            echo "É um prazer te conhecer,<strong> $nom $snom!</strong> Este é o me site";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
        
    </main>
</body>
</html>
