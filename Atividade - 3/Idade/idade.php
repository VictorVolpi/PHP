<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if ($idade < 18) {
        echo $nome." você é menor de idade";
    } else {
        echo $nome." você é maior de idade";
    }
?>