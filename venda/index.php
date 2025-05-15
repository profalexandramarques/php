<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         //Variáveis
         $codigo = 107;
         $nome = "Limpa Tênis";
         $qtde = 183;
         $valor = 15.00;         
         echo "<h1>PDV</h1>";
         //Cálculo
         $vlrtotal = $valor * $qtde;
         //Escreva na tela
         echo "Valor Total é igual a $vlrtotal";
        ?>
    </body>
</html>
