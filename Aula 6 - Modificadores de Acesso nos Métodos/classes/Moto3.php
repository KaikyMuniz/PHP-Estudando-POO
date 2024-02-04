<?php
    include("Veiculos3.php");

    class Moto3 extends Veiculos3 {

        public function AcaoParar() {
            $this->Parar();
        }

        public function DarGrau() {
            echo "Dando grau kk<br/>";
        }
    }

    $moto = new Moto3();
    echo "Modelo: " . $moto->modelo = $_POST['modelo'] . "<br/>";
    echo "Cor: " . $moto->cor = $_POST['cor'] . "<br/>";
    echo "Ano: " . $moto->ano = $_POST['ano'] . "<br/>";
    echo "Estado do Veículo acima " .$moto->AcaoParar() . "<br/>";

    if($_POST['grau'] === "sim"){
        $moto->DarGrau();        
    }
?>