<?php

    require "../Config/Database.php";

    class ModelImc {

        public function processarDados($peso, $altura){
            global $con;

            $sql = "INSERT INTO IMC (Peso, Altura) VALUES ($peso, $altura)";

            if ($con->query($sql) === TRUE) {

                $data = array('status' => 'Inserido com sucesso');

            }else {

                $data = array('status' => 'erro', 'mensagem' => $con->error);

            }

            return $data;
        }
        
        public function selecionarDados(){

            global $con;

            $dados = [];

            $query = "SELECT * FROM IMC";
            $resultadoBanco = mysqli_query($con, $query);

            if (mysqli_num_rows($resultadoBanco) > 0 ) {

                while($row = mysqli_fetch_array($resultadoBanco)){

                    $dados[] = array(
                        'Id' => $row['Id'],
                        'Peso' => $row['Peso'],
                        'Altura' => $row['Altura']
                    );
                }
            }

            mysqli_close($con);

            return $dados;
        }
    }

?>