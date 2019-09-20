<?php
    require_once("classes/banco.class.php");
    require_once("classes/aluno.class.php");
    $objeto = new Aluno();
    if($objeto->inserir($_GET) == 'ok'){
        echo "Dados Gravados com sucesso!";
    }else{
        echo "Erro ao tentar gravar os dados!";
    }


?>