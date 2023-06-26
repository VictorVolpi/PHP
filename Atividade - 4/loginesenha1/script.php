<?php
    $login= $_POST['login'];
    $senha= $_POST['senha'];

    if($login==123 && $senha==123){
        header ('location: galeria.html');
    }else{
        header ('location: index1.html');
    }
?>