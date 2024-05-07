<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<style>
    body{
        background-color: #fcfbf6;
    }
</style>
<body>
<?php
$aluno = array ("mariana","thacio", "joana", "dorival", "silvino", "ana");

for ($i = 0; $i <(count($aluno)); $i++){
    if ($i == 4) {
        echo "$aluno[$i] <br>";
    }
}
?>
    
</body>
</html>