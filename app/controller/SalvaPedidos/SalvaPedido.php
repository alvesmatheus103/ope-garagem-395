<?php 
  include "../model/conexao.php";
  session_start();
	date_default_timezone_set('America/Sao_Paulo');
  $status = isset($_POST['ComandaStatus']) ? $_POST['ComandaStatus'] : false;

	$descricao = isset($_POST['descricao-pedido']) ? $_POST['descricao-pedido'] : false;

	$emailFunc = $_SESSION['EmailUsuario'];
	$dadosFunc = mysqli_query($conexao, "SELECT * FROM funcionario WHERE email = '$emailFunc'");
	$funcionario = mysqli_fetch_array($dadosFunc);
	$CpfFuncLogado = $funcionario['cpf'];

  $nomeCliente = isset($_POST['ClienteName']) ? $_POST['ClienteName'] : false;
	$dadosCliente = mysqli_query($conexao, "SELECT * FROM cliente WHERE nome = '$nomeCliente'");
	$ClienteCpf = mysqli_fetch_array($dadosCliente);
	$CpfClientePedido = $ClienteCpf['cpf'];

  $dataPagamento = date("Y-m-d H:i:s");

  $sql = mysqli_query($conexao, "INSERT INTO pedido(status, descricao, data_pagamento, cpf_func, cpf_cliente) 
  VALUES('$status', '$descricao', '$dataPagamento', '$CpfFuncLogado', '$CpfClientePedido')");
?>