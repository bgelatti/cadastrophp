<?php
	require_once 'conexao.php';

	if (isset($_GET["id"])) {
        $id = $_GET["id"];
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
    } else {
    	$id = "";
		$nome = "";
		$preco = "";
    }

    if (isset($_POST['nome'])) {
    	if ($_POST['id'] !== '') {
    		atualizar($_POST['id'], $_POST['nome'], $_POST['preco']);
    	} else {
    		salvar($_POST['nome'], $_POST['preco']);
    	}
    }
	

	function salvar($nome, $preco) {
		$conexao = new Conexao('localhost', 'cadastro', 'root', 'root', 3306);        
		$dados = array('nome' => $nome, 'preco' => $preco);
		$insert = $conexao->insert('produto', $dados);
		header("Location: listagemproduto.php");
	}

	function atualizar($id, $nome, $preco) {
		$conexao = new Conexao('localhost', 'cadastro', 'root', 'root', 3306);        
		$dados = array('nome' => $nome, 'preco' => $preco);
		$insert = $conexao->update('produto', 'id', $id , $dados);
		header("Location: listagemproduto.php");
	}
?>


<form action="" method="post">
	Id:  <input type="text" name="id" readonly="true" value="<?php echo $id; ?>"/><br />
    Nome:  <input type="text" name="nome" value="<?php echo $nome; ?>" /><br />
    Preço: <input type="decimal" name="preco" value="<?php echo $preco; ?>"/><br />
    <input type="submit" name="submit" value="Salvar" />
</form>