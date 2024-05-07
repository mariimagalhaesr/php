<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <style>
        body{
            background-color: #fcfbf6;
        }
        p{
            background-color: #eee6cf;
        }
    </style>
    
<?php
$professor = array( "nome" => "Fábio Lima", 
"idade" => "20", 
"end" => "rua Y", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"CPF"=> "000.000.000-20");

echo "<p> Professor 1 </p>" ;
echo $professor["nome"] ."<br>";
echo $professor["idade"] ."<br>";
echo $professor["end"] . "<br>";
echo $professor["cidade"] . "<br>";
echo $professor["estado"] . "<br>";
echo $professor["CPF"] . "<br>";

echo "<br>";

$aluno = array("nome" => "Mariana",
"idade" => "20", 
"end" => "rua Y", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"CPF"=> "000.000.000-20");


echo "<p> Aluno 1 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["CPF"] . "<br>";

echo "<br>";

$aluno = array("nome" => "Maria",
"idade" => "20", 
"end" => "rua Y", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"CPF"=> "000.000.000-20");


echo "<p> Aluno 2 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["CPF"] . "<br>";

echo "<br>";

$aluno = array("nome" => "Mari",
"idade" => "20", 
"end" => "rua Y", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"CPF"=> "000.000.000-20");


echo "<p> Aluno 3 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["CPF"] . "<br>";

?>


</body>
</html>