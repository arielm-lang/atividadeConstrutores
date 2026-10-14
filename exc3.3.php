<?php
class ContaBancaria {
    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function exibirTitular() {
        echo "<br> Nome: " . $this->titular;
    }

    public function exibirSaldo() {
        echo "<br> Saldo: R$ " . $this->saldo;
    }

    public function alterarTitular($novoNome) {
        $this->titular = $novoNome;
    }

    public function depositarSaldo($valor) {
        $this->saldo += $valor;
    }

    public function sacarSaldo($valor) {
        if ($valor > $this->saldo) {
            echo "<br> Não pode sacar esse valor";
        } else {
            $this->saldo -= $valor;
        }
    }
}

$conta1 = new ContaBancaria("Ariel", 1000.0);

$conta1->exibirTitular();
$conta1->alterarTitular('Luiz');
$conta1->exibirTitular();
$conta1->exibirSaldo();
$conta1->depositarSaldo(100);
$conta1->exibirSaldo();
$conta1->sacarSaldo(400);
$conta1->exibirSaldo();
?>