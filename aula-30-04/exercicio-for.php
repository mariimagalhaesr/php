<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício For</title>
</head>
<style>
body{
    background-color: #fcfbf6;

}
</style>

<body>
    
<?php
$professor = array( "Fábio Lima", 
"20", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<(count($professor));$a++){
    echo "$professor[$a] <br>";
}


echo "<br>";

$aluno = array("Mariana",
"20", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<(count($aluno));$a++){
    echo "$aluno[$a] <br>";
}

echo "<br>";

$aluno = array("Maria",
"20", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<(count($aluno));$a++){
    echo "$aluno[$a] <br>";
}


echo "<br>";

$aluno = array("Mari",
"20", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

for($a=0; $a<(count($aluno));$a++){
    echo "$aluno[$a] <br>";
}


?>


</body>
</html>