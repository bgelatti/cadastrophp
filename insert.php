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
		    $dados = array('nome' => 'livro 01', 'preco' => 1.50);        
    		$insert = $conexao->select('produto');        
    		echo $insert;
    		foreach ($insert as $value) {
    			echo $value['id'];
    		}
		?>
    </body>
</html>