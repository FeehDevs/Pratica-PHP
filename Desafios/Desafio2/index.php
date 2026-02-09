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
        Um número será sorteado, voce deve escolher se ele será maior, menor ou exatamanete 50.
        <br>
        <br>
        <strong>Lembrando que a escala de números vai até 100</strong>
       </p>
       <form action="bet.php" method="get">
        <label for="menor">< 50</label>
        <input type="submit"  value="menor" name="menor">
        <label for="empate">50</label>
        <input type="submit" value="empate" name="empate">
        <label for="maior">> 50</label>
        <input type="submit" value="maior" name="maior">
       </form>
    </section>
</body>
</html>
