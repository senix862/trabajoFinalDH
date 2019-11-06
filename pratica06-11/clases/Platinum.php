<?php
require_once("autoload.php");


class Platinium extends Cuenta
{

  public function debitar(float $monto, string $origen){
  if (parent::getBalance() >= 5000) {
    $this->balance = $this->balance - $monto;
  }  else {
    $this->balance = $this->balance - ($monto*1.05);
  }
  }
}
