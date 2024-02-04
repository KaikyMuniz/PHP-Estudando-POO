<?php
    /* 
    - public: fará com que não haja ocultação nenhuma, toda propriedade ou método
    declarado com public serão acessíveis por todos que quiserem acessá-los.

    - protected: visibilidade protected é possível acessar dentro do escopo que 
    estiver o protected e dentro das classes herdeiras (filhos).

    - private: ao contrário do public, esse modificador faz com que qualquer 
    método ou propriedade seja visível só e somente pela classe que o declarou.
    */
    
    class Veiculos2 {
        public $modelo;
        protected $cor;
        private $ano;

        public function SetAno($a) {
            $this->ano = $a;
        }

        public function GetAno() {
            return $this->ano;
        }

        public function Andar() {
            echo "Andou<br/>";
        }

        public function Parar() {
            echo "Parou<br/>";
        }
    }

    $veiculo = new Veiculos2();
    $veiculo->SetAno(2022);
    echo "Ano do veiculo: " . $veiculo->GetAno() . "<br/>";
?>