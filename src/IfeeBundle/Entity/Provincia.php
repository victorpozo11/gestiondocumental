<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia", indexes={@ORM\Index(name="FK_RELATIONSHIP_2", columns={"ID_REGION"})})
 * @ORM\Entity
 */
class Provincia
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO", type="string", length=100, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="text", length=65535, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROVINCIA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
     * @var \IfeeBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_REGION", referencedColumnName="ID_REGION")
     * })
     */
    private $idRegion;

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param string $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return int
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * @param int $idProvincia
     */
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;
    }

    /**
     * @return Region
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * @param Region $idRegion
     */
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function __toString()
    {
        return $this->getNombre()."";
    }
}
