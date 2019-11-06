<?php
require_once("autoload.php");


class Gold extends Cuenta
{

  public function debitar(float $monto, string $origen){
  if ($origen === "Link") {
    $this->balance = $this->balance - ($monto*1.05);
  } else {
    $this->balance = $this->balance - $monto;
  }
  }
}
