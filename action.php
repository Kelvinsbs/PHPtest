<?php
	
	require('bancoDados.php');

		$consulta = "SELECT cep FROM dados_cep WHERE cep = '".$_POST['cep']."'";
		$consulta2 = mysqli_query($link, $consulta);
		// die(var_dump(mysqli_fetch_array($consulta2)));
		if(mysqli_fetch_array($consulta2) == null) {
			$sql = "INSERT INTO dados_cep (id, cep, rua, bairro, cidade, estado, ibge) VALUES (0, '".$_POST['cep']."', '".$_POST['rua']."', '".$_POST['bairro']."', '".$_POST['cidade']."', '".$_POST['estado']."', '".$_POST['ibge']."')";

			if (mysqli_query($link, $sql)) {
				echo 'CEP cadastrado com sucesso!' . PHP_EOL;
				echo '<a href="index.php">Voltar</a>';
		    }			
	    }else{
	    	echo 'Este CEP Ja esta cadastrado' . PHP_EOL;
			echo '<a href="index.php">Voltar</a>';
	    }

?>