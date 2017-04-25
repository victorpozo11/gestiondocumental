<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AprendizajeBasico
 *
 * @ORM\Table(name="aprendizaje_basico")
 * @ORM\Entity
 */
class AprendizajeBasico
{
    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVIDAD", type="text", length=65535, nullable=true)
     */
    private $actividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD_LOGRO", type="integer", nullable=true)
     */
    private $edadLogro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LOGRO", type="boolean", nullable=true)
     */
    private $logro;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_APRENDIZAJE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAprendizaje;


}
