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
            echo "<Table><tr><td>id</td><td>nome</td><td>preco</td></tr>";
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
                echo "</tr>";
    		}
            echo "</Table>";
		?>
    </body>
</html>