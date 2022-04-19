/*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*/

<?php 
	try{
		$mbd = new PDO('mysql:host=localhost; dbname=db_chamilo;', 'db_chamilo', 'db_chamilo', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
	}catch(PDOException $e){
		echo "Fallo en la conexion ".$e->getMessage();
	}
?>