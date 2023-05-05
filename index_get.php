
<?php
/*
Vamos ver como receber os dados de $_GET em PHP.

MANIPULANDO $_GET EM PHP
Da mesma maneira que vimos em $_POST, $_GET também é um array associativo com todos os 
valores que estiverem presentas na URL. Por exemplo, se pegarmos aquele formulário que
 criamos anteriormente e colocarmos o seguinte no arquivo PHP (trecho abaixo), 
 vamos ver o valor postado no input com atributo name igual a nome na tela do navegador.
*/

/*
// Verifica se $_GET['nome'] existe e não está vazio 
if (   isset( $_GET['nome'] ) && 
     ! empty( $_GET['nome'] ) 
) {
	 ==>Mostra o valor de $_GET['nome'] concatenado a uma frase 
	echo 'O valor de $_GET[nome] é: ' . $_GET['nome'] . '<br>';
}
?>
*/


/* Verifica se $_GET['nome'] existe e não está vazio */
if (   isset( $_GET['nome'] ) && 
     ! empty( $_GET['nome'] ) 
) {
	/* Mostra o valor de $_GET['nome'] concatenado a uma frase */

	echo urldecode( $_GET['nome'] ) . '<br>';
}
?>

<?php

//PHP Program of urldecode() Function
/*
Outra função chamada função urldecode() é outra função embutida do PHP e é
 implementada para decodificar a URL, codificada pela função urlencode().
  A decodificação é a abordagem de reverter os dados não-ASCII de volta à
   sua forma original. Esta função aceitará uma única string como parâmetro.
    Essa string conterá a URL codificada a ser decodificada.
    */

echo urldecode("https%3A%2F%2Fw3schools.in%2F");

?>


<form method="get" action="">
	<p>Nome: <input type="text" name="nome"></p>
	<p><input type="submit" value="Enviar"></p>
</form>


<!--
==> Neste código abaixo faz o mesma função do código acima.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
    #Quando abro um input, abre-se opçoes automaticamente, name = vai ofertar nomes que digitei anteriormente.
	<p>Nome: <input type="text" name="nome"></p>
	<p><input type="submit" value="Enviar"></p>
</form>
</body>
</html>
-->