<?php

$escola = "Senac";
$professor = "Danilo";

if ($escola == "Senac" && $professor == "Danilo") {
    echo "Aula de Back-End";
    
}
echo "<br>";

$idade = "18";
$genero = "M";

if ($idade >= "18" && $genero = "M" ) {
    echo "Precisa se alistar";
}
echo "<br>";

$chuva = false;
$lazer = "jogar bola";
if ($chuva | $lazer == "jogar bola") {
    echo "Sair para jogar bola";
} else {
    echo "ficar em casa";
}

echo "<hr>";
echo "<h1>Exemplo de estrutura for</h1>";

for ($i = 1; $i <= 10; $i++){
    echo "<br>" . $i;
}

?> 
