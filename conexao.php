<?php

	//Variáveis de acesso Db
	define('DB_SERVER', 'localhost');
	define('DB_NAME', 'cadastro');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	//inicio da classe de conexao
	class Conexao {
	    var $mysqli;
	    public function __construct($server, $database, $username, $password, $port){
	        $this->mysqli = new mysqli($server, $username, $password, $database, $port);
	    }
	    
	    public function insert($tabela, $dados) {
	        foreach ($dados as $key => $value) {
	            $keys[] = $key;
	            $insertvalues[] = '\'' . $value . '\'';
	        }
	        $keys = implode(',', $keys);
	        $insertvalues = implode(',', $insertvalues);
	        $sql = "INSERT INTO $tabela ($keys) VALUES ($insertvalues)";
	        return $this->executar($sql);
	    }

	    public function update($tabela, $colunaPrimay, $id, $dados) {
	        foreach ($dados as $key => $value) {
	            $sets[] = $key . '=\'' . $value . '\'';
	        }
	        $sets = implode(',', $sets);
	        $sql = "UPDATE $tabela SET $sets WHERE $colunaPrimay = '$id'";
	        $result = $this->executar($sql); 
	        return $result;
	    }

	    public function select($tabela, $colunas = "*") {
	        $sql = "SELECT $colunas FROM $tabela";
	        $result = $this->executar($sql);
	        return $result;
	    }

	    function executar($query) {	    
	    	$result = $this->mysqli->query($query);
			return $result;
	    }
	}
?>
