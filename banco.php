8.	Crie um projeto com o menu de opções conforme abaixo:

Digite a opção desejada 1-Deposito, 2-Saque, 3-Saldo e 0-Sair do Sistema.
Na opção deposito, pegar saldo existente e somar com um novo valor de deposito;
Na opção Saque, pegar o saldo existente e subtrair do valor do saque;
Na opção Saldo, exibir o valor do saldo existente;
Retornar para o menu principal.
<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8" />
 <title>Exemplo Método Post html</title>
 </head>
 <body>
 <h3>Digite a opção desejada<br>
              1 - Deposito<br>
              2 - Saque<br>
              3 - Consultar Saldo<br></h3>
              
     
 <form method="post" action="">
 <!-- com o endereço absoluto -->
 <!-- action="calculos.php"> com o endereço relativo -->
 <h3>Opção: <input type="number" name="opcao"> <br></h3>
 
 <br><br>
 <input type="submit" value="Enviar">
 <?php
 $dep = 0;
 $saldo = 0;
 $saq = 0;
    echo "<p><h2> Dados Recebidos e calculados com sucesso</h2></p><hr>";
    $op = $_POST['opcao'];
    echo $op;
    while($op!=0){
        switch($op){
            case 1: 
                echo "Digite o valor do Deposito";?>
                <input type="number" name="dep"><?php
                $saldo = $saldo+$dep;
                break;
            
            case 2:
                echo "Digite o valor do Saque";?>
                $saq = <input type="number" name="dep"><?php
                $saldo = $saldo - $saq;
                break;
            
            case 3:
                echo "Seu Saldo Atual é de R$ ".$saldo;
                break;
            
                
        } 
   }
    
    
    ?> 
</form>
 </body>
</html>

