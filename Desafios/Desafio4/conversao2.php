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
        // Datas atualizadas

        $inicio = date("m-d-Y", strtotime("- 7 days"));
        $fim = date("m-d-Y");
        $dataHoje = date("d/m/Y");

        // Cotação do DOLAR

        $urlDol = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=5&$orderby=cotacaoCompra%20desc&$format=json&$select=cotacaoCompra';

        $jsonDol = json_decode(file_get_contents($urlDol), true);

        $cotacaoDol = $jsonDol["value"][0]["cotacaoCompra"];

        // Cotação do euro

        $urlEur = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'EUR\'&@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=cotacaoCompra&$format=json&$select=cotacaoCompra';

        $jsonEur = json_decode(file_get_contents($urlEur), true);

        $cotacaoEur = $jsonEur["value"][0]["cotacaoCompra"];

        //Corrir valores das moedas

        $num = $_GET["valor"];
        $dol = $num / $cotacaoDol;
        $eur = $num / $cotacaoEur;

        //Formatação de moedas
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $real = numfmt_format_currency($padrao, $num, "BRL");
        $dolar = numfmt_format_currency($padrao, $dol, "USD");
        $euro = numfmt_format_currency($padrao, $eur, "EUR");
        ?>

        <h2>Dolar</h2>
        <p>
            No dia de <?= $dataHoje ?> seus
            <strong><?= $real ?></strong>
            equivalem a <strong><?= $dolar ?></strong>
            <br> A cotação é de <?=  $cotacaoDol?>
        </p>
        <h2>Euro</h2>
        <p>
            No dia de <?= $dataHoje ?> seus
            <strong><?= $real ?></strong>
            equivalem a <strong><?= $euro ?></strong>
            <br> A cotação é de <?=  $cotacaoEur?>
        </p>
    </section>
</body>

</html>