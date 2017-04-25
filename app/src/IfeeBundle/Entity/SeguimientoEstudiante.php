<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeguimientoEstudiante
 *
 * @ORM\Table(name="seguimiento_estudiante")
 * @ORM\Entity
 */
class SeguimientoEstudiante
{
    /**
     * @var string
     *
     * @ORM\Column(name="MOTOR_GIROS", type="text", length=65535, nullable=true)
     */
    private $motorGiros;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ADICIONALES_PERIODO", type="text", length=65535, nullable=true)
     */
    private $adicionalesPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULTADOS", type="text", length=65535, nullable=true)
     */
    private $resultados;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_REINGRESO", type="date", nullable=true)
     */
    private $fechaReingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_EGRESO", type="date", nullable=true)
     */
    private $fechaEgreso;

    /**
     * @var string
     *
     * @ORM\Column(name="CAUSA_EGRESO", type="text", length=65535, nullable=true)
     */
    private $causaEgreso;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SEGUIMIENTO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSeguimiento;


}
