<?php
	//$nome = file_get_contents("Nome.txt");
	$ver = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	if($ver){
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS)."\n";
		file_put_contents("Nome.txt", $nome, FILE_APPEND);
		header("Location: index.php");
	}else{
		header("Location: index.php");
	}
	
	/*if($nome){ 
		file_put_contents("Nome.txt", $nome, FILE_APPEND);
		header("Location: LendoArquivos.php");
	}else{
		header("Location: LendoArquivos.php");
	}*/ 