<?php
	require_once 'conexao.php';
	$conexao = new Conexao('localhost', 'cadastro', 'root', 'root', 3306);        
	$dados = array('nome' => $_POST['nome'], 'preco' => $_POST['preco']);
	$insert = $conexao->insert('produto', $dados);
	echo "Cadastrado com Sucesso";	
?>
<form action="listagemproduto.php" method="get">
	<input type="submit" name="submit" value="voltar" />
</form>