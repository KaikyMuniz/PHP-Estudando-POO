<?php
    include("Veiculos2.php");

    class Carro2 extends Veiculos2 {

        public function SetCor($c) {
            $this->cor = $c;
        }
        
        public function GetCor() {
            return $this->cor;
        }

        public function LigarLimpador() {
            echo "Limpando...<br/>";
        }
    }

    $carro = new Carro2();
    echo "Modelo: " . $carro->modelo = $_POST['modelo'] . "<br/>";
    $carro->SetCor($_POST['cor']);
    echo "Cor: " . $carro->GetCor() . "<br/>";

    if($_POST['andando'] === "sim"){
        $carro->Andar();
    }else{
        $carro->Parar();
    }
    echo "<br/>";
    if($_POST['parabrisas'] === "sim"){
        $carro->LigarLimpador();        
    }
?>