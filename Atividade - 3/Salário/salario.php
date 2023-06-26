<?php
    $valorHora = $_POST['valorHora'];
    $qtdHoras = $_POST['qtdhoras'];
    $salario = $valorHora * $qtdHoras;

    echo "Seu salário é de R$".$salario;
?>