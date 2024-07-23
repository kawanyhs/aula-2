<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aprendendo PHP</h1>
<style>
    p{
        color: purple
    
    }
    </style>
    <?php
    // Esse é um comentário de uma linha
    # Posso utilizar hashtag para comentário
    /**
     * Aqui é um bloco de comentário
     * Posso escrever em mais de uma linha
     */
    echo "Sport melhor do nordeste";

     //podemos colocar tags HTML dentro do php
     echo "<h1>Esse é um título</h1>";
     echo "<p>Esse é um parágrafo</p>";
     
     //Comandos de saída:
     //echo - Imprime uma string na tela
     //print - Imprime uma string na tela
     print "<p>Texto dentro do print</p>";

     //Variáveis em PHP
     //Sempre iniciam com $ seguido do nome da variável
     //Não é necessário identificar o tipo do dado 
     //Para criar uma variável basta atribuir um valor nela.

     $nome = "Kawany";
     $idade = 17;
     $altura = 1.63;
     echo "$nome tem $altura m e $idade anos de idade<br>";
      //Aritmétrica Básica
      echo "Operadores Aritméticos.<br>";
      $a = 10;
      $b = 5;
      $c = $a + $b;
      echo "A soma de $a e $b é $c<br>";
      $c = $a - $b;
      echo "A subtração de $a e $b é $c<br> ";
      $c = $a * $b;
      echo "A multiplicação de $a e $b é $c<br>";
      $c = $a /  $b;
      echo "A divisão de $a e $b é $c<br>";
      $c = $a % $b;
      echo "O resto da divisão de $a e $b é $c<br>";
      $c = $a ** $b;
      echo "A potência de $a e $b é $c<br>";
       
      ?>
</body>
</html>
