<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="cadastroproduto.php" method="get">
            <input type="submit" name="submit" value="Novo Produto" />
        </form>
        <?php
		    require_once 'conexao.php';
		    $conexao = new Conexao('localhost', 'cadastro', 'root', 'root', 3306);               
    		$select = $conexao->select('produto'); 
            echo "<Table><tr><td>Id</td><td>Nome</td><td>Preço</td><td>Editar</td><td>Apagar</td></tr>";
    		foreach ($select as $value) {
                echo "<tr>";
                echo "<td>";
    			echo $value['id'];
                echo "</td>";
                echo "<td>";
                echo $value['nome'];
                echo "</td>";
                echo "<td>";
                echo $value['preco'];
                echo "</td>";
                echo "<td>";
                echo "<a href='cadastroproduto.php?id={$value["id"]}&nome={$value["nome"]}&preco={$value["preco"]}'>Editar</a>";
                echo "</td>";
                echo "<td>";
                echo "<a onClick=\"javascript: return confirm('Deseja realmente apagar este registro?');\" href='listagemproduto.php?id={$value["id"]}'>Apagar</a>";
                echo "</td>";
                echo "</tr>";
    		}
            echo "</Table>";

            if (isset($_GET['id'])) {            
                deletar($_GET['id']);                
            }

            function deletar($id) {
                $conexao = new Conexao('localhost', 'cadastro', 'root', 'root', 3306);
                $conexao->delete('id', $id, 'produto');
                header("Location: listagemproduto.php");
            }
		?>
    </body>
</html>