<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Cozinha</title>
    </head>
</html>

<body>
    <?php
        require_once('index.php');
        require_once('ingredientes.php');

        $cozinha_mineira = new Cozinha ();
        $cozinha_chinesa = new Cozinha ();

        // Mineira        
       
        $cozinha_mineira -> setID("Cozinha Mineira");
        $cozinha_mineira -> setAbertura(new dateTime("14:00"));
        $cozinha_mineira -> setFechamento(new dateTime("20:00"));
        $cozinha_mineira -> setPratoPrincipal("Feijoada");


        echo "Origem: ".$cozinha_mineira->getID()." </br> ";
        echo "Prato Principal: ".$cozinha_mineira->getPratoPrincipal()." </br> ";
        echo "Hora de Abertura: ".$cozinha_mineira->getAbertura() -> format ("H:i")." </br> ";
        echo "Hora do Fechamento: ".$cozinha_mineira->getFechamento()-> format ("H:i")." </br>";

        echo "</br>";
        echo "Lista de Ingredientes:";
        $ingredientes = [
            [
            'Feijão',
            '10-03-2022'
            ],
            [
            'Farinha',
            '22-03-2022'
            ],
            [
            'Arroz',
            '15-04-2022'
            ],
            [
            'Carne de Porco',
            '28-12-2021'
            ],
            [
            'Linguiça',
            '26-12-2021'
            ],
            ];
        echo "</br>";
        foreach($ingredientes as [$nome, $data_validade]) {
            echo 'Nome: ', $nome, '<br>', 'Data de Validade: ', $data_validade, '<br>';
        }

        echo "</br>";
        echo "</br>";

        // Chinesa

        $cozinha_chinesa -> setID("Cozinha Chinesa");
        $cozinha_chinesa -> setAbertura(new dateTime("10:00"));
        $cozinha_chinesa -> setFechamento(new dateTime("21:00"));
        $cozinha_chinesa -> setPratoPrincipal("Yakissoba");

        echo "Origem: ".$cozinha_chinesa->getID()." </br> ";
        echo "Prato Principal: ".$cozinha_chinesa->getPratoPrincipal()." </br> ";
        echo "Hora de Abertura: ".$cozinha_chinesa->getAbertura() -> format ("H:i")." </br> ";
        echo "Hora do Fechamento: ".$cozinha_chinesa->getFechamento() -> format ("H:i")." </br>";

        echo "</br>";
        echo "Lista de Ingredientes:";
        $ingredientes = [
            [
            'Champignon',
            '10-12-2022'
            ],
            [
            'Brocólis',
            '02-01-2022'
            ],
            [
            'Macarrão',
            '10-11-2022'
            ],
            [
            'Carne',
            '18-12-2021'
            ],       
        ];
        echo "</br>";
        foreach($ingredientes as [$nome, $data_validade]) {
            echo 'Nome: ', $nome, '<br>', 'Data de Validade: ', $data_validade, '<br>';
        }
    ?>
</body>