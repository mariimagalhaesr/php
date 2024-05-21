<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Array - Laços</h1>
    <h2>Exemplo 1</h2>

    <pre>
        <?php
        $A1=array("antonio ", "luis ", "pablo ", "ingrid ");
        echo $A1[0];
        ?>
    </pre>

    <h2>array com for</h2>

    <pre>
        <?php
        $A2=array("10", "9", "8", "7");
        echo $A2[0];
        ?>
    </pre>

    <h2>Exemplo 2</h2>

    <pre>
        <?php    
        for($x=0; $x<4; $x++){
        echo "posicao $x o valor é $A1[$x]";}
        ?>
    </pre>

    <h2>Exemplo 3</h2>

    <pre>
        <?php
        foreach ($A1 as $dados)
        echo $dados;
        ?>
    </pre>

    <h2>Exemplo 3 - Array: Definição explícita com chave</h2>

    <pre>
    <?php
    $var = array( "Maria" => 25,
                  "João" => 38,
                  "Feb" =>45,
                  "Marilene" =>50
                );
                foreach ($var as $dados)
                echo $dados;
    ?>
    </pre>

    <h2>Exemplo 4 - Array com chave e valor (forench)</h2>

    <pre>
        <?php
        foreach ($var as $chave => $valor) {
            echo "$chave: tem $valor anos <br>";
        }
        ?>
    </pre>

    <h2>Exemplo 5 - Print</h2>

    <pre>
        <?php   
        print_r($var);
        ?>
    </pre>

    <h2>Exemplo 6 : Array multidimensional: Definição explícita</h2>

    <pre>
        <?php
        $alunos= array("Maria" =>
                              array("endereco" => "Rua chile 1046",
                              "bairro" => "Rebouças",
                            "cidade" => "Carinhaha"),
                       "João" =>
                              array("endereco" => "Rua iapó 234",
                              "bairro" =>   "Prado Velho",
                               "cidade" => "Carinhaha"),
                      "Mariana" => 
                                array("endereco" => "Rua banana 345",
                                "bairro" => "Centro ",
                                 "cidade" => "Carinhaha")
        );
        print_r($alunos ["Maria"]["endereco"]);
        echo " ";
        print_r($alunos ["Maria"]["bairro"]);
        echo " ";
        print_r($alunos ["Maria"]["cidade"]);
        ?>
    </pre>

    <h2>Exemplo 7: Forench com array dentro de array</h2>

    <pre>
        <?php
        foreach($alunos as $chave => $aux){
            echo $chave;
        }

        foreach($aux as $chave => $valor){
            echo $valor;
        }
        ?>
    </pre>


</body>
</html>