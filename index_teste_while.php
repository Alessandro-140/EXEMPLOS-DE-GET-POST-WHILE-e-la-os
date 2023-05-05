<?php
// Site deste conteúdo: https://www.youtube.com/watch?v=YXIuDhWNadU

/*
CONDIÇÂO 1.
$contador = 0;
while($contador <= 10){
//echo "$contador"; Aqui fica na mesma linha.
echo "$contador\n"; // Aqui quebra a linha.
$contador++;
}
*/

$contador = 0;
while($contador <= 10){
    /* Ao utilizar este bloco do "if" até o continue não será
    impresso o 3 que está em enfase.
    */
    if($contador == 3){
        /* tenho que por para não ficar com o laço preso em 3
         e para não cair em laço infinito. */
        $contador++;
        continue; // Este continue faz com que pule o número 3.
    }
echo "$contador\n"; // Aqui quebra a linha.
$contador++;
}
?>