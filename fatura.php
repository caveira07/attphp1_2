<?php

class Fatura {
    public $numero;
    public $descricao;
    public $quantidade;
    public $precoPorItem;

    public function __construct($numero, $descricao, $quantidade, $precoPorItem) {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->quantidade = max(0, $quantidade);
        $this->precoPorItem = max(0.0, $precoPorItem);
    }

    public function getTotalFatura() {
        return $this->quantidade * $this->precoPorItem;
    }
}

$fatura1 = new Fatura("1", "Estabilizador", 10, 50.0);
echo "Número: $fatura1->numero <br>";
echo "Descrição: $fatura1->descricao <br>";
echo "Quantidade: $fatura1->quantidade <br>";
echo "Preço por item: $fatura1->precoPorItem <br>";
echo "Total da fatura: $" . $fatura1->getTotalFatura() . "<br>";

$fatura2 = new Fatura("2", "Placa de vídeo", -3, -15.0);
echo "<br>Número: $fatura2->numero <br>";
echo "Descrição: $fatura2->descricao <br>";
echo "Quantidade: $fatura2->quantidade <br>";
echo "Preço por item: $fatura2->precoPorItem <br>";
echo "Total da fatura: $" . $fatura2->getTotalFatura() . "<br>";

?>
