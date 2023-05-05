

<?php
// Podemos até criar variáveis dinamicamente com o laço foreach:


/* Verifica se $_GET['nome'] existe e não está vazio */
if (   isset( $_GET['nome'] ) && 
	 ! empty( $_GET['nome'] ) 
) {
	// Cria variáveis dinamicamente
	foreach ( $_GET as $chave => $valor ) {
		$$chave = $valor;
	}
	
	// Mostra os dados na tela
	echo $nome . '<br>';
	echo $telefone . '<br>';
	echo $email . '<br>';
}
?>

<form method="get" action="">
	<p>Nome: <input type="text" name="nome"></p>
	<p>Telefone: <input type="text" name="telefone"></p>
	<p>Email: <input type="text" name="email"></p>
	<p><input type="submit" value="Enviar"></p>
</form>