<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motricidad
 *
 * @ORM\Table(name="motricidad")
 * @ORM\Entity
 */
class Motricidad
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
     * @ORM\Column(name="TIPO", type="text", length=65535, nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MOTRICIDAD", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMotricidad;

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
     * @return int
     */
    public function getIdMotricidad()
    {
        return $this->idMotricidad;
    }

    /**
     * @param int $idMotricidad
     */
    public function setIdMotricidad($idMotricidad)
    {
        $this->idMotricidad = $idMotricidad;
    }


}
