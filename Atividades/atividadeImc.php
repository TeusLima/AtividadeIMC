<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Peso</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Peso" name="peso">
  </div><br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Altura</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Altura" name="altura">
  </div><br>
  <button type="submit" class="btn btn-primary">Calcular</button><br><br>
</form>

<?php 
    if (isset($_POST["peso"]) && isset($_POST["altura"])) {

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);

        $imc = round($imc,2);

        switch (true) {
            case ($imc < 18.5):
                $resultado = "Abaixo do peso";
                break;
            case ($imc >= 18.5 && $imc < 24.9):
                $resultado = "Peso normal";
                break;
            case ($imc >= 25 && $imc < 29.9):
                $resultado = "Sobrepeso";
                break;
            default:
                $resultado = "Obesidade";
                break;
            
                };
            echo "$resultado";
                
        // $imc_formatado = number_format($imc, 2, ',', '.');

        // if ($imc < 18.5) {
        //     echo "O IMC é: $imc_formatado e está abaixo do peso <br>";
        // }else if ($imc >= 18.5 && $imc < 24.9) {
        //     echo "O IMC é: $imc_formatado e está no peso normal <br>";
        // }else if ($imc >= 25 && $imc < 29.9) {
        //     echo "O IMC é: $imc_formatado e está com sobrepeso <br>";
        // }else if ($imc >= 30 && $imc < 34.9) {
        //     echo "O IMC é: $imc_formatado e está com obesidade grau 1 <br>";
        // }else if ($imc >= 35 && $imc < 39.9) {
        //     echo "O IMC é: $imc_formatado e está com obesidade grau 2 <br>";
        // }else{
        //     echo "O IMC é: $imc_formatado e está com obesidade grau 3 <br>";
        // };
    }
?>
</body>
</html>