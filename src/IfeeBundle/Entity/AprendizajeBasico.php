<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AprendizajeBasico
 *
 * @ORM\Table(name="aprendizaje_basico")
 * @ORM\Entity
 */
class AprendizajeBasico
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVIDAD", type="text", length=65535, nullable=true)
     */
    private $actividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD_LOGRO", type="integer", nullable=true)
     */
    private $edadLogro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LOGRO", type="boolean", nullable=true)
     */
    private $logro;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_APRENDIZAJE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAprendizaje;

    /**
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * @param string $actividad
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;
    }

    /**
     * @return int
     */
    public function getEdadLogro()
    {
        return $this->edadLogro;
    }

    /**
     * @param int $edadLogro
     */
    public function setEdadLogro($edadLogro)
    {
        $this->edadLogro = $edadLogro;
    }

    /**
     * @return bool
     */
    public function isLogro()
    {
        return $this->logro;
    }

    /**
     * @param bool $logro
     */
    public function setLogro($logro)
    {
        $this->logro = $logro;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return int
     */
    public function getIdAprendizaje()
    {
        return $this->idAprendizaje;
    }

    /**
     * @param int $idAprendizaje
     */
    public function setIdAprendizaje($idAprendizaje)
    {
        $this->idAprendizaje = $idAprendizaje;
    }




}
