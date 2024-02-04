<?php

    class Veiculos3 {
        public $modelo;
        public $cor;
        public $ano;

        private function Andar() {
            echo "Andou<br/>";
        }

        protected function Parar() {
            echo "Parou<br/>";
        }

        /*
        Só é possível acessar o método andar dentro do escopo da classe, por isso
        é possível puxar ele no método abaixo:
        */
        public function MostrarAcao() {
            $this->Andar();
        }
    }

    $veiculo = new Veiculos3();
    echo $veiculo->MostrarAcao();
?>