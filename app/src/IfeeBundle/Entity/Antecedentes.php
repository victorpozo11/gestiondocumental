<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antecedentes
 *
 * @ORM\Table(name="antecedentes")
 * @ORM\Entity
 */
class Antecedentes
{
    /**
     * @var string
     *
     * @ORM\Column(name="PARIENTE", type="text", length=65535, nullable=true)
     */
    private $pariente;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ANTECEDENTES", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAntecedentes;


}
