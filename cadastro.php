<?php
if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $cadastro = [];

    $cadastro['nome'] = $_GET['nome'];

    if (isset($_GET['senha'])) {
        $cadastro['senha'] = $_GET['senha'];
    } else {
        $cadastro['senha'] = '';
    }

    if (isset($_GET['administrador'])) {
        $cadastro['adm'] = $_GET['adm'];
    } else {
        $cadastro['adm'] = '';
    }
}

include "conexao.php";

if(isset($cadastro)){
$sqlInserir = "INSERT INTO cadastros(
    nome,
    senha,
    adm
) VALUES(
    '{$cadastro['nome']}',
    '{$cadastro['senha']}',
    '{$cadastro['adm']}',
);";



# Para execução
mysqli_query ($conexao , $sqlInserir);
}
include "template.php";
?>