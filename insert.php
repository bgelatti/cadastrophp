<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
	<?php
		require_once 'conexao.php';
		$conexao = new Conexao('localhost', 'cadastro', 'root', 'root', 3306);        
		$dados = array('nome' => 'livro 04', 'preco' => 8.50);        
		$insert = $conexao->insert('produto', $dados); 
	?>
    </body>
</html>
