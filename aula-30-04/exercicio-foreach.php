<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Foreach</title>
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

foreach ($professor as $p) {
    echo "$p" . "<br>";
}

echo "<br>";

$aluno = array("Mariana",
"20", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

foreach ($aluno as $a) {
    echo "$a" . "<br>";
}

echo "<br>";

$aluno = array("Maria",
"20", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

foreach ($aluno as $a) {
    echo "$a" . "<br>";
}


echo "<br>";

$aluno = array("Mari",
"20", 
"rua Y", 
"Guanambi",
"BA", 
"000.000.000-20");

foreach ($aluno as $a) {
    echo "$a" . "<br>";
}

?>


</body>
</html>
