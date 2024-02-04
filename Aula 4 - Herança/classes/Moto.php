<?php
    include("Veiculos.php");
    // extends para herdar os atributos e métodos da classe veiculos.
    // CLASSE FILHO
    class Moto extends Veiculos {
        /* As classes distintas podem contar com atributos ou métodos diferentes
        mesmo herdando os atributos e métodos da classe pai*/
        public function DarGrau() {
            echo "Dando grau kk<br/>";
        }
    }

    $moto = new Moto();
    echo "Modelo: " . $moto->modelo = $_POST['modelo'] . "<br/>";
    echo "Cor: " . $moto->cor = $_POST['cor'] . "<br/>";
    echo "Ano: " . $moto->ano = $_POST['ano'] . "<br/>";
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