<?php
    session_start();
    /* 
    O abstract sinaliza que a classe que o conter é apenas uma classe base
    para outras classes, impossibilitando que ela seja instanciada como no
    exemplo abaixo:
    $banco = new Banco();
    */
    abstract class Banco{

        /* 
        Observação: ao deixar uma classe abstrata, o uso do protected é
        importante, isso porque atráves dele apenas as classes filhos poderão
        acessar a classe modelo, Banco
        */
        protected $saldo;
        protected $limiteSaque;
        protected $juros;

        /* 
        É possível trabalhar também com os getters e setters mesmo em uma classe
        abstrata.
        */
        
        public function SetSaldo($s) {
            $this->saldo = $s;
        }

        public function GetSaldo() {
            return $this->saldo;
        }

        /* 
        Outra observação: ao deixar os métodos como abstratos e protegidos, eles
        também passam a servir de modelo, fazendo com que sua funcionalidade seja
        declada só nas classes filhos.
        */
        abstract protected function Sacar($s);

        abstract protected function Depositar($d);
    }

    class Itau extends Banco {
        function Sacar($s) {
            /*
            $this->saldo = $this->saldo + $s;
            É possível abreviar o código atráves do uso do "-=" que simboliza
            a mesma lógica usada acima.
            */
            $this->saldo -= $s;
            echo "<h2>- Sacou: " . $s . " R$</h2>";
        }

        function Depositar($d) {
            $this->saldo += $d;
            echo "<h2>+ Depositou: " . $d . "R$</h2>";
        }
    }

    $itau = new Itau();

    if(isset($_POST['saldo'])){
        $_SESSION['saldo'] = $_POST['saldo'];
    }

    $itau->SetSaldo($_SESSION['saldo']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="https://logodownload.org/wp-content/uploads/2018/09/bradesco-logo-4.png"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <title>Conta Bradesco</title>
</head>
<body>
    <span>
        <img src="https://logodownload.org/wp-content/uploads/2018/09/bradesco-logo-4.png" alt="Bradesco logo"/>
        <h1>Registros</h1>
    </span>
    <h2>= Saldo: <?php echo $itau->GetSaldo(); ?> R$</h2>
    <?php
        if(isset($_GET['saque'])){
            $itau->Sacar($_GET['saque']);
            echo "<h2>= Novo saldo: " . $itau->GetSaldo(). " R$</h2>";
        }
    ?>
    <?php
        if(isset($_GET['deposito'])){
            $itau->Depositar($_GET['deposito']);
            echo "<h2>= Novo saldo: " . $itau->GetSaldo(). " R$</h2>";
        }
    ?>
    <form method="GET" action="">
        <h1>Realize novas ações</h1>
        <label>Sacar uma quantia:</label>
        <br>
        <input type="number" id="saque" name="saque" placeholder="Sacar:" required/>
        <br>
        <label>Deposite uma quantia:</label>
        <br>
        <input type="number" id="deposito" name="deposito" placeholder="Depositar:" required/>
        <br>
        <input type="submit" value="Ação"/>
    </form>
    <a href="../php/sair.php">Sair</a>
</body>
</html>