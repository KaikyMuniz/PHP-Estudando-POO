<?php
    class Pessoa{

        // ATRIBUTOS:
        public $nome;
        public $idade;

        // MÉTODO:
        public function ExibirDados() {
            echo "Nome do elemento: " . $this->nome . "<br/>";
            echo "Idade do elemento: " . $this->idade . "<br/>";
        }
    }

    $elemento = new Pessoa();
    $elemento->nome = $_POST['nome'];
    $elemento->idade = $_POST['idade'];
    $elemento->ExibirDados();
?>