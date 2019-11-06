<?php
require_once("autoload.php");

abstract class Cuenta
{
  protected  $cbu;
  protected  $balance;
  protected  $fechaUM;

  function __construct(string $cbu)
  {
    $this->cbu = $cbu;
    $this->balance = 0;
    $this->fechaUM = date('Y-m-d');
  }
  public function setBalance($bal)
  {
    $this->balance = $bal;
  }
  public function getBalance()
  {
    return $this->balance;
  }
  public function setCbu($cbu)
  {
    $this->cbu = $cbu;
  }
  public function getCbu()
  {
    return $this->cbu;
  }
  public function setFechaUM($rS)
  {
    $this->fechaUM = $rS;
  }
  public function getFechaUM()
  {
    return $this->fechaUM;
  }
  abstract public function debitar(float $monto, string $origen);
  public function acreditar(float $monto){
    $this->setFechaUM(date('Y-m-d'));
    $this->balance= $this->balance+$monto;
  }
}
