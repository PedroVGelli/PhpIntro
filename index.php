<?php
//isso é um comentario
// var dump é excelente para fazer verificações e detecção de erros
echo "Hello World";
echo "<b> Olá Mundo </b>";
echo ("<br>");

$nome = 'Ciclano';
define("GAMA", 2.23);
echo ("<br>");

echo rand(0,1000);
echo ("<br>");

echo "Meu nome é: <br>" . $nome; 
echo "Meu nome é: $nome";   

echo GAMA;
echo $nome;
echo ("<br>");

$frutas= array('melancia','banana','tamarindo');
echo ("<br>");

foreach($frutas as $elemento){
    echo $elemento . "<br>";
}
echo $idades = array("pedro"=>18, "magno"=>40);

echo ("<br>");
foreach($idades as $nome=>$idade){
    echo "$nome tem $idade anos <br>" ;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>