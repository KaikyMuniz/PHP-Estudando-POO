<?php
    include("Veiculos2.php");

    class Moto2 extends Veiculos2 {
        /* 
        Usar o Set e o Get pois a classe pai (Veiculo) contém o atributo cor
        com o acesso protected.
        */
        public function SetCor($c) {
            $this->cor = $c;
        }
        
        public function GetCor() {
            return $this->cor;
        }
        public function DarGrau() {
            echo "Dando grau kk<br/>";
        }
    }

    $moto = new Moto2();
    echo "Modelo: " . $moto->modelo = $_POST['modelo'] . "<br/>";
    $moto->SetCor($_POST['cor']);
    echo "Cor: " . $moto->GetCor() . "<br/>";
    if($_POST['andando'] === "sim"){
        $moto->Andar();
    }else{
        $moto->Parar();
    }
    echo "<br/>";
    if($_POST['grau'] === "sim"){
        $moto->DarGrau();        
    }
?>