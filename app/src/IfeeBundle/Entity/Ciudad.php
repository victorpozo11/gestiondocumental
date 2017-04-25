<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad", indexes={@ORM\Index(name="FK_RELATIONSHIP_3", columns={"ID_PROVINCIA"})})
 * @ORM\Entity
 */
class Ciudad
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
     * @ORM\Column(name="ID_CIUDAD", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCiudad;

    /**
     * @var \IfeeBundle\Entity\Provincia
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PROVINCIA", referencedColumnName="ID_PROVINCIA")
     * })
     */
    private $idProvincia;


}
