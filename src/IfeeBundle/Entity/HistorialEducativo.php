<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialEducativo
 *
 * @ORM\Table(name="historial_educativo")
 * @ORM\Entity
 */
class HistorialEducativo
{
    /**
     * @var string
     *
     * @ORM\Column(name="NIVEL", type="text", length=65535, nullable=true)
     */
    private $nivel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CUMPLE", type="boolean", nullable=true)
     */
    private $cumple;

    /**
     * @var string
     *
     * @ORM\Column(name="LUGAR", type="text", length=65535, nullable=true)
     */
    private $lugar;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD_DESDE", type="integer", nullable=true)
     */
    private $edadDesde;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD_HASTA", type="integer", nullable=true)
     */
    private $edadHasta;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORIAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistorial;

    /**
     * @return string
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param string $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return bool
     */
    public function isCumple()
    {
        return $this->cumple;
    }

    /**
     * @param bool $cumple
     */
    public function setCumple($cumple)
    {
        $this->cumple = $cumple;
    }

    /**
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * @param string $lugar
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    /**
     * @return int
     */
    public function getEdadDesde()
    {
        return $this->edadDesde;
    }

    /**
     * @param int $edadDesde
     */
    public function setEdadDesde($edadDesde)
    {
        $this->edadDesde = $edadDesde;
    }

    /**
     * @return int
     */
    public function getEdadHasta()
    {
        return $this->edadHasta;
    }

    /**
     * @param int $edadHasta
     */
    public function setEdadHasta($edadHasta)
    {
        $this->edadHasta = $edadHasta;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param string $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @return int
     */
    public function getIdHistorial()
    {
        return $this->idHistorial;
    }

    /**
     * @param int $idHistorial
     */
    public function setIdHistorial($idHistorial)
    {
        $this->idHistorial = $idHistorial;
    }


}
