<?php

// Exemplos de Uso
$idade = 25;

// Imaginemos que teria-mos que montar
// uma lógica onde menores de 10 anos
// teria a entrada proibída em um evento
// menores de 18 anos somente acompanhados
// com o pai e o restante entrada livre.

if ( $idade < 10 ) {
  echo "Menores de 10 Anos de idade a entrada é proibída.";
} else if ( $idade < 18 ) {
  echo "Menores de 18 Anos de idade entrada somente com os pais";
} else {
  echo "Entrada Livre";
}

echo "<br>";

// Exemplo de if Ternario ( if de uma linha )
// caso a idade for menor que 18, é false, senão, true
$entrada_permitida = $idade < 18 ? false : true;

var_dump($entrada_permitida);

echo "<br>";

// Exercício
// 1- Crie 3 condições utilizando if, else e else if e escreva na tela
// 2- Crie 3 condições utilizando um if ternário e escreva na tela
