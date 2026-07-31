<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

         $alunos = [
            "João" => "8",
            "Pedro" => "5",
            "Maria" => "9",
            "Carlos" => "4",
            "Julia" => "7",
        ];


        foreach ($alunos as $nome=>$nota) {

            if ($nota >= 7) {
                echo "O aluno $nome foi Aprovado e sua nota foi: $nota <br>";
                $aprovados++;
            }else{
                echo "O aluno $nome foi reprovado e sua nota foi: $nota <br>";
                $reprovados++;
            }

        };

        $media = array_sum($alunos) / count($alunos);
        
        echo "<br>O total de alunos aprovados foi: $aprovados <br>";
        echo "<br>O total de alunos reprovados foi: $reprovados <br>";
        
        echo "<br>A média da turma foi: $media <br>";

        echo "<br><br>Par ou Impar <br><br>";

        $numero = 10;

        if ($numero % 2 == 0) {
            echo "O número $numero é par <br>";
        }else{
            echo "O número $numero é impar <br>";
        };

        echo "<br><br>"; 


        for ($i=1; $i <= $numero; $i++) { 
            if ($i % 2 == 0) {
                echo "O número $i é par <br>";
            }else{
                echo "O número $i é impar <br>";
            }
        };

        echo "<br><br>IMC<br><br>";

        $peso = 70;
        $altura = 1.75;
        $imc = $peso / ($altura * $altura);

        $imc_formatado = number_format($imc, 2, ',', '.');

        if ($imc < 18.5) {
            echo "O IMC é: $imc_formatado e está abaixo do peso <br>";
        }else if ($imc >= 18.5 && $imc < 24.9) {
            echo "O IMC é: $imc_formatado e está no peso normal <br>";
        }else if ($imc >= 25 && $imc < 29.9) {
            echo "O IMC é: $imc_formatado e está com sobrepeso <br>";
        }else if ($imc >= 30 && $imc < 34.9) {
            echo "O IMC é: $imc_formatado e está com obesidade grau 1 <br>";
        }else if ($imc >= 35 && $imc < 39.9) {
            echo "O IMC é: $imc_formatado e está com obesidade grau 2 <br>";
        }else{
            echo "O IMC é: $imc_formatado e está com obesidade grau 3 <br>";
        };




        

    ?>
</body>
</html>