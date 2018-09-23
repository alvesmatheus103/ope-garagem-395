<?php 
	include "../controller/UrlRestritaLogado.php";
	echo "<table class='tabela-lista-fornecedores' border=1>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Nome</th>";
	echo "<th>Descrição</th>";
	echo "<th>CEP</th>";
	echo "<th>Logradouro</th>";
	echo "<th>N°</th>";
	echo "<th>Bairro</th>";
	echo "<th>Cidade</th>";
	echo "<th>Telefone</th>";
	echo "<th>Email</th>";
	echo "<th>Ação</th>";
	echo "</tr>";
  include "../model/conexao.php";	


	$result_fornecedores = "SELECT * FROM fornecedor INNER JOIN endereco  ON fornecedor.id = endereco.id_fornec INNER JOIN contato ON fornecedor.id = contato.id_fornec WHERE fornecedor.status != 0";
	$resultado_fornecedores = mysqli_query($conexao, $result_fornecedores);
?>


<?php
while ($registroF = mysqli_fetch_assoc($resultado_fornecedores)){
	$id = $registroF['id_fornec'];
	$nome = $registroF['nome'];
	$descricao = $registroF['descricao'];
	$cep = $registroF['cep'];
	$logradouro = $registroF['logradouro'];
	$numero = $registroF['numero'];
	$bairro = $registroF['bairro'];
	$cidade = $registroF['cidade'];
	$telefone = $registroF['telefone'];
	$email = $registroF['email'];

	echo"<tr>";
	echo "<td>". $id ."</td>";
	echo "<td>". $nome ."</td>";
	echo "<td>". $descricao."</td>";
	echo "<td>". $cep."</td>";
	echo "<td>". $logradouro."</td>";
	echo "<td>". $numero."</td>";
	echo "<td>". $bairro."</td>";
	echo "<td>". $cidade."</td>";
	echo "<td>". $telefone."</td>";
	echo "<td>". $email."</td>";
		echo "<td>";
?>
		<button type='button' class='fas fa-pencil-alt' data-target='#alterarFornecedorModal' data-toggle='modal' 

			data-whateverid="<?php echo $registroF['id'];?>"
			data-whatevernome="<?php echo $registroF['nome'];?>"
			data-whateverdescricao="<?php echo $registroF['descricao'];?>"
			data-whatevercep="<?php echo $registroF['cep'];?>"
			data-whateverlogradouro="<?php echo $registroF['logradouro'];?>"
			data-whatevernumero="<?php echo $registroF['numero'];?>"
			data-whateverbairro="<?php echo $registroF['bairro'];?>"
			data-whatevercidade="<?php echo $registroF['cidade'];?>"
			data-whatevertelefone="<?php echo $registroF['telefone'];?>"
			data-whateveremail="<?php echo $registroF['email'];?>"

			></button>
		<button type='button' class='fas fa-trash-alt' data-target='#excluirFornecedorModal' data-toggle='modal' 
		data-whateverid="<?php echo $registroF['id_fornec'];?>"
		data-whateverstatus="<?php echo $registroF['status'];?>"


		></button>			
		</td>		

<?php
}
mysqli_close($conexao);
echo "</table>";
?>
