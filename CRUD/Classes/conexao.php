<?php
    //Declaração do setup local do banco de dados
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db   = "books";

    if($conn = (mysqli_connect($server, $user, $pass, $db))){
        //echo "<h1>Conectado<h1>";
    }else{
        echo "<h1>Não conectado<h1>";
    }

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'> $texto </div>";
    }

    function mover_foto($vetor_foto){
        if(!$vetor_foto['error']){
            $nome_arquivo =  md5(date('Ymdhms')) . ".jpg";
            move_uploaded_file($vetor_foto['tmp_name'], "C:\_SpaceWork_\Program\PHP\CRUD\Img\ " . $nome_arquivo);           
            return $nome_arquivo;
        }else{
            return 0;
        }
    }
