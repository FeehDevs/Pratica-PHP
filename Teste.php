<pre>
    <?php 
        $inicio = date("m-d-Y", strtotime("- 7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-18-2026\'&@dataFinalCotacao=\'02-25-2026\'&$top=5&$orderby=cotacaoCompra%20desc&$format=json&$select=cotacaoCompra';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados ["value"][0]["cotacaoCompra"];

        echo "$cotacao";
    ?>
</pre>