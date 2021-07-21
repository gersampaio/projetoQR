<?php 

	ini_set('max_execution_time', 0);

	require 'conexao.php';
	$filename = 'C:/carregamento/bingo_data.csv';

	if(file_exists($filename)){

		mysqli_query($conecta, "LOAD DATA INFILE '$filename' INTO TABLE bingo_data
		FIELDS TERMINATED BY ';'
		LINES TERMINATED BY '\n'
		IGNORE 1 ROWS");

		echo "Arquivo carregado com sucesso!";

	}else{
		echo "Arquivo não existe!";
	}

 ?>

