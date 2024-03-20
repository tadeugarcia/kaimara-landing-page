<?php include '../partials/head.php'; ?>    
    <link href="../assets/css/exemplo/form.css" rel="stylesheet" type="text/css">
<?php include '../partials/body.php'; ?>

<main class="interna-detalhes">
    <div class="container col-xl-6">
        <div class="d-inline-flex my-3">                    
            <a class="btn btn-link" href="/exemplo/">
                <span class="mdi mdi-arrow-left"></span>
            </a>
            <h1 class="nomeProduto">Bacupari, Garcinia brasiliensi</h1>
        </div>
        
        <div>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.floralondrina.com.br/img/products/muda-de-bacupari-mirim-garcinia-brasiliensis_2_1200.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="http://www.arvores.brasil.nom.br/new/bacupari/bacupari%20P%20Ipanema/bacupari%20pipa01.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="http://www.arvores.brasil.nom.br/new/bacupari/bacupari%20P%20Ipanema/bacupari%20pipa04.jpg">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <ul id="detalhes" class="list-group accordion-collapse collapse show" data-bs-parent="#accordionDetalhes">
                <li class="list-group-item">
                    <small>Nome Popular</small>
                    <h6>Araçá-arbóreo</h6>
                </li>
                <li class="list-group-item">
                    <small>Nome Científico</small>
                    <h6>Psidium arboreum</h6>
                </li>
                <li class="list-group-item">
                    <small>Família</small>
                    <h6>Myrtaceae</h6>
                </li>
                <li class="list-group-item">
                    <small>Origem</small>
                    <h6>Nativa</h6>
                </li>
                <li class="list-group-item">
                    <small>Sucessão Ecológica</small>
                    <h6>Não Pioneira</h6>
                </li>
                <li class="list-group-item">
                    <small>Dispersão</small>
                    <h6>FRU/ZOO</h6>
                </li>
                <li class="list-group-item">
                    <small>Biomas</small>
                    <h6>MA</h6>
                </li>
                <li class="list-group-item">
                    <small>Porte da Espécie</small>
                    <h6>Arbusto, Árvore – 3 a 6m</h6>
                </li>
                <li class="list-group-item">
                    <small>Copa</small>
                    <h6>Perenifólia</h6>
                </li>
                <li class="list-group-item">
                    <small>Cor da Flor</small>
                    <h6>Branca</h6>
                </li>
                <li class="list-group-item">
                    <small>Época de Floração</small>
                    <h6>Setembro a Dezembro</h6>
                </li>
                <li class="list-group-item">
                    <small>Época de Frutificação</small>
                    <h6>Janeiro a Março</h6>
                </li>
            </ul>

            <a class="btn btn-outline-primary w-100 my-4"  href="/exemplo/">
                Voltar
            </a>
        </div>
    </div>
</main>

<?php include '../partials/external-scripts.php'; ?>
<script src="../assets/js/exemplo/form.js"></script>
</body>
</html>