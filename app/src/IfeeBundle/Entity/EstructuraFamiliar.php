<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstructuraFamiliar
 *
 * @ORM\Table(name="estructura_familiar")
 * @ORM\Entity
 */
class EstructuraFamiliar
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES", type="text", length=65535, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="text", length=65535, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="PARENTESCO", type="text", length=65535, nullable=true)
     */
    private $parentesco;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="INSTRUCCION", type="text", length=65535, nullable=true)
     */
    private $instruccion;

    /**
     * @var string
     *
     * @ORM\Column(name="OCUPACION", type="text", length=65535, nullable=true)
     */
    private $ocupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DISCAPACIDAD", type="boolean", nullable=true)
     */
    private $discapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_DISCAPACIDAD", type="text", length=65535, nullable=true)
     */
    private $descripcionDiscapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACION", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CONVIVE", type="boolean", nullable=true)
     */
    private $convive;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONVIVE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConvive;


}
