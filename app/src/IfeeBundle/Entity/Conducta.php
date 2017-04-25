<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conducta
 *
 * @ORM\Table(name="conducta")
 * @ORM\Entity
 */
class Conducta
{
    /**
     * @var string
     *
     * @ORM\Column(name="CARACTERISTICA", type="text", length=65535, nullable=true)
     */
    private $caracteristica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CUMPLE", type="boolean", nullable=true)
     */
    private $cumple;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONDUCTA", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConducta;


}
