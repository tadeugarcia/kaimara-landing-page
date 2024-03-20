<?php include 'correios.php'; ?>

<?php include '../partials/head.php'; ?>    
  <link href="../assets/css/exemplo/form.css" rel="stylesheet" type="text/css">
<?php include '../partials/body.php'; ?>

<div>                    
    <a class="btn" href="/exemplo/">
        <span class="mdi mdi-arrow-left"></span>
    </a>
    <h1>Meu carrinho</h1>
</div>

<main class="container col-xl-6">
    <form action="#" id="form-orcamento" data-bs-spy="scroll" data-bs-target="#navbar-catalogo" data-bs-smooth-scroll="true" tabindex="0"> 
        <div id="listaProdutos"></div> 
             
        <?php include 'seus-dados.php'; ?>          
        <?php include 'pagamento.php'; ?>          
        <?php include 'entrega.php'; ?>

        <section id="observacoes" class="row g-3">
            <h2>Observações</h2>

            <div class="form-group m-0">
                <textarea cols="30" rows="4" class="form-control" placeholder="Observações"></textarea>
            </div>
        </section>

        <div class="text-end">
            <button
                type="submit" 
                onclick="whatsapp()"
                class="btn btn-primary btn-lg w-100 mb-5"
                data-sitekey="6LcQwK8lAAAAABdTLwM8UZgoF6h8-tjSifoRUexd" 
                data-callback="onSubmit" 
                data-action="submit">
                Solicitar orçamento
            </button>
        </div>
    </form>
</main>

<?php include '../partials/footer.php'; ?>
<?php include '../partials/external-scripts.php'; ?>
<script src="../assets/js/exemplo/form.js"></script>

<script>
 var listaProdutos = "";

for (let i = 0; i < produto.length; i++) {
  let quantidade = produto[i].querySelector('.quantidade').value;
  let nomeProduto = produto[i].querySelector('.nomeProduto').textContent;
  let porte = produto[i].querySelector('.porte').value;

  if (quantidade) {
    listaProdutos += "<li>Quantidade: " + quantidade + ", Nome do Produto: " + nomeProduto + ", Porte: " + porte + "</li>";
  }
}

// Verifique se há produtos preenchidos
if (listaProdutos) {
  var ul = document.createElement('ul');
  ul.innerHTML = listaProdutos;

  // Adicione a lista <ul> à página onde você deseja exibir os produtos
  var container = document.getElementById('listaProdutos');
  container.appendChild(ul);
}


</script>
</body>
</html>