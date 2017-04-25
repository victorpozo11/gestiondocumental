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

    /**
     * @return string
     */
    public function getMotorGiros()
    {
        return $this->motorGiros;
    }

    /**
     * @param string $motorGiros
     */
    public function setMotorGiros($motorGiros)
    {
        $this->motorGiros = $motorGiros;
    }

    /**
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param \DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getAdicionalesPeriodo()
    {
        return $this->adicionalesPeriodo;
    }

    /**
     * @param string $adicionalesPeriodo
     */
    public function setAdicionalesPeriodo($adicionalesPeriodo)
    {
        $this->adicionalesPeriodo = $adicionalesPeriodo;
    }

    /**
     * @return string
     */
    public function getResultados()
    {
        return $this->resultados;
    }

    /**
     * @param string $resultados
     */
    public function setResultados($resultados)
    {
        $this->resultados = $resultados;
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
     * @return \DateTime
     */
    public function getFechaReingreso()
    {
        return $this->fechaReingreso;
    }

    /**
     * @param \DateTime $fechaReingreso
     */
    public function setFechaReingreso($fechaReingreso)
    {
        $this->fechaReingreso = $fechaReingreso;
    }

    /**
     * @return \DateTime
     */
    public function getFechaEgreso()
    {
        return $this->fechaEgreso;
    }

    /**
     * @param \DateTime $fechaEgreso
     */
    public function setFechaEgreso($fechaEgreso)
    {
        $this->fechaEgreso = $fechaEgreso;
    }

    /**
     * @return string
     */
    public function getCausaEgreso()
    {
        return $this->causaEgreso;
    }

    /**
     * @param string $causaEgreso
     */
    public function setCausaEgreso($causaEgreso)
    {
        $this->causaEgreso = $causaEgreso;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return int
     */
    public function getIdSeguimiento()
    {
        return $this->idSeguimiento;
    }

    /**
     * @param int $idSeguimiento
     */
    public function setIdSeguimiento($idSeguimiento)
    {
        $this->idSeguimiento = $idSeguimiento;
    }


}
