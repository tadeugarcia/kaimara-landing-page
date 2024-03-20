// Obter o ano atual
$(document).ready(function() {
    // Obter o ano atual
    var anoAtual = new Date().getFullYear();

    // Exibir o ano atual no elemento com o id "ano-atual"
    $("#ano-atual").text(anoAtual);
});