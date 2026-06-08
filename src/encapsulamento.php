<?php

class Produto {
    // Atributos (propriedades)
    public string $nome;
    public float $preco;
    private int $estoque;   

    // Construtor — executado ao criar o objeto
    public function __construct(string $nome, float $preco, int $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    // Método público
    public function exibir(): void {
        echo "Produto: {$this->nome} <br> Preço: R$ {$this->preco} <br> Estoque: {$this->estoque}<br>";
    }

    // Getter para atributo privado
    public function getEstoque(): int {
        return $this->estoque;
    }
}

// Criando objetos
$p1 = new Produto("Notebook", 3500.00, 10);
$p2 = new Produto("Mouse", 89.90, 50);
$meucelular = new Produto("Xiaomi poco x8",1800.00,852); 

$p1->exibir();
echo "<hr";
$p2->exibir();
echo "<hr";
$meucelular->exibir();
