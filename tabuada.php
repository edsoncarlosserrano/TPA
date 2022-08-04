<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h3> Tabuada </h3>
    <form method="post" action="">
        Digite o numero que deseja a tabuada: <input type="number" name="valor"><br>
        <input type="submit" value="enviar">
    </form>
<?php
if(isset($_POST['valor'])){
    $v = $_POST['valor'];
    if(empty($v) || $v == null || $v == ""){
    } else {
        $i = 1;
        while($i <= 10){
           echo $i." x ".$v." = ".$i*$v."<br>";
           $i++;
        }
   }
}
?>
</body>
</html>