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


}
