<?php
class Produto{
    public string $nome;
    public float $preco;
    public string $descricao;

    //metodo construtor
    public function __construct($valor1, $valor2,
    $valor3 = ('sem descrição')){
        $this->nome = $valor1;
        $this->preco = $valor2;
        $this->descricao =$valor3;
    }
}

$camiseta = new produto("camiseta", 50.00);
$calca = new produto ("calça jeans", 100.00, 'calça jeans');
$meias = new produto ("meias", 25.00, 'par de meias');

echo "<pre>";
print_r ($camiseta);
print_r ($calca);
print_r ($meias);
echo "</pre>";
?>