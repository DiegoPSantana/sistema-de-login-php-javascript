<?php

include_once "conexao.php";
// Atribuindo os dados e passando para todas String em uma variável
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Validação do lado do servidor
//Email
if (empty($dados['email'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
    Necessario preencher o campo usuário!</div>"];
    //Senha
} elseif (empty($dados['senha'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
    Necessario preencher o campo senha!</div>"];
} else {
    // Validando email do lado do servidor
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-sucess' role='alert'>
    Validar!</div>"];
}

echo json_encode($retorna);
