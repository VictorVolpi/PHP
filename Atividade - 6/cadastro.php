<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        echo "<h2> Seu nome é:" .$nome. "</h2>";

        $email = $_POST['email'];
        echo "<h2> Seu email é:" .$email. "</h2>";

        $idade = $_POST['idade'];
        echo "<h2> Sua idade é:" .$idade. "</h2>";

        $senha = $_POST['senha'];
        echo "<h2> Sua senha é:" .$senha. "</h2>";

        //Sexo
        if($_POST['sexo'] == "masculino"){
            echo "<h2>Sexo: Masculino </h2>";
        }
        if($_POST['sexo'] == "feminino"){
            echo "<h2>Sexo: Feminino </h2>";
        }
        
        //interesses
        
        if(isset($_POST['Int'] )){
            echo "<h2>os seus intereses são </h2>";   
            foreach($_POST['Int'] as $Int){
                echo "-" . $Int;

            }
        }
        else{
            echo "vc n tem interese";
        }

        //estado
        $estado = isset($_POST['estado']) ? $estado = $_POST['estado']: 0;
        switch($estado) {
            case "1";
            echo"<h2>Você é de são paulo</h2>";
            break;

            case "2";
            echo"<h2>Você é de Rio de janeiro</h2>";
            break;

            case "3";
            echo"<h2>Você é do Rio Grande do Sul</h2>";

            case "4";
            echo"<h2>Você é da Bahia</h2>";

            case "5";
            echo"<h2>Você é de Goias</h2>";
            break;
        }


        //obs
        $mensagem = $_POST['mensagem'];
        echo "<h2> Observação: " .$mensagem. "</h2>";

      
    ?>
</body>
</html>