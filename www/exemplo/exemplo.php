<?php include 'correios.php'; ?>

<?php include '../partials/head.php'; ?>    
  <link href="../assets/css/exemplo/form.css" rel="stylesheet" type="text/css">
<?php include '../partials/body.php'; ?>

<?php include 'header.php'; ?>

<nav id="navbar-catalogo" class="navbar sticky-top container col-xl-6">
    <ul class="nav nav-pills overflow-auto flex-nowrap">
      <li class="nav-item">
        <a class="nav-link" href="#arvores">Árvores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#palmeiras">Palmeiras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#frutiferas">Frutíferas</a>
      </li>
    </ul>
</nav>

<main class="container col-xl-6">
    <form action="#" id="form-orcamento" data-bs-spy="scroll" data-bs-target="#navbar-catalogo" data-bs-smooth-scroll="true" tabindex="0"> 

        <?php include 'lista-produtos.php'; ?> 
        
        <section id="identificacao" class="row">
          <h2>Identificação</h2>

          <div class="col-md-12">
              <label class="form-label">Logo após você pode preencher seus dados</label>
              
              <div class="row gx-2">
                  <div class="col-md-6">
                      <input type="radio" class="btn-check" name="id-comprador" id="cliente-novo" value="cliente-novo" autocomplete="off">
                      <label class="btn btn-outline-primary w-100 mb-2" for="cliente-novo">                
                          Minha primeira compra
                      </label>
                  </div>
                  <div class="col-md-6">
                      <input type="radio" class="btn-check" name="id-comprador" id="cliente-antigo" value="cliente-antigo" autocomplete="off">
                      <label class="btn btn-outline-primary w-100 mb-2" for="cliente-antigo">
                          Já sou cliente
                      </label>
                  </div>                        
              </div>

              <button id="id-comprador" class="btn btn-primary w-100">
                Continuar
              </button>
          </div>
        </section>

        <?php include 'dados-cliente-novo.php'; ?>          
        <?php include 'dados-cliente-antigo.php'; ?>          
        <?php include 'dados-entrega.php'; ?>
        <?php include 'dados-pagamento.php'; ?>          

        <section id="observacoes" class="row g-3">
            <h2>Observações</h2>

            <div class="form-group m-0">
                <textarea cols="30" rows="4" class="form-control" placeholder="Observações"></textarea>
            </div>
        </section>
    </form>
</main>

<?php include 'total.php'; ?> 
<?php include '../partials/footer.php'; ?>
<?php include '../partials/external-scripts.php'; ?>
<script src="../assets/js/exemplo/form.js"></script>
</body>
</html>