

<!-- QUESTÃO 2 "Dado a sequência de Fibonacci..."-->

<?php

//DIGITE O NUMERO DESEJADO NESSA VARIAVEL//
$numero = 34;

$ultimo = 1;
$anterior = 0;
$Fibonacci = 0;

for($count = 1 ; $count <= $numero ; $count++){
    $Fibonacci = $ultimo + $anterior;

    $anterior = $ultimo;
    $ultimo = $Fibonacci;

    if ($numero === $Fibonacci) {
        break;
    }
}

if ($numero === $Fibonacci){
    echo $numero . ' Esse numero esta dentro da Sequência Fibonacci <br>';
} else {
    echo $numero . ' Esse numero não dentro da Sequência Fibonacci <br>';
}

?>

<!-- QUESTÃO 3 "Dado um vetor que guarda o valor de faturamento..."-->

<?php

$Arquivo = file_get_contents("dados.json");
$Array = json_decode($Arquivo, true);
$maiorvalor = 0;
$menorvalor = '';
$media = 0;
$soma = 0;
$dias = 0;


for ($i = 0; $i <= count($Array)-1; $i++ ){
    $valor = $Array[$i]['valor'];
    if ($valor >= 0 && ($menorvalor > $valor || $menorvalor == '')){
        $menorvalor = $valor;
    }
    if ($valor >= 0 && $maiorvalor < $valor){
        $maiorvalor = $valor;
    }
    if ($valor > 0){
        $soma = $soma + $valor;
    }

}

echo "O menor valor de faturamento ocorrido em um dia do mês é $menorvalor <br>";

echo "O maior valor de faturamento ocorrido em um dia do mês é $maiorvalor <br>";


$media = $soma / count($Array);


for ($i = 0; $i <= count($Array)-1; $i++ ){
    $valor = $Array[$i]['valor'];
    if ($media < $valor) {
        $dias++;
    }
}

echo "Número de dias no mês em que o valor de faturamento diário foi superior à média mensal é $dias <br>";

?>

<!-- QUESTÃO 4 "Dado o valor de faturamento mensal de uma distribuidora..."-->
<?php

//VALORES DE CADA ESTADO
$SP = 67836.43;
$RJ = 36678.66;
$MG = 29229.88;
$ES = 27165.48;
$Outros = 19849.53;

//SOMA DOS VALORES
$Total = $SP + $RJ + $MG + $ES + $Outros;

// PORCENTAGEM DE CADA ESTADO
$SP = substr(($SP / $Total) * 100,0,4);
$RJ = substr(($RJ / $Total) * 100,0,4);
$MG = substr(($MG / $Total) * 100,0,4);
$ES = substr(($ES / $Total) * 100,0,4);
$Outros = substr(($Outros / $Total) * 100,0,4);

echo "
O percentual de representação de cada estado sobre o valor total mensal:<br>
São Paulo = $SP% <br>
Rio de Janeiro = $RJ% <br>
Minas Gerais = $MG% <br>
Espirito Santo = $ES% <br>
Outros = $Outros% <br>
"
?>

<!-- QUESTÃO 5 "Escreva um programa que inverta os caracteres de um string"-->

<?php

function InverteStrings($string){

    $stringInvertida = '';

    for($i = strlen($string); $i > -1; $i--){
        $stringInvertida .= $string[$i];
    }
    return $stringInvertida;
}

echo InverteStrings('Diogo Subtil');

?>
