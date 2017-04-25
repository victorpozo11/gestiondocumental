<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidad
 *
 * @ORM\Table(name="entidad")
 * @ORM\Entity
 */
class Entidad
{
    /**
     * @var string
     *
     * @ORM\Column(name="RAZON_SOCIAL", type="text", length=65535, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_CORTO", type="text", length=65535, nullable=true)
     */
    private $nombreCorto;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="text", length=65535, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="text", length=65535, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO", type="text", length=65535, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="RUC", type="text", length=65535, nullable=true)
     */
    private $ruc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="RUTA_LOGO", type="text", length=65535, nullable=true)
     */
    private $rutaLogo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ENTIDAD", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntidad;


}
