

<?php
// Você pode incluir quantos campos desejar no seu formulário, veja:
/* Verifica se $_GET['nome'] existe e não está vazio */
if (   isset( $_GET['nome'] ) && 
     ! empty( $_GET['nome'] ) 
) {
	echo $_GET['nome'];
	echo $_GET['telefone'];
	echo $_GET['email'];
}
?>

<form method="get" action="">
	<p>Nome: <input type="text" name="nome"></p>
	<p>Telefone: <input type="text" name="telefone"></p>
	<p>Email: <input type="text" name="email"></p>
	<p><input type="submit" value="Enviar"></p>
</form>