<?php
    /*
     Sitios
    */
  class Sitio
  {
      var $idSitio;
      var $nombre;
      var $pais;
      var $ciudad;
      var $direccion;
      var $telefono;
      var $latitud;
      var $longitud;
      var $estado;
  }
    // constructor
    function __construct($idSitio, $nombre, $pais, $ciudad, $direccion, $telefono, $latitud, $longitud, $estado)
    {
        $this->idSitio = $idSitio;
        $this->nombre = $nombre;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->estado = $estado;
    }
 // Setter and Getter Methods
    function setIdSitio($idSitio)
    {
        $this->idSitio = $idSitio;
    }
    function getIdSitio()
    {
        return $this->idSitio;
    }
    function setName($nombre)
    {
        $this->nombre = $nombre;
    }
    function getName()
    {
        return $this->nombre;
    }
    function setCountry($pais)
    {
        $this->pais = $pais;
    }
    function getCountry()
    {
        return $this->pais;
    }
    function setCity($ciudad)
    {
        $this->ciudad = $ciudad;
    }
    function getCity()
    {
        return $this->ciudad;
    }
    function setAddress($address)
    {
        $this->address = $address;
    }
    function getAddress()
    {
        return $this->address;
    }
    function setPhone($phone)
    {
        $this->phone = $phone;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function setLatitud($latitud)
    {
        $this->latitud = $latitud;
    }
    function getLatitud()
    {
        return $this->latitud;
    }
    function setLongitud($longitud)
    {
        $this->longitud = $longitud;
    }
    function getLongitud()
    {
        return $this->longitud;
    }
    function setStatus($estado)
    {
        $this->estado = $estado;
    }
?>
