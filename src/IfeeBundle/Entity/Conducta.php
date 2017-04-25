<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conducta
 *
 * @ORM\Table(name="conducta")
 * @ORM\Entity
 */
class Conducta
{
    /**
     * @var string
     *
     * @ORM\Column(name="CARACTERISTICA", type="text", length=65535, nullable=true)
     */
    private $caracteristica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CUMPLE", type="boolean", nullable=true)
     */
    private $cumple;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONDUCTA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConducta;

    /**
     * @return string
     */
    public function getCaracteristica()
    {
        return $this->caracteristica;
    }

    /**
     * @param string $caracteristica
     */
    public function setCaracteristica($caracteristica)
    {
        $this->caracteristica = $caracteristica;
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
     * @return int
     */
    public function getIdConducta()
    {
        return $this->idConducta;
    }

    /**
     * @param int $idConducta
     */
    public function setIdConducta($idConducta)
    {
        $this->idConducta = $idConducta;
    }




}
