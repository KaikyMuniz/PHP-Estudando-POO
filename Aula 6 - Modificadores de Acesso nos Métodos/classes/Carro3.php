<?php
    include("Veiculos3.php");

    class Carro3 extends Veiculos3 {

        /*
        É possível acessar o método parar que está protegido na classe pai devido
        ao protected permiti o acesso do método ou atributo em classes filhos. 
        */
        public function AcaoParar() {
            $this->Parar();
        }

        public function LigarLimpador() {
            echo "Limpando...<br/>";
        }
    }

    $carro = new Carro3();
    echo "Modelo: " . $carro->modelo = $_POST['modelo'] . "<br/>";
    echo "Cor: " . $carro->cor = $_POST['cor'] . "<br/>";
    echo "Ano: " . $carro->ano = $_POST['ano'] . "<br/>";
    echo "Estado do Veículo: " . $carro->AcaoParar() . "<br/>";

    if($_POST['parabrisas'] === "sim"){
        $carro->LigarLimpador();        
    }
?>