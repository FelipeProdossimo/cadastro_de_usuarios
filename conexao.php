<?php
# CONEXÃO COM O BANCO DE DADOS

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_cadastros';

$conexao = mysqli_connect ($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<br><h3>Não conectou!!! Erro: " . mysqli_connect_error());
}
?>