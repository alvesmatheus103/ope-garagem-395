<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
  include "menu.php";
  ?>
  <script src="../assets/js/BuscaCep.js"></script>
  <script src="../assets/js/jquery.mask.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <title>Fornecedores - Garagem</title>

</head>
<body id="top" data-spy="scroll">

  <button type="button" class="btn btn-lg see-cad" data-toggle="modal" data-target="#myModal">Cadastrar</button>
    <div class="tabela-listar">
        <?php
          include "fornecedores.php";
        ?>

      </div>
    </div>
<div id="myModal" class="modal fade" role="dialog">
 
 <?php include "form_cadastro_fornecedor.php";?>
</div>

<div id="alterarFornecedorModal" class="modal fade" role="dialog">
<form  method="POST" enctype="multipart/form-data"  action="../controller/EditaFornecedor.php">
    <div class="box box-cadastro-fornecedor"> 
      <h1><center><i class="fas fa-address-card menu-icons"></i>Editar fornecedor</center></h1>

      <label> 
        <span>Nome</span>
        <input hidden="true" type="text" class="input-text" id="id" name="id-fornecedor">
        <input type="text" class="input-text" id="nome-fornecedor" name="nome-fornecedor" placeholder="Nome" />
      </label>

      <label>
        <span>Descrição</span>
        <textarea class="input-text" id="descricao-fornecedor" name="descricao-fornecedor" rows="2" placeholder="até 200 caracteres"></textarea>
      </label>   

      <label>
        <span>Endereço</span>
        <input type="text" class="input-text js-cep-mascara" id="cep-cliente"  placeholder="CEP" name="cep-cliente" onblur="pesquisacep(this.value);"  />
        <input type="text" class="input-text" id="logradouro" name="logradouro-cliente" placeholder="logradouro" />
        <input type="text" class="input-text" id="numero-end-fornecedor" name="numero-end-fornecedor" placeholder="Nº" />
        <input type="text" class="input-text" id="bairro" name="bairro-cliente" placeholder="Bairro"  />
        <input type="text" class="input-text" id="cidade" name="cidade-cliente" placeholder="Cidade" />

      </label>
      <label>
        <span>Telefone</span>
        <input  type="text" class="input-text  js-celular-mascara" name="tel" id="tel" placeholder="(00)00000-0000" />
      </label>
      
      <label>
        <span>Email</span><input type="email" class="input-text" name="email" id="email" placeholder="exemplo@exemplo.com" />
      </label>
      <label class="button-cadastrar-fornecedor">
        <input type="submit" class="button" id="button-cadastrar-fornecedor" value="Salvar" />
      </label>           
    </div>
  </form>
</div>



<form name="meuForm" method="post" id="formularioEx" action="../controller/ApagaFornecedor.php">
  <div id="excluirFornecedorModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir Cliente?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja apagar este Fornecedor? :( </p>
          <label>
            <span>CPF</span>
            <input type="text" class="input-text js-cpf-mascara" id="id_excluir" name="id-fornecedor" placeholder="000.000.000-00" />
             <input type="number" class="input-text" id="status_excluir" name="status" placeholder="deu ruim" />
          </label>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
      </div>
    </div>
  </div>
</form>

</body>
</html>


  <script type="text/javascript">
    $('#alterarFornecedorModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipientid = button.data('whateverid')
      var recipientnome = button.data('whatevernome')
      var recipientdescricao = button.data('whateverdescricao')
      var recipientcep = button.data('whatevercep')
      var recipientlogradouro = button.data('whateverlogradouro')
      var recipientnumero = button.data('whatevernumero')
      var recipientbairro = button.data('whateverbairro')
      var recipientcidade = button.data('whatevercidade')
      var recipienttelefone = button.data('whatevertelefone')
      var recipientemail = button.data('whateveremail')
      var modal = $(this)
      modal.find('#id').val(recipientid)
      modal.find('#nome-fornecedor').val(recipientnome)
      modal.find('#descricao-fornecedor').val(recipientdescricao)
      modal.find('#cep-cliente').val(recipientcep)
      modal.find('#logradouro').val(recipientlogradouro)
      modal.find('#numero-end-fornecedor').val(recipientnumero)
      modal.find('#bairro').val(recipientbairro)
      modal.find('#cidade').val(recipientcidade)
      modal.find('#tel').val(recipienttelefone)
      modal.find('#email').val(recipientemail)   
      
    })
  </script>

  <script type="text/javascript">
    $('#excluirFornecedorModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipientid = button.data('whateverid') // Extract info from data-* attributes
      var recipientstatus = button.data('whateverstatus')
      var modal = $(this)
      modal.find('#id_excluir').val(recipientid)
      modal.find('#status_excluir').val(recipientstatus)
    })
  </script>