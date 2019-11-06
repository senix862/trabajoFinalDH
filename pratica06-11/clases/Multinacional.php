<?php
require_once("autoload.php");

class Pyme extends Cliente implements Liquidable
{
  private $cuit;
  private $razonSocial;

  public function __construct(int $cuit,string $razonSocial,string $email,string $pass){
    $this->cuit = $cuit;
    $this->razonSocial = $razonSocial;
    parent::__construct($email, $pass);
  }

  public function setCuit($cuit)
  {
    $this->cuit = $cuit;
  }
  public function getCuit()
  {
    return $this->cuit;
  }

  public function setRazonSocial($rS)
  {
    $this->razonSocial = $rS;
  }
  public function getRazonSocial()
  {
    return $this->razonSocial;
  }


  public function liquidarHaberes(Persona $per, float $dinero)
  {
    $balance = $this->getCuenta()->getBalance();
    $montoMio = $balance -$dinero;
    $this->getCuenta()->setBalance($montoMio);

    $montoPer = $persona->getCuenta()->getBalance() + $monto;
    $per->getCuenta()->setBalance($montoPer);
  }
}
