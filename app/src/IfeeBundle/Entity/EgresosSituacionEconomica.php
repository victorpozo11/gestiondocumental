<?php

namespace IfeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EgresosSituacionEconomica
 *
 * @ORM\Table(name="egresos_situacion_economica")
 * @ORM\Entity
 */
class EgresosSituacionEconomica
{
    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_RUBRO", type="text", length=65535, nullable=true)
     */
    private $descripcionRubro;

    /**
     * @var string
     *
     * @ORM\Column(name="MONTO_EGRESO", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $montoEgreso;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EGRESOS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEgresos;


}
