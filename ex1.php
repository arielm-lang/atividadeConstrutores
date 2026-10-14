<?php

class Pessoa{
    public string $nome;
    public int $idade;

//metodo construtor, deixa alguns campos obrigatorios
//para ser preenchidos
    public function __construct($valor1, $valor2){
        $this->nome = $valor1;
        $this->idade = $valor2;
    }


    public function exibirDadosPessoa (){
        echo 'Nome : ' . $this->nome . 
        ' | Idade: ' . $this->idade;
    }
}

$pessoa = new Pessoa('Ariel', 17);

$pessoa->exibirDadosPessoa();

//pessoa->nome = 'recebe nome';
//pessoa->idade = 24

$pessoa->exibirDadosPessoa();
?>