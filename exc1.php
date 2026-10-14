<?php
class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anoPublicacao;

    public function __construct($titulo, $autor,
    $paginas, $anoPublicacao){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas =$paginas;
        $this->anoPublicacao =$anoPublicacao;
    }

        public function exibirDadosLivro (){
            echo 'Titulo : ' . $this->titulo . 
            ' | Autor: ' . $this->autor . 
            ' | Páginas: ' . $this->paginas . 
            ' | Ano da publicação: ' . $this->anoPublicacao;
        }
    
}

$heartstopper = new Livro ("Heartstopper", "Alice May Oseman", 
288, 2021);
$vermelhoBrancoESangueAzul = new Livro ("Vermelho, Branco e Sangue Azul", "Casey McQuiston", 
416, "Desconhecido");

echo "<pre>";
$heartstopper->exibirDadosLivro();
echo "\n";
$vermelhoBrancoESangueAzul->exibirDadosLivro();
echo "</pre>";
?>