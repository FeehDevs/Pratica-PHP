<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Cotação de Moedas</h1>
        <p>Quantos R$ você gostaria de converter?</p>
        <form action="coins.php" method="get">
            <label for="real">R$</label>
            <input type="float" name="valor">
            <button type="submit">Converter</button>
        </form>
    </section>
</body>
</html>