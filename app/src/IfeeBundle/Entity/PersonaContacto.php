<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonaContacto
 *
 * @ORM\Table(name="persona_contacto")
 * @ORM\Entity
 */
class PersonaContacto
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
     * @var integer
     *
     * @ORM\Column(name="CEDULA", type="integer", nullable=true)
     */
    private $cedula;

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
     * @var boolean
     *
     * @ORM\Column(name="USA_TELEFONO", type="boolean", nullable=true)
     */
    private $usaTelefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEFONO2", type="integer", nullable=true)
     */
    private $telefono2;

    /**
     * @var integer
     *
     * @ORM\Column(name="TELEFONO3", type="integer", nullable=true)
     */
    private $telefono3;

    /**
     * @var integer
     *
     * @ORM\Column(name="EDAD", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NACIMIENTO", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_DEFUNCION", type="date", nullable=true)
     */
    private $fechaDefuncion;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO_CIVIL", type="text", length=65535, nullable=true)
     */
    private $estadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="INSTRUCCION", type="text", length=65535, nullable=true)
     */
    private $instruccion;

    /**
     * @var string
     *
     * @ORM\Column(name="PROFESION", type="text", length=65535, nullable=true)
     */
    private $profesion;

    /**
     * @var string
     *
     * @ORM\Column(name="LUGAR_TRABAJO", type="text", length=65535, nullable=true)
     */
    private $lugarTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_DISCAPACIDAD", type="text", length=65535, nullable=true)
     */
    private $descripcionDiscapacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="text", length=65535, nullable=true)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTACTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContacto;


}
