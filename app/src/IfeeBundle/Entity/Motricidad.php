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


}
