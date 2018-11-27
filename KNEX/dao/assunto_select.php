<?php

    header("Access-Control-Allow-Origin: *");
    header('Content-Type: text/html; charset=UTF-8');
    $host = "mysql:host=localhost;dbname=knex";
    $usuario = "jairx";
    $senha = "Copa2018";

    try {

        $conexao = new PDO($host, $usuario, $senha);

        $sql = $conexao->prepare('select * from AREA');

            $sql->execute();

            $dados = "[";

            while($lista = $sql->fetch()){

                if ($dados != "["){
                    $dados .= ",";
                }
                $dados .= '{"idArea": "'.$lista["ID_AREA"].'",';
                $dados .= '"Area": "'.$lista["AREA"].'"}';

            }
            
            $dados .= "]";
            echo $dados;

    } catch (Exception $ex) {

        echo "erro ao listar: ". $ex->getMessage();

    };