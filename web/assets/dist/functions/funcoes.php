<?php

function criarConexao() {

    $conexao = mysqli_connect('127.0.0.1', 'root', '12345678', 'pi-db');
    return $conexao;
}

function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
 
    return true;
}

