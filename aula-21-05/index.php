<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
    $array = [
        'alunos' => [
            [
            'matricula' => 202312587,
            'nome' => 'Mariana',
            'idade' => 17,
            'endereco' => 'Avenida Rio Branco 345',
            'turma' => '2aii'
        ],
        [
            'matricula' => 202112566,
            'nome' => 'Thacio',
            'idade' => 19,
            'endereco' => 'Avenida Cincinnatico 345',
            'turma' => '2bii'
        ],
        [
            'matricula' => 202152698,
            'nome' => 'Victória',
            'idade' => 17,
            'endereco' => 'Avenida Cinco 74',
            'turma' => '2aa'

        ]
        ]
        ];
   
    ?>

    <h1>Tabela 1</h1>
    <table>
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Endereço</th>
            <th>Turma</th>
        </tr>

        <tr>
            <td>
                <?php
                print_r($array['alunos'][0]['matricula']);
                ?>
            </td>
            <td>
                <?php
                  print_r($array['alunos'][0]['nome']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][0]['idade']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][0]['endereco']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][0]['turma']);
                ?>
            </td>
        </tr>

        <tr>
            <td>
            <?php
                  print_r($array['alunos'][1]['matricula']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][1]['nome']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][1]['idade']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][1]['endereco']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][1]['turma']);
                ?>
            </td>
        </tr>

        <tr>
            <td>
            <?php
                  print_r($array['alunos'][2]['matricula']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][2]['nome']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][2]['idade']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][2]['endereco']);
                ?>
            </td>
            <td>
            <?php
                  print_r($array['alunos'][2]['turma']);
                ?>
            </td>
        </tr>
    </table>

    <h1>Tabela 2</h1>

    <table>
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Endereço</th>
            <th>Turma</th>
        </tr>
          
        <?php
        for( $i=0; $i<=count($array['alunos']); $i++) {  ?>
        
        <tr>
            <td>     <?php print_r ($array['alunos'][$i]['matricula']);?>    </td>
            <td>     <?php print_r ($array['alunos'][$i]['nome']);   ?>      </td>
            <td>     <?php print_r ($array['alunos'][$i]['idade']);  ?>      </td>
            <td>     <?php print_r ($array['alunos'][$i]['endereco']);?>     </td> 
            <td>     <?php print_r ($array['alunos'][$i]['turma']);   ?>     </td>
        </tr>

         <?php } ?>
    </table>



</body>
</html>