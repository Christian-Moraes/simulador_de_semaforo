<?php
class Semaforo {
  private $luzAtual;

  public function __construct() {
    $this->luzAtual = "G";
  }

  public function trocaLuz() {
    if ($this->luzAtual == "G") {
      $this->luzAtual = "Y";
    } else if ($this->luzAtual == "Y") {
      $this->luzAtual = "R";
    } else {
      $this->luzAtual = "G";
    }
  }

  public function getLuzAtual() {
    return $this->luzAtual;
  }
}

$semaforo = new Semaforo();

while (true) {
  $luzAtual = $semaforo->getLuzAtual();
  echo "Luz atual: " . $luzAtual . "\n";

  if ($luzAtual == "Y") {
    echo "Parando o trânsito...\n";
  }

  $semaforo->trocaLuz();

  sleep(10);
}
?>