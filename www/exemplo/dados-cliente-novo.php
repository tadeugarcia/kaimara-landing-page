<section id="dados-cliente-novo" class="row g-3">
    <h2>Seus dados</h2>
    
    <div class="row gx-2">
        <div class="col-12 m-0">
            <label class="form-label">Eu sou</label>
        </div>
        <div class="col m-0">
            <input type="radio" class="btn-check" name="tipoPessoa" id="pessoaFisica" value="fisica" autocomplete="off" required>
            <label class="btn btn-outline-primary w-100" for="pessoaFisica">
                Pessoa física
            </label>
        </div>
        <div class="col m-0">
            <input type="radio" class="btn-check" name="tipoPessoa" id="pessoaJuridica" value="juridica" autocomplete="off" required>
            <label class="btn btn-outline-primary w-100" for="pessoaJuridica">
                Pessoa Jurídica
            </label>
        </div>                        
    </div>
    
    <div class="col-md-6">
        <label for="nome" class="form-label">Nome e sobrenome</label>
        <input type="text" id="nome" class="form-control">
    </div>

    <div class="col-md-6 campo-pf">
        <label for="cpf" class="form-label">CPF</label>
        <input type="tel" id="cpf" class="form-control" placeholder="000.000.000-00">
    </div>

    <div class="col-md-6 campo-pj">
        <label for="razaoSocial" class="form-label">Razão social</label>
        <input type="text" id="razaoSocial" class="form-control">
    </div>

    <div class="col-md-6 campo-pj">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="tel" id="cnpj" class="form-control" placeholder="00.000.000/0000-00">
    </div>           
    
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" id="email" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone com DDD (Whatsapp)</label>
        <input type="tel" id="telefone" class="form-control" placeholder="(00) 00000-0000">
    </div>
</section>