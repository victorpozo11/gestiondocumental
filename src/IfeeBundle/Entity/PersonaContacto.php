<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonaContacto
 *
 * @ORM\Table(name="persona_contacto")
 * @ORM\Entity
 */
class PersonaContacto
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
     * @ORM\Column(name="OCUPACION", type="text", length=65535, nullable=true)
     */
    private $ocupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DISCAPACIDAD", type="boolean", nullable=true)
     */
    private $discapacidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="USA_TELEFONO", type="boolean", nullable=true)
     */
    private $usaTelefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEFONO2", type="integer", nullable=true)
     */
    private $telefono2;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEFONO3", type="integer", nullable=true)
     */
    private $telefono3;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NACIMIENTO", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_DEFUNCION", type="date", nullable=true)
     */
    private $fechaDefuncion;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO_CIVIL", type="text", length=65535, nullable=true)
     */
    private $estadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="INSTRUCCION", type="text", length=65535, nullable=true)
     */
    private $instruccion;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFESION", type="text", length=65535, nullable=true)
     */
    private $profesion;

    /**
     * @var string
     *
     * @ORM\Column(name="LUGAR_TRABAJO", type="text", length=65535, nullable=true)
     */
    private $lugarTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_DISCAPACIDAD", type="text", length=65535, nullable=true)
     */
    private $descripcionDiscapacidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTACTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContacto;

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
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * @param string $ocupacion
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;
    }

    /**
     * @return bool
     */
    public function isDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * @param bool $discapacidad
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;
    }

    /**
     * @return bool
     */
    public function isUsaTelefono()
    {
        return $this->usaTelefono;
    }

    /**
     * @param bool $usaTelefono
     */
    public function setUsaTelefono($usaTelefono)
    {
        $this->usaTelefono = $usaTelefono;
    }

    /**
     * @return int
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * @param int $telefono2
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    }

    /**
     * @return int
     */
    public function getTelefono3()
    {
        return $this->telefono3;
    }

    /**
     * @param int $telefono3
     */
    public function setTelefono3($telefono3)
    {
        $this->telefono3 = $telefono3;
    }

    /**
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param int $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param \DateTime $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return \DateTime
     */
    public function getFechaDefuncion()
    {
        return $this->fechaDefuncion;
    }

    /**
     * @param \DateTime $fechaDefuncion
     */
    public function setFechaDefuncion($fechaDefuncion)
    {
        $this->fechaDefuncion = $fechaDefuncion;
    }

    /**
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * @param string $estadoCivil
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * @return string
     */
    public function getInstruccion()
    {
        return $this->instruccion;
    }

    /**
     * @param string $instruccion
     */
    public function setInstruccion($instruccion)
    {
        $this->instruccion = $instruccion;
    }

    /**
     * @return string
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * @param string $profesion
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;
    }

    /**
     * @return string
     */
    public function getLugarTrabajo()
    {
        return $this->lugarTrabajo;
    }

    /**
     * @param string $lugarTrabajo
     */
    public function setLugarTrabajo($lugarTrabajo)
    {
        $this->lugarTrabajo = $lugarTrabajo;
    }

    /**
     * @return string
     */
    public function getDescripcionDiscapacidad()
    {
        return $this->descripcionDiscapacidad;
    }

    /**
     * @param string $descripcionDiscapacidad
     */
    public function setDescripcionDiscapacidad($descripcionDiscapacidad)
    {
        $this->descripcionDiscapacidad = $descripcionDiscapacidad;
    }

    /**
     * @return int
     */
    public function getIdContacto()
    {
        return $this->idContacto;
    }

    /**
     * @param int $idContacto
     */
    public function setIdContacto($idContacto)
    {
        $this->idContacto = $idContacto;
    }


}
