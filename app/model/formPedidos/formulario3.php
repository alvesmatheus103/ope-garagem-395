<form name="meuForm" method="post" class="form-pedido" id="form-pedido3" action="../controller/SalvaPedidos/SalvaPedido3.php">
  <div class="box box-pedido"> 

<!--STATUS DA COMANDA-->

<?php
 
(isset($_POST["ComandaStatus3"])) ? $ComandaStatus3 = $_POST["ComandaStatus3"] : $ComandaStatus3=0;
 
?>

<div class="StatusPedido">
<span>Status: </span>
<select id="ComandaStatus3" name="ComandaStatus3" class="StatusInOrder">
  <option <?php if ($ComandaStatus3 == 0 ) echo 'selected' ; ?> value=""></option>
  <option <?php if ($ComandaStatus3 == 1 ) echo 'selected' ; ?> value="Aberto">Aberto</option>
  <option <?php if ($ComandaStatus3 == 2 ) echo 'selected' ; ?> value="Fechado">Fechado</option>
</select>
</div>
<!---------->
    <h1><center><i class="fas fa-address-card menu-icons"></i>Pedido Nº 3</center></h1>
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
    <select class="ClientInOrder" id="ClientInOrder3" name="ClienteName3"><option value=""></option>
      <?php while ($row1 = mysqli_fetch_array($result1)):;?>
        <option><?php echo $row1[1];?></option>
      <?php endwhile;?>
    </select>

    <div id="RowPedidos">
      <div id="CloneRow">
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd14"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod14"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd14" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd15"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod15"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd15" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd16"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod16"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd16" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd17"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod17"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd17" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd18"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod18"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd18" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd19"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod19"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd19" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

    <div id="RowPedidos">
      <div id="CloneRow">
        <?php 
          include "../controller/ClienteEmPedido.php";
          include "../controller/ProdutosEmPedido.php";
        ?>
        <input type="number" class="adicionar-ao-pedido-qtd" min="0" placeholder="Qtd." id="Qtd20"></input>      

        <select class="adicionar-ao-pedido-nome" id="Prod20"><option value=""></option>
          <?php while ($row2 = mysqli_fetch_array($result2)):;?>
            <option><?php echo $row2[1];?></option>
          <?php endwhile;?>
        </select>

        <input type="number" class="adicionar-ao-pedido-valor" id="ValorProd20" placeholder="R$"></input>
<!--         <input type="button" class="button button-somar-do-pedido" value="+" onclick="clonarLinha()" style="width: 23px" /> -->
      
      </div>
    </div>

      Valor Total: <input type="text" readonly name="TotalPag3" value="" id="TotalPag3" class="TotalPag">

      <label>
        <span>Descrição</span>
        <textarea class="input-text" id="descricao-pedido" name="descricao-pedido3" rows="2" placeholder="até 40 caracteres"></textarea>
      </label>  

    <label class="label" style="width: 32%">
      <input type="submit" class="button button-fechar" value="Fechar Pedido" onclick="saveTextAsFile3()" />
    </label>         
  
    <label class="label" style="width: 38%;margin-left: 70px;">
      <input type="button" class="button button-limpar-comanda" value="Limpar Comanda" onclick="CleanFormOrder3()" />
    </label>  

  </div>

    </form>

<script type="text/javascript">
function saveTextAsFile3() {
  var jcontent= [{
    NomeCliente : document.getElementById("ClientInOrder3").value,
    Produto : document.getElementById("Prod14").value,
    QtdComprada : document.getElementById("Qtd14").value,
    ValorUnit : document.getElementById("ValorProd14").value,
  },
  {
    Produto : document.getElementById("Prod15").value,
    QtdComprada : document.getElementById("Qtd15").value,
    ValorUnit : document.getElementById("ValorProd15").value,
  },
  {
    Produto : document.getElementById("Prod16").value,
    QtdComprada : document.getElementById("Qtd16").value,
    ValorUnit : document.getElementById("ValorProd16").value,
  },
  {
    Produto : document.getElementById("Prod17").value,
    QtdComprada : document.getElementById("Qtd17").value,
    ValorUnit : document.getElementById("ValorProd17").value,
  },
  {
    Produto : document.getElementById("Prod18").value,
    QtdComprada : document.getElementById("Qtd18").value,
    ValorUnit : document.getElementById("ValorProd18").value,
  },
  {
    Produto : document.getElementById("Prod19").value,
    QtdComprada : document.getElementById("Qtd19").value,
    ValorUnit : document.getElementById("ValorProd19").value,
  },
  {
    Produto : document.getElementById("Prod20").value,
    QtdComprada : document.getElementById("Qtd20").value,
    ValorUnit : document.getElementById("ValorProd20").value,
  }];

  var Preco = document.getElementById("ValorProd14").value;
  var Preco1 = document.getElementById("ValorProd15").value;
  var Preco2 = document.getElementById("ValorProd16").value;
  var Preco3 = document.getElementById("ValorProd17").value;
  var Preco4 = document.getElementById("ValorProd18").value;
  var Preco5 = document.getElementById("ValorProd19").value;
  var Preco6 = document.getElementById("ValorProd20").value;
  var Quant = Number(Preco) + Number(Preco1) + Number(Preco2) + Number(Preco3) + Number(Preco4) + Number(Preco5) + Number(Preco6);
  var TotalQuant = document.getElementById("TotalPag3");
  TotalQuant.value = "R$ " + Quant;


  var x = new Date();
  var myJSON = JSON.stringify(jcontent);
  var DataAtual = JSON.stringify(x);
  var currentDate = new Date(JSON.parse(DataAtual));
  var textToWrite = myJSON + currentDate;
  var textFileAsBlob = new Blob([textToWrite], {
    type: 'text/plain'
  });

  var fileNameToSaveAs = document.getElementById("ClientInOrder3").value;

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

function CleanFormOrder3(){
  if (confirm("Tem certeza que quer apagar essa comanda?")) {
    document.getElementById("form-pedido3").reset();
  }

  else {
    return false;
  }
}


</script>