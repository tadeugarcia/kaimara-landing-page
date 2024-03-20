// Máscaras de campos
$(document).ready(function() {
    $('#telefone').mask('(00) 00000-0000').keyup(function(event) {
        if ($(this).val().length == 15) {
          $(this).next().focus();
        }
    });

    $('#cpf').mask('000.000.000-00').keyup(function(event) {
        if ($(this).val().length == 11) {
          $(this).next().focus();
        }
    });

    $('#cnpj').mask('00.000.000/0000-00', { reverse: true });

    $('#cep').mask('00000-000');

    $('.porte').keydown(function(event) {
        var inputLength = $(this).val().length;
        var isBigger = inputLength <= 4;
        var mask = isBigger ? '00/00' : '000/000';
        $('.porte').mask(mask);
      });
});

// Botões de quantidade
// $(document).ready(function() {
//     var $quantidade = $('#quantidadeP1');

//     $('.btnAumentar').click(function() {
//         var valorAtual = parseInt($quantidade.val());
//         if (!isNaN(valorAtual)) {
//         $quantidade.val(valorAtual + 1);
//         } else {
//         $quantidade.val(1);
//         }
//     });

//     $('.btnDiminuir').click(function() {
//         var valorAtual = parseInt($quantidade.val());
//         if (!isNaN(valorAtual) && valorAtual > 0) {
//         $quantidade.val(valorAtual - 1);
//         } else {
//         $quantidade.val(0);
//         }
//     });
// });


// Campos adicionais para primeira compra
$(document).ready(function() {
    // Oculta a parte do formulário inicialmente
    $('#dados-pagamento, #dados-cliente-novo, #dados-cliente-antigo, #dados-entrega, #observacoes, .fechar-pedido').hide();
  
    // Manipula o evento de clique no botão "Continuar"
    $('#id-comprador').click(function() {
      // Obtém o valor do radio button selecionado
      var escolha = $('input[name="id-comprador"]:checked').val();
  
      // Verifica qual opção foi selecionada e exibe a parte relevante do formulário
      if (escolha === 'cliente-novo') {
        $('#identificacao, #itens-adicionados').hide();
        $('#dados-pagamento, #dados-cliente-novo, #dados-entrega, #observacoes, #solicitar-orcamento, .fechar-pedido').show();
      } else if (escolha === 'cliente-antigo') {
        $('#identificacao, #itens-adicionados').hide();
        $('#dados-pagamento, #dados-cliente-antigo, #observacoes, #solicitar-orcamento, .fechar-pedido').show();
      }
    });
});  

// Mostra ou esconde os campos adicionais de pessoa física e jurídica
$(document).ready(function() {
    $(".campo-pf,.campo-pj").hide();

    $('#pessoaFisica').on('change', function() {
      $('.campo-pf').show(this.checked);
      $('.campo-pj').hide(this.checked);
    });
  
    $('#pessoaJuridica').on('change', function() {
      $('.campo-pj').show(this.checked);
      $('.campo-pf').hide(this.checked);
    });
});
  

// Mostra o campo de quantidade
// $(document).ready(function(){
//     $(".escolhaProduto").hide(); // oculta todos os elementos com a classe "escolhaProduto"
    
//     $(".adicionarCarrinho").click(function(){
//       var index = $(".adicionarCarrinho").index(this);      
//       var campos = $(this).nextAll(".escolhaProduto").slice(0, 2);
      
//       campos.show();
//       $(this).hide();
//     });
//   });
  
  
  

// Scroll horizontal automático do nav-pills
var navPills = document.querySelector('.nav-pills');

document.addEventListener('scroll', function () {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    navPills.scrollLeft = scrollTop;
});

// Date Picker flatpickr
flatpickr("#dataDesejada, #dataLimite", {
    dateFormat: "d/m/Y", // Define o formato de data desejado
    locale: "pt", // Define o idioma desejado
    enableTime: false, // Desativa a seleção de horários
    minDate: "today"
});

// reCAPTCHA v3
function onSubmit(token) {
    document.getElementById("form-orcamento").submit();
}

// Soma dos itens - Carrinho

var numero = 1234.56;
var dinheiro = numero.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

