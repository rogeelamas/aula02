<?php
    echo "Meu nome é Rogê";
    echo "<h1>Função nativa Echo </h1>";

    /*
       
       echo "<h4></h4>";
    $nota1 = 1;
    $nota2 = 1;
    $texto = "Minha média é:";
    $resultado = ($nota1 + $nota2)/2;

    $texto = $texto.$resultado;
    echo $texto;

    if($resultado >=6)
    {
        echo "Aprovado";
    }
    else if($resultado < 6 && $resultado >= 2)
    {
        echo "Tem chance de recuperar!!!";
    }else{
        echo "Já era!!!";

    }
    

    //comentário
 
    $contadora = 0;
    do{
        echo "<br>teste".$contadora;
        $contadora ++;
    }while($contadora < 10);

    echo "While:<br>";
      while($contadora < 150)
    {
        if($contadora % 2 == 0){
            echo $contadora." É um número Par<br>";
        }else{
            echo $contadora."É número ímpar<br>";
        }
        $contadora++;
    }
    Const teste = "oi";
    teste;
    for($i = 0; $i< 1550; $i++)
    {
        echo "<h1>" . $i."</h1> <br>";
    }
    */

    echo "<table border '4'>";
    for ($i=0; $i < 25 ; $i++){
    echo "<tr>";
    echo "<td style='padding:50px'>Nome ".$i. "</td>";
    echo "<td style='padding:50px'>Idade ".$i. "</td>";
    }
    echo "</table>";
?>