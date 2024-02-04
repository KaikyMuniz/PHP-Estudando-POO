<?php
    class Login {
        private $email;
        private $senha;

        // Atráves do GET e SET é possível acessar atributos privados.

        public function GetEmail() {
            return $this->email;
        }

        // Eles também permitem a filtragem do dado de forma mais organizada.
        public function SetEmail($e) {
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        
        public function GetSenha() {
            return $this->senha;
        }

        public function SetSenha($s) {
            $this->senha = $s;
        }


        public function Logar() {
            if($this->email === "admin@gmail.com" && $this->senha === "123456"){
                echo "Logado com sucesso!";
            }else{
                echo "Dados incorretos";
            }
        }
    }

    $logar = new login();
    $logar->SetEmail($_POST['email']);
    $logar->SetSenha($_POST['senha']);
    $logar->Logar();
    echo "<br/>";
    echo "Email inserido: " . $logar->GetEmail() . "<br/>";
    echo "Senha inserida: " . $logar->GetSenha();
    
?>