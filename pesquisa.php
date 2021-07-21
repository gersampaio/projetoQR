<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bingo ML</title>
</head>
<body>

	<h1>Sistema de Busca</h1>

	<!-- roteiro da programação -- se shipment for da rota selecionada retorna "Rota ok", senão retorna "fora de rota." -->

	<?php
		require 'conexao.php';

// Criar uma conexão com o banco
$conn = mysqli_connect($localhost, $user, $pass, $banco);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM bingo_data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Shipment: " . $row["Shipment"]. " - Rota: " . $row["Rota"]. " - Ordem: " . $row["Ordem"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>