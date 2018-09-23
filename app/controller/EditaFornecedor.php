<?php
include_once("../model/conexao.php");	
$id = mysqli_real_escape_string($conexao, $_POST['id-fornecedor']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome-fornecedor']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao-fornecedor']);
$cep = mysqli_real_escape_string($conexao, $_POST['cep-cliente']);
$logradouro = mysqli_real_escape_string($conexao, $_POST['logradouro-cliente']);
$numero = mysqli_real_escape_string($conexao, $_POST['numero-end-fornecedor']);
$bairro = mysqli_real_escape_string($conexao, $_POST['bairro-cliente']);
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade-cliente']);
$telefone = mysqli_real_escape_string($conexao, $_POST['tel']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);


// var_dump($_POST); 
// 	echo "$id - $nome - $descricao";
$result_fornecedores = "UPDATE fornecedor 
INNER JOIN endereco ON fornecedor.id = endereco.id_fornec
INNER JOIN contato ON fornecedor.id = contato.id_fornec 
SET nome = '$nome',
descricao = '$descricao',
cep = '$cep',
logradouro = '$logradouro',
numero = '$numero',
bairro = '$bairro',
cidade = '$cidade',
telefone = '$telefone',
email = '$email'
WHERE fornecedor.id = '$id'";

$resultado_fornecedores = mysqli_query($conexao, $result_fornecedores);	
echo mysqli_error($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>

<body> <?php

if(mysqli_affected_rows($conexao) != 0){
	// header("Location: ../view/lista_fornecedor.php");
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ope-garagem-395/app/view/lista_fornecedor.php'>
	<script type=\"text/javascript\">
	alert(\"Cliente alterado com Sucesso.\");
	</script>
	";	
}else{
	// header("Location: ../view/lista_fornecedor.php");
echo mysqli_error($conexao);
		
}
?>
</body>
</html>

<?php $conexao->close();?>