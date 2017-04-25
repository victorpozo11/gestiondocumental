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


}
