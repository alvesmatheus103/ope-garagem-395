<?php
	include_once("../model/conexao.php");
	$id = mysqli_real_escape_string($conexao, $_POST['id-fornecedor']);
	$status = mysqli_real_escape_string($conexao, $_POST['status']);


var_dump($_POST); 
	$result_fornecedores = "UPDATE fornecedor SET fornecedor.status = 0 WHERE id = '$id'";
	$resultado_fornecedores = mysqli_query($conexao, $result_fornecedores);	

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> fd<?php

		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ope-garagem-395/app/view/lista_fornecedor.php'>
				<script type=\"text/javascript\">
					alert(\"fornecedor alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ope-garagem-395/app/view/lista_fornecedor.php'>
				<script type=\"text/javascript\">
					alert(\"Deu rum.\");
				</script>
			";	
		}
		?>
	</body>
</html>
<?php $conexao->close(); ?>