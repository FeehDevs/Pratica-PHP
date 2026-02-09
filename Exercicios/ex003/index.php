<?php 
    $nome = "felipe";
    $sobrenome = "silva";
    $idade = 19;
    $cont = 0;
    echo "Ola, $nome $sobrenome! Seja bem-vindo ao PHP.";
    echo "<br/>";

    if($idade >= 18 && $nome == "felipe") {
        echo "$nome, você com $idade anos está evoluindo no PHP";
    }

    while ($cont <= 10) {
        echo "$cont";
        $cont = $cont + 1;
    }

const pais = "brasil";
echo "<br/>";
echo "<br/>";
echo "Voce mora em ". pais .  " seu Amigão";
?>
