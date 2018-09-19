<form name="meuForm" method="post" class="form-pedido" id="form-pedido4" action="../controller/SalvaPedidos/SalvaPedido4.php">
  <div class="box box-pedido"> 

<!--STATUS DA COMANDA-->

<?php
 
(isset($_POST["ComandaStatus4"])) ? $ComandaStatus4 = $_POST["ComandaStatus4"] : $ComandaStatus4=0;
 
?>

<div class="StatusPedido">
<span>Status: </span>
<select id="ComandaStatus4" name="ComandaStatus4" class="StatusInOrder">
  <option <?php if ($ComandaStatus4 == 0 ) echo 'selected' ; ?> value=""></option>
  <option <?php if ($ComandaStatus4 == 1 ) echo 'selected' ; ?> value="Aberto">Aberto</option>
  <option <?php if ($ComandaStatus4 == 2 ) echo 'selected' ; ?> value="Fechado">Fechado</option>
</select>
</div>
<!---------->
    <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 4</center></h1>
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
    <select class="ClientInOrder" id="ClientInOrder4" name="ClienteName4"><option value=""></option>
      <?php while ($row1 = mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[1];?></option>
      <?php endwhile;?>
    </select>

    <div id="RowPedidos">
      <div id="CloneRow">
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd21"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod21"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd21" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd22"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod22"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd22" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd23"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod23"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd23" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd24"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod24"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd24" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd25"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod25"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd25" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd26"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod26"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd26" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd27"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod27"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd27" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

      Valor Total: <input type="text" readonly name="TotalPag4" value="" id="TotalPag4" class="TotalPag">

      <label>
        <span>Descrição</span>
        <textarea class="input-text" id="descricao-pedido" name="descricao-pedido4" rows="2" placeholder="até 40 caracteres"></textarea>
      </label>  

    <label class="label" style="width: 32%">
      <input type="submit" class="button button-fechar" value="Fechar Pedido" onclick="saveTextAsFile4()" />
    </label>         
  
    <label class="label" style="width: 38%;margin-left: 70px;">
      <input type="button" class="button button-limpar-comanda" value="Limpar Comanda" onclick="CleanFormOrder4()" />
    </label>  

  </div>

    </form>

<script type="text/javascript">
function saveTextAsFile4() {
  var jcontent= [{
    NomeCliente : document.getElementById("ClientInOrder4").value,
    Produto : document.getElementById("Prod21").value,
    QtdComprada : document.getElementById("Qtd21").value,
    ValorUnit : document.getElementById("ValorProd21").value,
  },
  {
    Produto : document.getElementById("Prod22").value,
    QtdComprada : document.getElementById("Qtd22").value,
    ValorUnit : document.getElementById("ValorProd22").value,
  },
  {
    Produto : document.getElementById("Prod23").value,
    QtdComprada : document.getElementById("Qtd23").value,
    ValorUnit : document.getElementById("ValorProd23").value,
  },
  {
    Produto : document.getElementById("Prod24").value,
    QtdComprada : document.getElementById("Qtd24").value,
    ValorUnit : document.getElementById("ValorProd24").value,
  },
  {
    Produto : document.getElementById("Prod25").value,
    QtdComprada : document.getElementById("Qtd25").value,
    ValorUnit : document.getElementById("ValorProd25").value,
  },
  {
    Produto : document.getElementById("Prod26").value,
    QtdComprada : document.getElementById("Qtd26").value,
    ValorUnit : document.getElementById("ValorProd26").value,
  },
  {
    Produto : document.getElementById("Prod27").value,
    QtdComprada : document.getElementById("Qtd27").value,
    ValorUnit : document.getElementById("ValorProd27").value,
  }];

  var Preco = document.getElementById("ValorProd21").value;
  var Preco1 = document.getElementById("ValorProd22").value;
  var Preco2 = document.getElementById("ValorProd23").value;
  var Preco3 = document.getElementById("ValorProd24").value;
  var Preco4 = document.getElementById("ValorProd25").value;
  var Preco5 = document.getElementById("ValorProd26").value;
  var Preco6 = document.getElementById("ValorProd27").value;
  var Quant = Number(Preco) + Number(Preco1) + Number(Preco2) + Number(Preco3) + Number(Preco4) + Number(Preco5) + Number(Preco6);
  var TotalQuant = document.getElementById("TotalPag4");
  TotalQuant.value = "R$ " + Quant;


  var x = new Date();
  var myJSON = JSON.stringify(jcontent);
  var DataAtual = JSON.stringify(x);
  var currentDate = new Date(JSON.parse(DataAtual));
  var textToWrite = myJSON + currentDate;
  var textFileAsBlob = new Blob([textToWrite], {
    type: 'text/plain'
  });

  var fileNameToSaveAs = document.getElementById("ClientInOrder4").value;

  var downloadLink = document.createElement("a");
  downloadLink.download = fileNameToSaveAs;
  downloadLink.innerHTML = "Download File";
  if (window.webkitURL != null) {
    // Chrome allows the link to be clicked
    // without actually adding it to the DOM.
    downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
  } else {
    // Firefox requires the link to be added to the DOM
    // before it can be clicked.
    downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
  }

  downloadLink.click();
}

function CleanFormOrder4(){
  if (confirm("Tem certeza que quer apagar essa comanda?")) {
    document.getElementById("form-pedido4").reset();
  }

  else {
    return false;
  }
}


</script>