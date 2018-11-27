<?php

    include('../dao/queries.php');

    $nome;
    $email;
    $cpf;
    $usuario;
    $senha;

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
    }else{
        header('Location: ../index.php');
    }

    if(isset($_POST["email"])){
        $email = $_POST["email"];
    }else{
        header('Location: ../index.php');
    }

    if(isset($_POST["cpf"])){
        $cpf = $_POST["cpf"];
    }else{
        header('Location: ../index.php');
    }

    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
    }else{
        header('Location: ../index.php');
    }

    if(isset($_POST["senha"])){
        $senha = $_POST["senha"];
    }else{
        header('Location: ../index.php');
    }

    $ob = new Queries();

    $ob->insertUsuario($usuario, $senha, $nome, $cpf, $email);

    header('Location: ../index.php');