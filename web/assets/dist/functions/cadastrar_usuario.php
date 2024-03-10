<?php

//require_once 'funcoes.php';

//$conexao = criarConexao();



$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$data_nascimento = $_POST['datanasc'];
$senha = md5($_POST['senha']);




if($verifica_usuario_email != 0){
    echo"<script language='javascript' type='text/javascript'>
    alert('Email já registrado!');window.location
    .href='editar-admin.php';</script>";
    die();

}elseif($verifica_usuario != 0){
    echo"<script language='javascript' type='text/javascript'>
    alert('CPF já registrado!');window.location
    .href='editar-admin.php';</script>";
    die();

}else{

    $sql = "insert into usuario(nome,senha,data_nascimento,senha) values
         ('$nome',$senha,'$data_nascimento','$cpf')";
}


if ($gravado == true) {
    echo"<script language='javascript' type='text/javascript'>
    alert('Cadastro efetuado com sucesso, redirecionando para admin!');window.location
    .href='editar-admin.php';</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>
        alert('Verifique os dados digitados!');window.location
        .href='editar-admin.php';</script>";
    die();
}