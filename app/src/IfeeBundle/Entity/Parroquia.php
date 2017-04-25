<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parroquia
 *
 * @ORM\Table(name="parroquia", indexes={@ORM\Index(name="FK_RELATIONSHIP_4", columns={"ID_CIUDAD"})})
 * @ORM\Entity
 */
class Parroquia
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
     * @ORM\Column(name="ID_PARROQUIA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParroquia;

    /**
     * @var \IfeeBundle\Entity\Ciudad
     *
     * @ORM\ManyToOne(targetEntity="IfeeBundle\Entity\Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CIUDAD", referencedColumnName="ID_CIUDAD")
     * })
     */
    private $idCiudad;


}
