<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1 style='color: blue'>Olá Mundo! </h1>";
        echo "<input placeholder='Digite o valor'>";
        echo "<button style='color: red'>Enviar</button><br><br>";

        echo "<div>
                <td>
                    <li>Teste</li>
                    <li>Teste</li>
                </td>
              </div><br>";

        $idade = 65;

        if ($idade < 16) {

            echo "Não votante";

        }else if($idade >= 16 && $idade <= 17 || $idade >=65){

            echo "Voto Facultativo";
            
        }else if($idade >=18 && $idade <65){

            echo "Voto Obrigatorio";

        }else{

            echo "Não identificado";

        }

        echo "<br><br>FOR:<br><br>";

        for ($i=0; $i < 5; $i++) {

            echo "Numero, $i <br>";
        }

        echo "<br><br>WHILE:<br><br>";

        $valor = 5;

        while($valor>=0){
            echo "Numero, $valor <br>";
            $valor--;
        }

        echo "<br><br>ARRAY:<br><br>";

        $frutas = [];

        $frutas[0] = "Maça";
        $frutas[1] = "Laranja";
        $frutas[2] = "Melão";

        for ($i=0; $i < 3; $i++) { 
           
            echo "A fruta é: $frutas[$i] <br>";

        }

        echo "<br><br>FOREACH<br><br>";

        $carros = [
            "m1" => "Doplhin",
            "m2" => "Kwid",
            "m3" => "A5",
        ];

        foreach ($carros as $chave=>$valor) {

            echo "A chave $chave representa o carro: $valor <br>";
        }


    ?>
</body>
</html>