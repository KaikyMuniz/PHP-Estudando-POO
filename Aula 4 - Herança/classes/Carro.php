<?php
    include("Veiculos.php");
    // extends para herdar os atributos e métodos da classe veiculos.
    // CLASSE FILHO
    class Carro extends Veiculos {
        /* As classes distintas podem contar com atributos ou métodos diferentes
        mesmo herdando os atributos e métodos da classe pai*/
        public function LigarLimpador() {
            echo "Limpando...<br/>";
        }
    }

    $carro = new Carro();
    echo "Modelo: " . $carro->modelo = $_POST['modelo'] . "<br/>";
    echo "Cor: " . $carro->cor = $_POST['cor'] . "<br/>";
    echo "Ano: " . $carro->ano = $_POST['ano'] . "<br/>";
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