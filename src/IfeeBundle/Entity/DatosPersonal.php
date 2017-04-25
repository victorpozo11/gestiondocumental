<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosPersonal
 *
 * @ORM\Table(name="datos_personal")
 * @ORM\Entity
 */
class DatosPersonal
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES", type="text", length=65535, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="text", length=65535, nullable=true)
     */
    private $apellidos;

    /**
     * @var integer
     *
     * @ORM\Column(name="CEDULA", type="integer", nullable=true)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO", type="text", length=65535, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO", type="text", length=65535, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="CICLO", type="text", length=65535, nullable=true)
     */
    private $ciclo;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="text", length=65535, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_INGRESO_INSTITUCION", type="text", length=65535, nullable=true)
     */
    private $fechaIngresoInstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="text", length=65535, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="text", length=65535, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="text", length=65535, nullable=true)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DATOS_PERSONAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDatosPersonal;

    /**
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param string $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return int
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param int $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param string $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return string
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }

    /**
     * @param string $ciclo
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }

    /**
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return string
     */
    public function getFechaIngresoInstitucion()
    {
        return $this->fechaIngresoInstitucion;
    }

    /**
     * @param string $fechaIngresoInstitucion
     */
    public function setFechaIngresoInstitucion($fechaIngresoInstitucion)
    {
        $this->fechaIngresoInstitucion = $fechaIngresoInstitucion;
    }

    /**
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return int
     */
    public function getIdDatosPersonal()
    {
        return $this->idDatosPersonal;
    }

    /**
     * @param int $idDatosPersonal
     */
    public function setIdDatosPersonal($idDatosPersonal)
    {
        $this->idDatosPersonal = $idDatosPersonal;
    }

    public function __toString()
    {
        return $this->getApellidos()." ".$this->getNombres();
    }
}
