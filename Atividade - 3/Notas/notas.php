<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $media = $nota1 + $nota2 / 2;

    if ($media < 5) {
        echo $nome." você está REPROVADO";
    } else if ($media >= 7){
        echo $nome." você está APROVADO";
    } else {
        echo $nome." você está de RECUPERAÇÃO";
    }
?>