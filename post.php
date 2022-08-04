<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p><h2> Dados Recebidos e calculados com sucesso</h2></p><hr>";
    $v1 = $_POST['valor1'];
    $v2 = $_POST['valor2'];
    echo "Valor 1 : ".$v1."<br>";
    echo "Valor 2 : ".$v2."<br>";
    $resultado = $v1 * $v2;
    echo "A multiplicação é $resultado <hr>";
    ?>
    
</body>
</html>