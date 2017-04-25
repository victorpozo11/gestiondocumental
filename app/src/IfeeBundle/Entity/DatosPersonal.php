<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatosPersonal
 *
 * @ORM\Table(name="datos_personal")
 * @ORM\Entity
 */
class DatosPersonal
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
     * @ORM\Column(name="CARGO", type="text", length=65535, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO", type="text", length=65535, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="CICLO", type="text", length=65535, nullable=true)
     */
    private $ciclo;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTADO", type="text", length=65535, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="FECHA_INGRESO_INSTITUCION", type="text", length=65535, nullable=true)
     */
    private $fechaIngresoInstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="text", length=65535, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="text", length=65535, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="text", length=65535, nullable=true)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DATOS_PERSONAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDatosPersonal;


}
