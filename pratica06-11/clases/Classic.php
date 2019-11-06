<?php
require_once("autoload.php");


class Classic extends Cuenta
{

  public function debitar(float $monto, string $origen){
  if ($origen === "Banelco") {
    $this->balance = $this->balance - ($monto*1.05);
  }  elseif ($origen === "Link") {
    $this->balance = $this->balance - ($monto*1.1);
  } else {
    $this->balance = $this->balance - $monto;
  }
  }
}
