<?php
    /* Herança é um recurso que permite que as classes compartilhem atributos e
    métodos, afim de aproveitar códigos ou comportamentes generalizados. */
    
    // CLASSE PAI
    class Veiculos {
        public $modelo;
        public $cor;
        public $ano;

        public function Andar() {
            echo "Andou<br/>";
        }

        public function Parar() {
            echo "Parou<br/>";
        }
    }

?>