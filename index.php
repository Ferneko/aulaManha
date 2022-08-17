<?php 
/*
    //echo "<style>body{background-color:red;}</style>";
    echo "Meu nome é Jonny";
    echo "<h1>Função Nativa Echo </h1>";
    echo "<br>";
    echo "Bem vindo";

    echo "<h4>Calculo de média</h4>";
    $nota1 = 3;
    $nota2 = 8;
    $texto = "Minha média é:";
    $media = ($nota1 + $nota2)/2;

    $texto = $texto.$media;
    echo $texto;
    $resultado = 0;
    if($media >= 6)
    {
        echo "Aprovado";
    }
    else if($media < 6 && $media >=2)
    {
        echo "Tem chance de recuperar";
    }else{
        echo "Reprovado, perdido";
    }

    //Este é um comentário
    /*
        bloco de comentário
    
    $contadora = 0;
    do{
        echo "<br>teste".$contadora;
        $contadora ++;
    }while($contadora < 10);

    echo "While:<br>";
    //echo "<BR><BR>Degub:".$resultado."<BR><BR><br>";
    while($contadora < 150)
    {
        if($contadora % 2 == 0){
            echo $contadora." É número Par<br>";
        }else{
            echo "<p>". $contadora." É número impar </p>";
        }
        $contadora++;
    }
    CONST teste = "oi";
    teste;
    for($i = 0; $i< 1550; $i++)
    {
        echo "<h1>". $i."</h1><br>";
    }
    */
    //echo "<script>window.location.href = 'http://www.globo.com'</script> ";
    echo "<table border='5'>";
for ($i=0; $i < 25 ; $i++) { 
   echo "<tr>";
   echo "<td style='padding:50px'>NOme ".$i."</td>";
   echo "<td style='padding:50px'>Idade ".$i."</td>";
   echo "</tr>";
}
echo "</table>";
?>