<?php
    class Login2 {   
        private $nome;
        private $email;
        private $senha;

        /* Através do __construct é possível inserir os paramêtros 
        já na inicialização do objeto, nesse caso, new Login(); */

        public function __construct($nome, $email, $senha) {
            $this->nome = $nome;
            $this->SetEmail($email);
            $this->SetSenha($senha);
        }

        public function GetNome() {
            return $this->nome;
        }

        public function GetEmail() {
            return $this->email;
        }

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
            if($this->nome === "admin" && $this->email === "admin@gmail.com" && 
                $this->senha === "123456"){
                echo "Logado com sucesso!";
            }else{
                echo "Dados incorretos";
            }
        }
    }

    $logar = new login2($_POST['nome'], $_POST['email'], $_POST['senha']);
    $logar->Logar();
    echo "<br/>";
    echo "Nome inserido: " . $logar->GetNome() . "<br/>";
    echo "Email inserido: " . $logar->GetEmail() . "<br/>";
    echo "Senha inserida: " . $logar->GetSenha();
    
?>