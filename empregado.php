<?php

class Empregado {
    public $nome;
    public $sobrenome;
    public $salarioMensal;

    public function __construct($nome, $sobrenome, $salarioMensal) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    public function aplicarAumento($porcentagem) {
        $this->salarioMensal *= (1 + $porcentagem / 100);
    }
}

$empregado1 = new Empregado("João", "Silva", 3000);
$empregado2 = new Empregado("Maria", "Santos", 4000);

echo "Salário anual do empregado 1: $" . $empregado1->salarioMensal * 12 . "<br>";
echo "Salário anual do empregado 2: $" . $empregado2->salarioMensal * 12 . "<br>";

$empregado1->aplicarAumento(10);
$empregado2->aplicarAumento(10);


echo "<br>Salário anual do empregado 1 após aumento: $" . $empregado1->salarioMensal * 12 . "<br>";
echo "Salário anual do empregado 2 após aumento: $" . $empregado2->salarioMensal * 12 . "<br>";

?>
