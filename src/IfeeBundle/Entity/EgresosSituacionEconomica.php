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

    /**
     * @return string
     */
    public function getDescripcionRubro()
    {
        return $this->descripcionRubro;
    }

    /**
     * @param string $descripcionRubro
     */
    public function setDescripcionRubro($descripcionRubro)
    {
        $this->descripcionRubro = $descripcionRubro;
    }

    /**
     * @return string
     */
    public function getMontoEgreso()
    {
        return $this->montoEgreso;
    }

    /**
     * @param string $montoEgreso
     */
    public function setMontoEgreso($montoEgreso)
    {
        $this->montoEgreso = $montoEgreso;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param string $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @return int
     */
    public function getIdEgresos()
    {
        return $this->idEgresos;
    }

    /**
     * @param int $idEgresos
     */
    public function setIdEgresos($idEgresos)
    {
        $this->idEgresos = $idEgresos;
    }


}
