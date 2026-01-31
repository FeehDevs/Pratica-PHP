<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de aposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Robson BET</h1>
    </header>
    <section>
       <h2>Bakara</h2>
       <p>
        Neste jogo voce irá dizer se o numero sorteado foi maior ou menor que 50
       </p>
       <form action="bet.php" method="get">
        <label for="menor">menor</label>
        <input type="button" value="menor" name="menor">
        <label for="empate">empate</label>
        <input type="button" value="empate" name="empate">
        <label for="maior">maior</label>
        <input type="button" value="maior" name="maior">
       </form>
    </section>
</body>
</html>
