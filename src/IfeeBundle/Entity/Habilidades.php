<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habilidades
 *
 * @ORM\Table(name="habilidades")
 * @ORM\Entity
 */
class Habilidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="ETAPA", type="text", length=65535, nullable=true)
     */
    private $etapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HABILIDAD", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHabilidad;

    /**
     * @return string
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * @param string $etapa
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;
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
    public function getIdHabilidad()
    {
        return $this->idHabilidad;
    }

    /**
     * @param int $idHabilidad
     */
    public function setIdHabilidad($idHabilidad)
    {
        $this->idHabilidad = $idHabilidad;
    }


}
