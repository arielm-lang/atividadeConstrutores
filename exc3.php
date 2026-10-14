<?php
class ContaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct($titular, $valor1, $valor2){
        $this->titular = $titular;
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->saldo = $this->calcularValor();
    }
    public function calcularValor(){
        return ($this->valor1 + $this->valor2) / 2;
    }
}
$titular = new ContaBancaria("Ariel", 50, 37);

echo "<pre>";
print_r ($titular);
echo "</pre>";
?>