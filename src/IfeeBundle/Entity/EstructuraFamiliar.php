<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstructuraFamiliar
 *
 * @ORM\Table(name="estructura_familiar")
 * @ORM\Entity
 */
class EstructuraFamiliar
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
     * @var string
     *
     * @ORM\Column(name="PARENTESCO", type="text", length=65535, nullable=true)
     */
    private $parentesco;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="INSTRUCCION", type="text", length=65535, nullable=true)
     */
    private $instruccion;

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
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_DISCAPACIDAD", type="text", length=65535, nullable=true)
     */
    private $descripcionDiscapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CONVIVE", type="boolean", nullable=true)
     */
    private $convive;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONVIVE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConvive;

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
     * @return string
     */
    public function getParentesco()
    {
        return $this->parentesco;
    }

    /**
     * @param string $parentesco
     */
    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;
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
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * @param string $observacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    }

    /**
     * @return bool
     */
    public function isConvive()
    {
        return $this->convive;
    }

    /**
     * @param bool $convive
     */
    public function setConvive($convive)
    {
        $this->convive = $convive;
    }

    /**
     * @return int
     */
    public function getIdConvive()
    {
        return $this->idConvive;
    }

    /**
     * @param int $idConvive
     */
    public function setIdConvive($idConvive)
    {
        $this->idConvive = $idConvive;
    }

    public function __toString()
    {
        return $this->getApellidos()." ".$this->getNombres();
    }
}
