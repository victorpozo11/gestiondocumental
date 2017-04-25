<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antecedentes
 *
 * @ORM\Table(name="antecedentes")
 * @ORM\Entity
 */
class Antecedentes
{
    /**
     * @var string
     *
     * @ORM\Column(name="PARIENTE", type="text", length=65535, nullable=true)
     */
    private $pariente;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ANTECEDENTES", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAntecedentes;

    /**
     * @return string
     */
    public function getPariente()
    {
        return $this->pariente;
    }

    /**
     * @param string $pariente
     */
    public function setPariente($pariente)
    {
        $this->pariente = $pariente;
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
    public function getIdAntecedentes()
    {
        return $this->idAntecedentes;
    }

    /**
     * @param int $idAntecedentes
     */
    public function setIdAntecedentes($idAntecedentes)
    {
        $this->idAntecedentes = $idAntecedentes;
    }

    public function __toString()
    {
        return $this->getPariente()."";
    }
}
