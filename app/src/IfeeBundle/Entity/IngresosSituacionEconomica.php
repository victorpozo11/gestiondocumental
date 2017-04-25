<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngresosSituacionEconomica
 *
 * @ORM\Table(name="ingresos_situacion_economica")
 * @ORM\Entity
 */
class IngresosSituacionEconomica
{
    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_APORTANTE", type="text", length=65535, nullable=true)
     */
    private $descripcionAportante;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO_INGRESO", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $montoIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_INGRESOS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIngresos;


}
