<?php include '../partials/head.php'; ?>    
    <link href="../assets/css/exemplo/form.css" rel="stylesheet" type="text/css">
<?php include '../partials/body.php'; ?>

<main class="interna-detalhes">
    <div class="container col-xl-6">
        <div class="d-inline-flex my-3">
            <a class="btn btn-link" href="/exemplo/">
                <span class="mdi mdi-arrow-left"></span>
            </a>
            <h1 class="titulo">Áreas de entrega</h1>
        </div>
        <div>
            <ul id="detalhes" class="list-group accordion-collapse collapse show" data-bs-parent="#accordionDetalhes">
                <li class="list-group-item">
                    <h6>Jardim das Acácias</h6>
                    <small>Grátis - 3 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Vila das Rosas</h6>
                    <small>Grátis - 4 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Bosque das Orquídeas</h6>
                    <small>Grátis - 5 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Horto das Margaridas</h6>
                    <small>Grátis - 2 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Alameda das Bromélias</h6>
                    <small>Grátis - 3 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Praça das Violetas</h6>
                    <small>Grátis - 2 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Flor do Campo</h6>
                    <small>Grátis - 5 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Parque das Azaleias</h6>
                    <small>Grátis - 3 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>São Paulo Capital</h6>
                    <small>A partir de R$ 1.000 - 15 dias em média</small>
                </li>                        
                <li class="list-group-item">
                    <h6>Minas Gerais</h6>
                    <small>A partir de R$ 1.000 - 20 dias em média</small>
                </li>
                <li class="list-group-item">
                    <h6>Rio de janeiro</h6>
                    <small>A partir de R$ 2.500 - 20 dias em média</small>
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