<?php
	/*$texto = file_get_contents('MUDAR.txt');
	$texto .= "\nThiago Alves";
	file_put_contents('MUDAR.txt', $texto);*/ 
?>

<form method="post" action="RecebeArquivo.php">
	<label>
		Novo Nome:
		<br/>
		<input name='nome' type='text' autofocus/>
	</label>
	
	<input type="submit" value="Adiconar"/>
</form>

	<h2>Lista de nomes</h2>
	<ul>
	<?php
		$texto = file('Nome.txt');
		if(isset($texto)){
			foreach($texto as $valor){
				echo "<li>".$valor."</li>";
			}
		}
	?>
	</ul>
	<br/>
	<a href="apagar.php">Limpar Lista</a>