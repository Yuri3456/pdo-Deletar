<?php

	$usuario="root";
	$senha="";
	$servidor="localhost";
	$banco="auladorafael";

	try{
		$db = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
		echo "Conexao OK" . "<br>";
	}
	catch(PDOException $e){
		echo $e->getMessage();	
	}

  ?>