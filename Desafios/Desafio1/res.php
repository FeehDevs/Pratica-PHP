<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado da sua pesquisa</h1>
        <?php 
            $num = $_GET["campo"];
            echo "O antecessor do seu número é " . $num - 1  . "<br>";
            echo "O número escolhido é $num <br>";
            echo "O sucessor do seu número é " . $num + 1 . "<br>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>