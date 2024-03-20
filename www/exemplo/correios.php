<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $cep = $_POST['cep'];

  // Remove caracteres não-numéricos do CEP
  $cep = preg_replace("/[^0-9]/", "", $cep);

  // Verifica se o CEP possui 8 dígitos
  if (strlen($cep) == 8) {
    $url = "https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?cep={$cep}&tipoCep=";

    // Inicia a sessão CURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Faz a solicitação e obtém a resposta
    $response = curl_exec($ch);

    // Verifica se ocorreu um erro
    if (curl_errno($ch)) {
      $error = curl_error($ch);
      echo "Erro ao consultar o CEP: {$error}";
      exit;
    }

    // Define o cabeçalho de resposta como XML e retorna a resposta para o cliente
    header("Content-Type: text/xml");
    echo $response;

    // Fecha a sessão CURL
    curl_close($ch);
  }
}
?>