<?php

abstract class Usuario
{
  private $nombre;
  private $apellido;
  protected $email;
  protected $password;
  private $nacionalidad;
  protected $avatar;
  private $cumpleaños;
  private $suscripcion;



  public function __construct(string $nombre, string $apellido, string $email, string $password, string $nacionalidad)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->password = $this->hashPassword($password);
    $this->nacionalidad = $nacionalidad;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($password){
    $this->password = $password;
  }
  public function getPass(){
    return $this->password;
  }
  public function setNacionalidad($nacionalidad){
    $this->nacionalidad = $nacionalidad;
  }
  public function getNacionalidad(){
    return $this->nacionalidad;
  }
  public function setAvatar($avatar){
    $this->avatar = $avatar;
  }
  public function getAvatar(){
    return $avatar->avatar;
  }
  public function setCumple($cumpleaños){
    $this->cumpleaños = $cumpleaños;
  }
  public function getCumpleaños(){
    return $this->cumpleaños;
  }
  public function setSuscripcion($suscripcion){
    $this->suscripcion = $suscripcion;
  }
  public function getSuscripcion(){
    return $this->suscripcion;
  }
  public function setAdmin($administrador){
    $this->administrador = $administrador;
  }
  public function getAdministrador(){
    return $this->administrador;
  }

  protected function hashPassword(string $password)
  {
      return password_hash($password, PASSWORD_DEFAULT);
  }
  public function suscribirUsuario(Usuario){

  }
  public function buscarProducto(string){

  }
  public function enviarMensaje(string){

  }
  public function agregarAlCarrito(Producto){

  }
  public function quitarDelCarrito(Producto){

  }
  public function agregarAfavoritos(Producto){

  }
  public function quitarDefavoritos(Producto){

  }
}