$(document).ready(function() {
  $('.quantidade').on('input', function() {
    var totalCompra = 0;
    var contador = 0; // Adicionando contador inicial como 0
    $('.produto').each(function() {
      var quantidade = parseInt($(this).find('.quantidade').val());
      var valor = parseFloat($(this).find('.valor').text().replace('R$ ', '').replace(',', '.'));
      if (!isNaN(quantidade) && isFinite(valor)) {
        var total = quantidade * valor;
        var totalFormatado = total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
        $(this).find('.total').text(totalFormatado);
        totalCompra += total;
        contador += quantidade; // Atualizando o contador com a quantidade atual
      }
    });
    $('.valorTotal').text(totalCompra.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' }));
    $('.contador').text(contador); // Atualizando o valor do contador na classe "contador"
  });
});


// whatsapp URL
let numeroDeOrcamento = 1;

function whatsapp(){
    // let nomep1 = document.getElementById("nomep1").textContent;
    // let tamanhop1 = document.getElementById("tamanhop1").value;
    // let quantidadep1 = document.getElementById("quantidadep1").value;
    let produto = document.querySelectorAll('.produto');
   
    let nome = document.getElementById("nome").value;
    let cpf = document.getElementById("cpf").value;
    let razaoSocial = document.getElementById("razaoSocial").value;
    let cnpj = document.getElementById("cnpj").value;
    let email = document.getElementById("email").value;
    let telefone = document.getElementById("telefone").value;

    let formaPagamento = document.querySelector('input[name="formaPagamento"]:checked');
    
    let dataDesejada = document.getElementById("dataDesejada").value;
    let dataLimite = document.getElementById("dataLimite").value;
    
    let observacoes = document.getElementById("observacoes").value;

    let orcamento = numeroDeOrcamento; // utiliza o valor atual da variável numeroDeOrcamento como número de orçamento
    numeroDeOrcamento++; // incrementa o número de orçamento para o próximo envio

    let url = "https://api.whatsapp.com/send?phone=5521964756666&text=";

    url += "*Orçamento:* " + orcamento + "%0a%0a";

    for (let i = 0; i < produto.length; i++) {
        let quantidade = produto[i].querySelector('.quantidade').value;
        let nomeProduto = produto[i].querySelector('.nomeProduto').textContent;
        let porte = produto[i].querySelector('.porte').value;
      
        if (quantidade) {
          url += nomeProduto+" ("+porte+") - Quantidade: "+quantidade+"%0a%0a";
        }
    }

    if(nome){
        url += "%0a"+"*Nome:* "+nome+"%0a";
    }
    if(cpf){
        url += "%0a"+"*CPF:* "+cpf+"%0a";
    }
    if(razaoSocial){
        url += "%0a"+"*Razão social:* "+razaoSocial+"%0a";
    }
    if(cnpj){
        url += "%0a"+"*CNPJ:* "+cnpj+"%0a";
    }
    if(email){
        url += "*Email:* "+email+"%0a";
    }
    if(telefone){
        url += "*Telefone:* "+telefone+"%0a";
    }

    if(formaPagamento){
        url += "*Forma de pagamento:* "+formaPagamento.value+"%0a";
    }

    if(dataDesejada){
        url += "*Data desejada para entrega:* "+dataDesejada+"%0a";
    }
    if(dataLimite){
        url += "*Data limite para entrega:* "+dataLimite+"%0a";
    }
    if(observacoes){
        url += "*Observações:* "+observacoes+"%0a";
    }
    
    url += "%0a(Aperte enviar para confirmar o envio da mensagem)";
    window.open(url,'_blank').focus();
}

// CEP correios
$(document).ready(function() {
    $('#cep').on('blur', function() {
        // Remove caracteres não-numéricos do CEP
        var cep = $(this).val().replace(/\D/g, '');

        // Verifica se o CEP possui 8 dígitos
        if (cep.length == 8) {
        // Chama a API dos Correios para consultar o CEP
        $.ajax({
            url: 'https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente',
            type: 'POST',
            dataType: 'jsonp',
            crossDomain: true,
            data: {
            'cep': cep
            },
            success: function(response) {
            // Preenche os campos de endereço com os dados retornados pela API
            $('#logradouro').val(response.logradouro);
            $('#bairro').val(response.bairro);
            $('#cidade').val(response.localidade);
            $('#uf').val(response.uf);
            }
        });
        }
    });
});

