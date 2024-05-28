<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body{
  background-color: beige;
}

h2, h3{
    background-color: hotpink;
}

</style>
<body>

<h2>Constantes</h2>
<?php

// Para definir uma constante utilizamos o comando define(). Após sua definição, uma
// constante não pode ser alterada nem removida.

define("PI", 3.1415);
echo PI;
?>

<?php 
define("PI", 3.1415, true);

echo PI;
echo "<br>";
echo PI;
?>

<h2>Constantes Pré-definidas</h2>
<?php

function funcConsts() {
    echo "ARQUIVO: ".__FILE__."<br>";
    echo "DIRETÓRIO: ".__DIR__."<br>";
    echo "LINHA: ".__LINE__."<br>";
    echo "FUNÇÃO: ".__FUNCTION__."<br>";
    }
    funcConsts(); 

?>
    
<?php

class veiculo { 
    private $marca;
    function __construct() {
    echo "CLASSE: ".__CLASS__."<br>";
    }
    function setMarca($marca) { $this->marca = $marca;
    echo "MÉTODO: ".__METHOD__."<br>";
    } }
    $obj = new veiculo();
    $obj->setMarca("Wolksvagem");

?>

<h2>Variáveis Superglobais (pré-definidas)</h2>
<?php

$vars_pre = get_defined_vars();
print_r($vars_pre);
?>

<h2>Funções - PHP<h2>
<?php
    function nome_funcao($par_1 = 0, $par_2 = "vazio") {
    echo "Código da Função <br>";
    return "Dado de Retorno: ".$par_1."/".$par_2;
    }
    $retorno = nome_funcao();
    echo $retorno."<br><br>";
    $retorno = nome_funcao(12, "Bill Gates");
    echo $retorno."<br><br>";
?>

<H3>Exercício Funções - Soma</H3> 
<?php
    function soma() {
        $numero1=10;
        $numero2=30;
        $soma= $numero1 + $numero2;
        echo "O resultado é $soma";
    }

    soma(); 
?>

<h3>Soma Com parâmetro</h3>
<?php
    function somaparametro($p1, $p2) {
        $p3 = $p1+$p2;
        echo "O resultado é $p3";

    }

    somaparametro(2000,5000); 
?>

<h3>Somar e multiplicar</h3>
<?php
    function somar_multiplicar($p1, $p2, $p3){
        $soma= $p1 + $p2;
        $soma= $soma*$p3;
        echo "O resultado final é $soma";
    }   

    somar_multiplicar(2,2,4);

?>

<h3>As quatro operações</h3>
<?php
    function somar_oper($p1, $p2){
        $adicao= $p1 + $p2;
        $subtracao= $p1 - $p2;
        $multiplicacao= $p1 * $p2;
        $divisao= $p1 / $p2;
        
        return ($adicao+$subtracao+$multiplicacao+$divisao);
    }
    echo somar_oper(10,10);

?>

<h3>Função ao quadrado</h3>
<?php
    function aoquadrado($p1){
        $aoquadrado= $p1 * $p1;

        return ($aoquadrado);
    }
    echo aoquadrado (5);
?>

</body>
</html>